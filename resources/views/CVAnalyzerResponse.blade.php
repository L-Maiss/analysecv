@php
    $result = session('result');
@endphp

@extends('layouts.landing')

@section('content')

    @if(isset($result))

        <div class="container mx-auto max-w-5xl py-12">

            <a href="{{ url('/') }}"
            class="text-purple-600 hover:underline">
                ← Back
            </a>

            <h1 class="text-4xl font-bold mt-6 mb-10">
                Resume Analysis
            </h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="bg-white rounded-2xl shadow p-8 text-center">

                    <h2 class="text-gray-500">
                        ATS Score
                    </h2>

                    <div class="text-6xl font-bold text-purple-600 mt-4">
                        {{ $result['ats_score'] }}%
                    </div>

                </div>

                <div class="lg:col-span-2 bg-white rounded-2xl shadow p-8">

                    <h2 class="text-2xl font-bold mb-4">
                        Summary
                    </h2>

                    <p class="text-gray-600">
                        {{ $result['summary'] }}
                    </p>

                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">

                <div class="bg-white rounded-2xl shadow p-8">

                    <h2 class="text-xl font-bold mb-4">
                        Strengths
                    </h2>

                    <ul class="space-y-2">
                        @foreach($result['strengths'] as $strength)
                            <li>✅ {{ $strength }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="bg-white rounded-2xl shadow p-8">

                    <h2 class="text-xl font-bold mb-4">
                        Weaknesses
                    </h2>

                    <ul class="space-y-2">
                        @foreach($result['weaknesses'] as $weakness)
                            <li>❌ {{ $weakness }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

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

            <div class="bg-white rounded-2xl shadow p-8 mt-8">

                <h2 class="text-xl font-bold mb-4">
                    Resume Improvements
                </h2>

                <ul class="space-y-3">

                    @foreach($result['resume_improvements'] as $item)

                        <li>• {{ $item }}</li>

                    @endforeach

                </ul>

            </div>

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

            <div class="bg-white rounded-2xl shadow p-8 mt-8 mb-20">

                <h2 class="text-xl font-bold mb-4">
                    Overall Feedback
                </h2>

                <p class="text-gray-600">
                    {{ $result['overall_feedback'] }}
                </p>

            </div>

        </div>

    @endif

@endsection