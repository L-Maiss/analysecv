@extends('layouts.landing')

    @push('styles')
        @vite('resources/css/upload.css')
    @endpush

@section('content')

<!-- Pricing Plans -->
{{-- <section id="plans" class="py-24 bg-gray-50"> --}}
    <div class="max-w-7xl mx-auto px-6 pt-5">

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900">
                Choose Your Plan
            </h2>

            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Start for free or unlock every premium feature to maximize your chances of landing interviews.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-3">

            <!-- Free -->
            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 transition hover:-translate-y-2 hover:shadow-xl">

                <h3 class="text-2xl font-bold text-gray-900">
                    Free
                </h3>

                <p class="mt-2 text-gray-500">
                    Try AnalyseCV before upgrading.
                </p>

                <div class="mt-8">
                    <span class="text-5xl font-extrabold">$0</span>
                    <span class="text-gray-500">Forever</span>
                </div>
{{-- 
                <a href="{{ route('register') }}"
                   class="mt-8 block w-full rounded-xl border border-gray-300 py-3 text-center font-semibold hover:bg-gray-100 transition">
                    Get Started
                </a> --}}

                <ul class="mt-8 space-y-4">

                    <li class="flex items-center gap-3">
                        ✓ 3 Basic Analysis
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ 3 Basic CV vs Job Matching
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ ATS Score
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ Strengths & Weaknesses
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ Basic AI Summary
                    </li>

                    <li class="flex items-center gap-3 text-gray-400">
                        ✕ Detailed AI Recommendations
                    </li>

                    <li class="flex items-center gap-3 text-gray-400">
                        ✕ Future Premium Features
                    </li>

                    <li class="flex items-center gap-3 text-gray-400">
                        ✕ Priority Processing
                    </li>

                </ul>

            </div>

            <!-- PRO -->
            <div class="relative rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 text-white p-8 shadow-2xl scale-105">

                <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-black px-4 py-2 rounded-full text-sm font-bold shadow">
                    ⭐ MOST POPULAR
                </span>

                <h3 class="text-2xl font-bold">
                    Pro
                </h3>

                <p class="mt-2 text-blue-100">
                    Unlimited resume improvements.
                </p>

                <div class="mt-8">
                    <span class="text-5xl font-extrabold">$15</span>
                    <span class="text-blue-200">/month</span>
                </div>

                @if(auth()->check())
                    <form method="POST" action="{{ route('billing.subscribe') }}">
                        @csrf

                        <button
                            type="submit"
                            class="mt-8 block w-full rounded-xl bg-white text-blue-700 py-3 text-center font-bold hover:bg-gray-100 transition">
                            Upgrade to Pro
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mt-8 block w-full rounded-xl bg-white text-blue-700 py-3 text-center font-bold hover:bg-gray-100 transition">
                        Upgrade to Pro
                    </a>
                @endif


                <ul class="mt-8 space-y-4">

                    <li>✓ Unlimited Resume Analysis</li>

                    <li>✓ ATS Score</li>

                    <li>✓ CV vs Job Description Matching</li>

                    <li>✓ Detailed AI Recommendations</li>

                    {{-- <li>✓ Resume History</li> --}}

                    <li>✓ Priority AI Processing</li>

                    {{-- <li>✓ Premium Support</li> --}}

                    <li>✓ Future Premium Features</li>

                </ul>

            </div>

            <!-- One-Time -->
            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 transition hover:-translate-y-2 hover:shadow-xl">

                <h3 class="text-2xl font-bold text-gray-900">
                    One-Time
                </h3>

                <p class="mt-2 text-gray-500">
                    Perfect if you only need a few analysis.
                </p>

                <div class="mt-8">
                    <span class="text-5xl font-extrabold">$4</span>
                    <span class="text-gray-500">Once</span>
                </div>

                @if(auth()->check())
                    <form action="{{ route('billing.buy-credits') }}" method="POST">
                        @csrf

                        <button
                            type="submit"
                            class="mt-8 block w-full rounded-xl bg-gray-900 text-white py-3 text-center font-semibold hover:bg-black transition">
                            Buy Credits
                        </button>
                    </form>
                @else
                    <a href="#" class="mt-8 block w-full rounded-xl bg-gray-900 text-white py-3 text-center font-semibold hover:bg-black transition">
                        Buy Credits
                    </a>
                @endif

                <ul class="mt-8 space-y-4">

                    <li>✓ 5 Premium Analysis</li>

                    <li>✓ ATS Score</li>

                    <li>✓ AI Summary</li>

                    <li>✓ Strengths & Weaknesses</li>

                    <li>✓ CV vs Job Match</li>

                    {{-- <li>✓ Download Report</li> --}}

                    <li>✓ No Subscription</li>

                </ul>

            </div>

        </div>

    </div>
</section>

@endsection
