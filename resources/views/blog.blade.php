@extends('layouts.landing')

@section('content')

<div class="max-w-5xl mx-auto px-6 py-20">

    {{-- Hero --}}
    <div class="text-center">

        <span class="inline-flex items-center rounded-full bg-purple-100 px-4 py-2 text-sm font-medium text-purple-700">
            Resume Tips
        </span>

        <h1 class="mt-6 text-5xl font-bold text-gray-900">
            ATS Resume Guide: How to Create a Resume That Gets Past Applicant Tracking Systems
        </h1>

        <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto leading-8">
            Learn how Applicant Tracking Systems work, why resumes get rejected,
            and how to optimize your resume for both ATS software and recruiters.
        </p>

        <div class="mt-8 flex justify-center gap-6 text-sm text-gray-500">
            <span>📅 July 2026</span>
            <span>⏱️ 8 min read</span>
            <span>📄 Resume Guide</span>
        </div>

    </div>

    {{-- Table of contents --}}
    <div class="mt-16 bg-gray-50 rounded-2xl border p-8">

        <h2 class="text-xl font-semibold mb-4">
            Table of Contents
        </h2>

        <ul class="space-y-3 text-purple-600">

            <li><a href="#what-is-ats" class="hover:underline">What is an ATS?</a></li>
            <li><a href="#why" class="hover:underline">Why ATS Matters</a></li>
            <li><a href="#mistakes" class="hover:underline">Common Resume Mistakes</a></li>
            <li><a href="#tips" class="hover:underline">How to Optimize Your Resume</a></li>
            <li><a href="#careerai" class="hover:underline">How CareerAI Helps</a></li>

        </ul>

    </div>

    {{-- Article --}}
    <article class="prose prose-lg max-w-none mt-16">

        <section id="what-is-ats">

            <h2 class="text-xl font-semibold">What is an Applicant Tracking System (ATS)?</h2>

            <p>
                An Applicant Tracking System (ATS) is software used by many employers
                to organize and filter job applications. Before a recruiter reviews
                your resume, it may first be processed by an ATS to extract information
                such as your skills, work experience, education, and keywords.
            </p>

            <br>

            <p>
                These systems help employers manage large numbers of applications,
                but they also mean that resume formatting and relevant keywords matter.
                A resume that is difficult to parse or doesn't reflect the language
                used in the job description may be ranked lower.
            </p>

            <br>

        </section>

        <section id="why">

            <h2 class="text-xl font-semibold">Why ATS Matters</h2>

            <p>
                Many employers use an ATS as part of their hiring process. While
                different systems work differently, presenting your experience
                clearly and using relevant terminology can make it easier for
                recruiters to review your qualifications.
            </p>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-xl my-8">

                <strong>Tip:</strong>

                Tailoring your resume to the specific job description can help
                highlight the experience most relevant to the position.

            </div>

        </section>

        <section id="mistakes">

            <h2 class="text-xl font-semibold">Common Resume Mistakes</h2>

            <ul>

                <li>Using overly complex layouts that are difficult to read.</li>

                <li>Leaving out important technical skills.</li>

                <li>Using vague descriptions instead of measurable achievements.</li>

                <li>Submitting the same resume for every job application.</li>

                <li>Including outdated or irrelevant experience without context.</li>

            </ul>

            <br>

        </section>

        <section id="tips">

            <h2 class="text-xl font-semibold">How to Optimize Your Resume</h2>

            <h3>1. Match Relevant Keywords</h3>

            <p>
                Review the job description carefully and make sure your resume
                accurately reflects the skills and experience you genuinely have.
            </p>

            <h3>2. Keep Formatting Simple</h3>

            <p>
                Use clear headings, standard fonts, and avoid unnecessary graphics
                or tables that may make text extraction more difficult.
            </p>

            <h3>3. Highlight Achievements</h3>

            <p>
                Instead of listing responsibilities alone, describe accomplishments
                using measurable outcomes when possible.
            </p>

            <h3>4. Keep Information Current</h3>

            <p>
                Update your skills, certifications, and projects regularly so your
                resume reflects your latest experience.
            </p>

            <br>

        </section>

        <section id="careerai">

            <h2 class="text-xl font-semibold">How CareerAI Can Help</h2>

            <p>
                CareerAI analyzes your resume and provides practical feedback,
                including an estimated ATS score, strengths, weaknesses,
                improvement suggestions, and interview preparation questions.
            </p>

            <br>

            <p>
                If you're applying for a specific role, you can also compare
                your resume against the job description to identify missing
                keywords and areas where you may want to strengthen your application.
            </p>

        </section>

    </article>

    {{-- CTA --}}
    <div class="mt-20 rounded-3xl bg-gradient-to-r from-purple-600 to-indigo-600 p-10 text-center text-white">

        <h2 class="text-3xl font-bold">
            Ready to Improve Your Resume?
        </h2>

        <p class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
            Upload your resume and receive AI-powered feedback to help you refine
            your application before you apply.
        </p>

        <a href="{{ route('home') }}"
           class="inline-flex items-center mt-8 rounded-xl bg-white px-8 py-4 font-semibold text-purple-700 hover:bg-gray-100 transition">
            Analyze My Resume →
        </a>

    </div>

</div>

@endsection