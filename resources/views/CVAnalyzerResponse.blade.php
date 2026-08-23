@php
    $result = session('result');
    $isPremium = session('isPremium', false);
@endphp

@extends('layouts.landing')

@section('content')

    @if(isset($result))

        <div class="container mx-auto max-w-5xl py-12">

            <a href="{{ url('/') }}"
               class="text-purple-600 hover:underline">
                ← Back
            </a>

            <div class="flex items-center justify-between mt-6 mb-10">

                <h1 class="text-4xl font-bold">
                    Resume Analysis
                </h1>

                @if($isPremium)
                    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full font-medium">
                        Premium Analysis
                    </span>
                @else
                    <span class="px-4 py-2 bg-gray-100 text-gray-600 rounded-full font-medium">
                        Free Analysis
                    </span>
                @endif

            </div>


            {{-- ATS SCORE + SUMMARY --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                {{-- ATS SCORE --}}
                <div class="bg-white rounded-2xl shadow p-8 text-center">

                    <h2 class="text-gray-500">
                        ATS Score
                    </h2>

                    <div class="text-6xl font-bold text-purple-600 mt-4">
                        {{ $result['ats_score'] }}%
                    </div>

                </div>


                {{-- SUMMARY --}}
                <div class="lg:col-span-2 bg-white rounded-2xl shadow p-8">

                    <h2 class="text-2xl font-bold mb-4">
                        Summary
                    </h2>

                    <p class="text-gray-600">
                        {{ $result['summary'] }}
                    </p>

                </div>

            </div>


            {{-- STRENGTHS + WEAKNESSES --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">

                {{-- STRENGTHS --}}
                <div class="bg-white rounded-2xl shadow p-8">

                    <h2 class="text-xl font-bold mb-4">
                        Strengths
                    </h2>

                    <ul class="space-y-2">

                        @foreach($result['strengths'] as $strength)

                            <li>
                                ✅ {{ $strength }}
                            </li>

                        @endforeach

                    </ul>

                </div>


                {{-- WEAKNESSES --}}
                <div class="bg-white rounded-2xl shadow p-8">

                    <h2 class="text-xl font-bold mb-4">
                        Weaknesses
                    </h2>

                    <ul class="space-y-2">

                        @foreach($result['weaknesses'] as $weakness)

                            <li>
                                ❌ {{ $weakness }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>


            {{-- PREMIUM CONTENT --}}
            @if($isPremium)

                {{-- MISSING KEYWORDS --}}
                <div class="bg-white rounded-2xl shadow p-8 mt-8">

                    <h2 class="text-xl font-bold mb-4">
                        Missing Keywords
                    </h2>

                    <div class="flex flex-wrap gap-3">

                        @foreach($result['missing_keywords'] as $keyword)

                            <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full">
                                {{ $keyword }}
                            </span>

                        @endforeach

                    </div>

                </div>


                {{-- RESUME IMPROVEMENTS --}}
                <div class="bg-white rounded-2xl shadow p-8 mt-8">

                    <h2 class="text-xl font-bold mb-4">
                        Resume Improvements
                    </h2>

                    <ul class="space-y-3">

                        @foreach($result['resume_improvements'] as $item)

                            <li>
                                • {{ $item }}
                            </li>

                        @endforeach

                    </ul>

                </div>


                {{-- RECOMMENDED JOB ROLES --}}
                <div class="bg-white rounded-2xl shadow p-8 mt-8">

                    <h2 class="text-xl font-bold mb-4">
                        Recommended Job Roles
                    </h2>

                    <div class="flex flex-wrap gap-3">

                        @foreach($result['recommended_job_roles'] as $role)

                            <span class="px-4 py-2 bg-gray-100 rounded-full">
                                {{ $role }}
                            </span>

                        @endforeach

                    </div>

                </div>


                {{-- OVERALL FEEDBACK --}}
                <div class="bg-white rounded-2xl shadow p-8 mt-8 mb-20">

                    <h2 class="text-xl font-bold mb-4">
                        Overall Feedback
                    </h2>

                    <p class="text-gray-600">
                        {{ $result['overall_feedback'] }}
                    </p>

                </div>


            @else

                {{-- PREMIUM UPGRADE --}}
                <div class="relative bg-white rounded-2xl shadow p-8 mt-8 mb-20 overflow-hidden">

                    {{-- Fake preview --}}
                    <div class="blur-sm select-none pointer-events-none">

                        <h2 class="text-xl font-bold mb-4">
                            Premium Analysis
                        </h2>

                        <div class="space-y-6">

                            <div>
                                <h3 class="font-semibold">
                                    Missing Keywords
                                </h3>

                                <div class="h-4 bg-gray-200 rounded mt-3 w-3/4"></div>
                                <div class="h-4 bg-gray-200 rounded mt-2 w-1/2"></div>
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    Resume Improvements
                                </h3>

                                <div class="h-4 bg-gray-200 rounded mt-3"></div>
                                <div class="h-4 bg-gray-200 rounded mt-2"></div>
                                <div class="h-4 bg-gray-200 rounded mt-2 w-5/6"></div>
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    Recommended Job Roles
                                </h3>

                                <div class="h-4 bg-gray-200 rounded mt-3 w-2/3"></div>
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    Overall Feedback
                                </h3>

                                <div class="h-4 bg-gray-200 rounded mt-3"></div>
                                <div class="h-4 bg-gray-200 rounded mt-2"></div>
                                <div class="h-4 bg-gray-200 rounded mt-2 w-4/5"></div>
                            </div>

                        </div>

                    </div>


                    {{-- Overlay --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-white/70">

                        <div class="text-center max-w-md px-6">

                            <div class="text-4xl mb-4">
                                🔒
                            </div>

                            <h2 class="text-2xl font-bold mb-3">
                                Unlock Premium Analysis
                            </h2>

                            <p class="text-gray-600 mb-6">
                                Get detailed keyword analysis, resume improvements,
                                recommended job roles, and complete feedback.
                            </p>

                            <a href="{{ route('pricing') }}"
                               class="inline-block px-6 py-3 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition">
                                Upgrade to Premium
                            </a>

                        </div>

                    </div>

                </div>

            @endif

        </div>

    @endif

@endsection