<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{

    public function view()
    {
        return view('pricing');
    }
    public function subscribe(Request $request)
    {
        // if ($request->user()) {
        //     $checkout = $request->user()
        //         ->checkout(config('services.paddle.premium_price_id'))
        //         ->returnTo(route('dashboard'));
        // } 
        
        // if ($request->user()) {
        //     $checkout = $request->user()
        //         ->checkout(config('services.single_analysis_price_id'))
        //         ->returnTo(route('dashboard'));
        // }

        $priceId = config('services.paddle.premium_price_id');

        $checkout = $request->user()
            ->subscribe(
                'default',
                config('services.paddle.premium_price_id')
            )
            ->returnTo(route('dashboard'));

        return view('billing.checkout', compact('checkout', 'priceId'));
    }

    public function buyCredits(Request $request)
    {
        $priceId = config('services.paddle.single_analysis_price_id');

        $checkout = $request->user()
            ->checkout(config('services.paddle.single_analysis_price_id'))
            ->returnTo(route('dashboard'));

        return view('billing.checkout', compact('checkout', 'priceId'));
    }
    
}
