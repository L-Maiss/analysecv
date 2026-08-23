<?php

namespace App\Listeners;

use App\Models\PremiumCredit;
use Illuminate\Support\Facades\Log;
use Laravel\Paddle\Events\TransactionCompleted;

class AddPremiumCredits
{
    public function handle(TransactionCompleted $event): void
    {
        $transaction = $event->transaction;

        $priceId = data_get(
            $event->payload,
            'data.items.0.price.id'
        );

        if ($priceId !== config('services.paddle.single_analysis_price_id')) {
            return;
        }

        $user = $event->billable;

        if (!$user) {
            Log::warning('Paddle transaction completed without a billable user.', [
                'transaction_id' => $transaction->paddle_id,
            ]);

            return;
        }

        PremiumCredit::firstOrCreate(
            [
                'transaction_id' => $transaction->id,
            ],
            [
                'user_id' => $user->id,
                'credits' => 5,
                'used' => 0,
            ]
        );

        Log::info('Premium credits added.', [
            'user_id' => $user->id,
            'transaction_id' => $transaction->paddle_id,
            'credits' => 5,
        ]);
    }
}