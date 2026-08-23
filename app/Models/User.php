<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Paddle\Billable;
use App\Models\PremiumCredit;
use Illuminate\Support\Facades\DB;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, Billable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function hasActivePremiumSubscription(): bool
    {
        return $this->subscribed('default');
    }

    public function canUsePremiumAnalysis(): bool
    {
        return $this->hasActivePremiumSubscription()
            || $this->availablePremiumCredits() > 0;
    }

    public function premiumCredits()
    {
        return $this->hasMany(PremiumCredit::class);
    }

    public function availablePremiumCredits(): int
    {
        return $this->premiumCredits()->get()->sum(function (PremiumCredit $credit) {
            return $credit->remaining();
        });
    }

    public function consumePremiumCredit(): void
    {
        DB::transaction(function () {
            $credit = $this->premiumCredits()
                ->whereColumn('used', '<', 'credits')
                ->orderBy('created_at')
                ->lockForUpdate()
                ->first();

            if (!$credit) {
                throw new \RuntimeException('No premium credits remaining.');
            }

            $credit->consume();
        });
    }

}
