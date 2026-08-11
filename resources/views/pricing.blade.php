@extends('layouts.landing')

    @push('styles')
        @vite('resources/css/upload.css')
    @endpush

@section('content')
{{-- <div class="bg-white">

    <!-- Hero -->
    <section class="relative overflow-hidden rounded-b-3xl">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-indigo-50"></div>

        <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-24 text-center">

            <span
                class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 font-semibold text-sm">
                💼 Pricing
            </span>

            <h1 class="mt-8 text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                Simple Pricing for
                <span class="text-blue-600">Better Resumes</span>
            </h1>

            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600 leading-relaxed">
                Whether you're applying for your first job or your dream career,
                AnalyzeCV helps you create resumes that pass ATS systems
                and impress recruiters.
            </p>

            <!-- Features -->
            <div class="mt-10 flex flex-wrap justify-center gap-4">

                <div class="flex items-center gap-2 bg-white shadow-sm border rounded-full px-5 py-3">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"/>
                    </svg>

                    <span class="text-gray-700 font-medium">
                        ATS Score
                    </span>
                </div>

                <div class="flex items-center gap-2 bg-white shadow-sm border rounded-full px-5 py-3">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"/>
                    </svg>

                    <span class="text-gray-700 font-medium">
                        AI Resume Analysis
                    </span>
                </div>

                <div class="flex items-center gap-2 bg-white shadow-sm border rounded-full px-5 py-3">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"/>
                    </svg>

                    <span class="text-gray-700 font-medium">
                        CV vs Job Match
                    </span>
                </div>

                <div class="flex items-center gap-2 bg-white shadow-sm border rounded-full px-5 py-3">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"/>
                    </svg>

                    <span class="text-gray-700 font-medium">
                        Instant Results
                    </span>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-14">
                <a href="#plans"
                    class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold shadow-lg transition">

                    View Pricing

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"/>

                    </svg>

                </a>
            </div>

        </div>
    </section>

</div> --}}
{{-- @endsection --}}

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
                    Try AnalyzeCV before upgrading.
                </p>

                <div class="mt-8">
                    <span class="text-5xl font-extrabold">$0</span>
                    <span class="text-gray-500">Forever</span>
                </div>

                <a href="{{ route('register') }}"
                   class="mt-8 block w-full rounded-xl border border-gray-300 py-3 text-center font-semibold hover:bg-gray-100 transition">
                    Get Started
                </a>

                <ul class="mt-8 space-y-4">

                    <li class="flex items-center gap-3">
                        ✓ 1 Resume Analysis
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ ATS Score
                    </li>

                    <li class="flex items-center gap-3">
                        ✓ Basic AI Feedback
                    </li>

                    <li class="flex items-center gap-3 text-gray-400">
                        ✕ Resume History
                    </li>

                    <li class="flex items-center gap-3 text-gray-400">
                        ✕ CV vs Job Match
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

                <a href="#"
                   class="mt-8 block w-full rounded-xl bg-white text-blue-700 py-3 text-center font-bold hover:bg-gray-100 transition">
                    Upgrade to Pro
                </a>

                <ul class="mt-8 space-y-4">

                    <li>✓ Unlimited Resume Analysis</li>

                    <li>✓ ATS Optimization</li>

                    <li>✓ CV vs Job Description Matching</li>

                    <li>✓ Detailed AI Recommendations</li>

                    <li>✓ Resume History</li>

                    <li>✓ Priority AI Processing</li>

                    <li>✓ Premium Support</li>

                    <li>✓ Future Premium Features</li>

                </ul>

            </div>

            <!-- One-Time -->
            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 transition hover:-translate-y-2 hover:shadow-xl">

                <h3 class="text-2xl font-bold text-gray-900">
                    One-Time
                </h3>

                <p class="mt-2 text-gray-500">
                    Perfect if you only need one analysis.
                </p>

                <div class="mt-8">
                    <span class="text-5xl font-extrabold">$4</span>
                    <span class="text-gray-500">Once</span>
                </div>

                <a href="#"
                   class="mt-8 block w-full rounded-xl bg-gray-900 text-white py-3 text-center font-semibold hover:bg-black transition">
                    Buy Analysis
                </a>

                <ul class="mt-8 space-y-4">

                    <li>✓ 1 Premium Analysis</li>

                    <li>✓ ATS Score</li>

                    <li>✓ Full AI Feedback</li>

                    <li>✓ CV vs Job Match</li>

                    <li>✓ Download Report</li>

                    <li>✓ No Subscription</li>

                </ul>

            </div>

        </div>

    </div>
</section>

@endsection
