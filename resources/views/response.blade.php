<?php
$result = session('result');
?>

@extends('layouts.landing')

@section('content')

@if(isset($result))
        <div class="max-w-6xl mx-auto py-10 px-4">

    <h1 class="text-4xl font-bold text-gray-900 mb-8">
        Resume Analysis
    </h1>

    {{-- ATS Score --}}
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 text-center border">

        <h2 class="text-lg text-gray-500 mb-3">
            ATS Score
        </h2>

        <div class="inline-flex items-center justify-center w-40 h-40 rounded-full border-8 border-purple-600">
            <span class="text-5xl font-bold text-purple-600">
                {{ $result['ats_score'] }}%
            </span>
        </div>

        <p class="text-gray-500 mt-5">
            Your resume's estimated compatibility with ATS systems.
        </p>

    </div>

    <div class="grid md:grid-cols-2 gap-8">

        {{-- Strengths --}}
        <div class="bg-white rounded-2xl shadow-lg p-8 border">

            <h2 class="text-2xl font-bold text-green-600 mb-6">
                ✅ Strengths
            </h2>

            <ul class="space-y-4">

                @foreach($result['strengths'] as $strength)

                    <li class="flex items-start gap-3">

                        <span class="text-green-500 mt-1">✔</span>

                        <span>{{ $strength }}</span>

                    </li>

                @endforeach

            </ul>

        </div>

        {{-- Weaknesses --}}
        <div class="bg-white rounded-2xl shadow-lg p-8 border">

            <h2 class="text-2xl font-bold text-red-600 mb-6">
                ❌ Weaknesses
            </h2>

            <ul class="space-y-4">

                @foreach($result['weaknesses'] as $weakness)

                    <li class="flex items-start gap-3">

                        <span class="text-red-500 mt-1">•</span>

                        <span>{{ $weakness }}</span>

                    </li>

                @endforeach

            </ul>

        </div>

    </div>

    {{-- Interview Questions --}}
    <div class="bg-white rounded-2xl shadow-lg p-8 border mt-8">

        <h2 class="text-3xl font-bold mb-8">
            💬 Interview Questions
        </h2>

        @foreach($result['interview_questions'] as $question)

            <div class="border rounded-xl p-6 mb-6 last:mb-0">

                <h3 class="font-semibold text-xl text-gray-900 mb-4">
                    {{ $loop->iteration }}. {{ $question['question'] }}
                </h3>

                <div class="bg-purple-50 border-l-4 border-purple-500 rounded-lg p-4">

                    <p class="text-sm text-purple-700 font-semibold mb-2">
                        Ideal Answer
                    </p>

                    <p class="text-gray-700 leading-7">
                        {{ $question['ideal_answer'] }}
                    </p>

                </div>

            </div>

        @endforeach

    </div>

</div>
    @endif
    
@endsection