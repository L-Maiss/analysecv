@extends('layouts.landing')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-20">

    {{-- Hero --}}
    <section class="text-center max-w-4xl mx-auto">

        <span class="inline-flex items-center rounded-full bg-purple-100 px-4 py-2 text-sm font-medium text-purple-700">
            📄 How CareerAI Works
        </span>

        <h1 class="mt-6 text-5xl font-bold text-gray-900">
            Improve Your Resume with AI
        </h1>

        <p class="mt-6 text-xl text-gray-600 leading-8">
            CareerAI helps you analyze your resume, discover weaknesses,
            improve your ATS score, and prepare for your next job application—
            all in just a few minutes.
        </p>

    </section>

    {{-- Steps --}}
    <section class="mt-24">

        <h2 class="text-3xl font-bold text-center mb-14">
            How It Works
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-2xl shadow-lg p-8 border">

                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center text-2xl mb-6">
                    📄
                </div>

                <h3 class="text-xl font-semibold mb-4">
                    1. Upload Your Resume
                </h3>

                <p class="text-gray-600 leading-7">
                    Upload your resume in PDF format.
                    CareerAI securely extracts the content
                    and prepares it for AI analysis.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border">

                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center text-2xl mb-6">
                    🤖
                </div>

                <h3 class="text-xl font-semibold mb-4">
                    2. AI Analysis
                </h3>

                <p class="text-gray-600 leading-7">
                    Our AI evaluates your resume by examining
                    its structure, experience, skills,
                    readability, and ATS compatibility.
                </p>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 border">

                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center text-2xl mb-6">
                    📊
                </div>

                <h3 class="text-xl font-semibold mb-4">
                    3. Get Your Report
                </h3>

                <p class="text-gray-600 leading-7">
                    Receive a detailed report with an ATS score,
                    strengths, weaknesses, interview questions,
                    and personalized improvement suggestions.
                </p>

            </div>

        </div>

    </section>

    {{-- Resume Analyzer --}}
    <section class="mt-24 bg-white rounded-3xl shadow-lg border p-10">

        <h2 class="text-3xl font-bold mb-8">
            📑 Resume Analyzer
        </h2>

        <p class="text-gray-600 leading-8 mb-10">
            The Resume Analyzer helps you understand how recruiters and Applicant
            Tracking Systems (ATS) may evaluate your resume.
        </p>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="font-semibold text-lg mb-4">The AI checks:</h3>

                <ul class="space-y-3 text-gray-700">

                    <li>✅ Resume structure</li>
                    <li>✅ Professional summary</li>
                    <li>✅ Skills</li>
                    <li>✅ Work experience</li>
                    <li>✅ Education</li>
                    <li>✅ Readability</li>
                    <li>✅ ATS compatibility</li>

                </ul>

            </div>

            <div class="bg-purple-50 rounded-xl p-6">

                <h3 class="font-semibold text-lg mb-4">
                    Your report includes:
                </h3>

                <ul class="space-y-3 text-gray-700">

                    <li>📈 ATS Score</li>
                    <li>💪 Strengths</li>
                    <li>⚠ Weaknesses</li>
                    <li>✨ Resume Improvements</li>
                    <li>💼 Recommended Roles</li>
                    <li>🎤 Interview Questions</li>

                </ul>

            </div>

        </div>

    </section>

    {{-- CV vs Job --}}
    <section class="mt-20 bg-white rounded-3xl shadow-lg border p-10">

        <h2 class="text-3xl font-bold mb-8">
            🎯 CV vs Job Vacancy
        </h2>

        <p class="text-gray-600 leading-8 mb-10">

            Upload your resume and paste a job description.

            CareerAI compares both documents to show how well
            your profile matches the position.

        </p>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-gray-50 rounded-xl p-6">

                <h3 class="font-semibold text-lg mb-4">
                    Comparison includes:
                </h3>

                <ul class="space-y-3">

                    <li>✅ Matching skills</li>
                    <li>🔍 Missing keywords</li>
                    <li>💻 Missing technologies</li>
                    <li>📉 Experience gaps</li>

                </ul>

            </div>

            <div class="bg-purple-50 rounded-xl p-6">

                <h3 class="font-semibold text-lg mb-4">
                    Recommendations
                </h3>

                <p class="text-gray-700 leading-7">

                    You'll receive practical suggestions for improving
                    your resume specifically for the selected position,
                    increasing your chances of passing ATS screening.

                </p>

            </div>

        </div>

    </section>

    {{-- Privacy --}}
    <section class="mt-20 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-3xl p-10 text-white">

        <h2 class="text-3xl font-bold mb-6">
            🔒 Your Privacy Matters
        </h2>

        <p class="leading-8 text-purple-100">

            Your uploaded resume is processed only for generating
            your analysis. We do not sell your personal information,
            and your documents are handled securely.

        </p>

    </section>

    {{-- FAQ --}}
    <section class="mt-24">

        <h2 class="text-3xl font-bold text-center mb-12">
            Frequently Asked Questions
        </h2>

        <div class="space-y-6">

            <div class="bg-white rounded-xl shadow border p-6">
                <h3 class="font-semibold text-lg">
                    How long does the analysis take?
                </h3>

                <p class="mt-3 text-gray-600">
                    Usually less than one minute.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow border p-6">
                <h3 class="font-semibold text-lg">
                    What file formats are supported?
                </h3>

                <p class="mt-3 text-gray-600">
                    Currently PDF.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow border p-6">
                <h3 class="font-semibold text-lg">
                    Do I need an account?
                </h3>

                <p class="mt-3 text-gray-600">
                    No. You can start analyzing your resume immediately.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow border p-6">
                <h3 class="font-semibold text-lg">
                    Is CareerAI free?
                </h3>

                <p class="mt-3 text-gray-600">
                    Yes, core features are free. Premium tools and advanced reports
                    may require payment in the future.
                </p>
            </div>

        </div>

    </section>

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