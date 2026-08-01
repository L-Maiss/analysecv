@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-purple-50">

    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 h-[450px] w-[450px] rounded-full bg-[#7C53EC]/10 blur-3xl"></div>
            <div class="absolute right-0 top-32 h-72 w-72 rounded-full bg-indigo-200/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-6 pt-24 pb-16">

            <div class="text-center">

                <span
                    class="inline-flex items-center rounded-full border border-[#7C53EC]/20 bg-[#7C53EC]/10 px-4 py-2 text-sm font-medium text-[#7C53EC]">
                    Legal
                </span>

                <h1 class="mt-6 text-5xl font-bold tracking-tight text-gray-900">
                    Privacy Policy
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    We believe privacy should be simple and transparent.
                    This page explains what information AnalyseCV collects,
                    how it is used, and how we protect it.
                </p>

                <p class="mt-4 text-sm text-gray-500">
                    Last updated: August 1, 2026
                </p>

            </div>

        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-4xl mx-auto px-6">

            <div class="rounded-3xl border border-gray-200 bg-white shadow-sm p-10 md:p-14 space-y-12">

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        1. Introduction
                    </h2>

                    <p class="text-gray-600 leading-8">
                        Welcome to <strong>AnalyseCV</strong> ("we", "our", or "us").
                        We respect your privacy and are committed to protecting your
                        personal information.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        This Privacy Policy explains what information we collect,
                        how we use it, and your rights when using analysecv.com.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        2. Information We Collect
                    </h2>

                    <p class="text-gray-600 mb-4">
                        Depending on how you use AnalyseCV, we may collect:
                    </p>

                    <ul class="space-y-3 list-disc pl-6 text-gray-600">
                        <li>Resume files you upload (PDF, DOC, DOCX).</li>
                        <li>Text extracted from uploaded resumes.</li>
                        <li>Job descriptions you provide for analysis.</li>
                        <li>Email address (if user accounts are introduced).</li>
                        <li>Browser, device, IP address and technical usage information.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        3. How We Use Your Information
                    </h2>

                    <ul class="space-y-3 list-disc pl-6 text-gray-600">
                        <li>Analyze resumes using AI.</li>
                        <li>Compare resumes with job descriptions.</li>
                        <li>Generate personalized suggestions.</li>
                        <li>Improve website performance and features.</li>
                        <li>Protect the platform against abuse and fraud.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        4. AI Processing
                    </h2>

                    <p class="text-gray-600 leading-8">
                        AnalyseCV uses artificial intelligence to analyze resumes
                        and job descriptions.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        Resume content and job descriptions may be securely processed
                        by trusted third-party AI providers, including
                        <strong>Google Gemini</strong>, solely for generating analysis
                        results.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        5. File Storage
                    </h2>

                    <p class="text-gray-600 leading-8">
                        Uploaded resumes are processed only for generating AI analysis.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        AnalyseCV does not permanently store uploaded resumes unless
                        this functionality is explicitly introduced in a future version
                        of the service.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        6. Cookies
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We use cookies that are necessary for the website to function
                        correctly.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        Analytics cookies may also be used to improve our services.
                        Please see our Cookie Policy for more information.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        7. Google Analytics
                    </h2>

                    <p class="text-gray-600 leading-8">
                        AnalyseCV uses <strong>Google Analytics</strong> to understand
                        how visitors interact with the website and improve our services.
                    </p>

                    <div class="mt-6 rounded-2xl bg-gray-50 border border-gray-200 p-6">

                        <h3 class="font-semibold text-gray-900 mb-3">
                            Google Analytics may collect:
                        </h3>

                        <ul class="space-y-2 list-disc pl-6 text-gray-600">
                            <li>Visited pages</li>
                            <li>Time spent on pages</li>
                            <li>Browser and device information</li>
                            <li>Approximate geographic location</li>
                            <li>Referring websites</li>
                            <li>IP address (which may be anonymized where applicable)</li>
                        </ul>

                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        8. Data Security
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We use HTTPS encryption, secure servers, and industry-standard
                        security practices to protect your information.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        While we strive to protect your data, no online service can
                        guarantee absolute security.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        9. Your Rights
                    </h2>

                    <p class="text-gray-600 mb-4">
                        Depending on applicable law, you may have the right to:
                    </p>

                    <ul class="space-y-3 list-disc pl-6 text-gray-600">
                        <li>Access your personal information.</li>
                        <li>Correct inaccurate information.</li>
                        <li>Request deletion of your information.</li>
                        <li>Object to certain types of processing.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        10. Third-Party Services
                    </h2>

                    <p class="text-gray-600 mb-4">
                        AnalyseCV uses trusted third-party providers including:
                    </p>

                    <ul class="space-y-3 list-disc pl-6 text-gray-600">
                        <li>Google Gemini (AI processing)</li>
                        <li>Google Analytics (website analytics)</li>
                        <li>Cloudflare (security and CDN)</li>
                        <li>Stripe (payment processing, when available)</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        11. Changes to This Policy
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We may update this Privacy Policy from time to time.
                        The latest version will always be available on this page.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        12. Contact
                    </h2>

                    <p class="text-gray-600 leading-8">
                        If you have any questions regarding this Privacy Policy,
                        please contact us through the contact information provided
                        on analysecv.com.
                    </p>
                </div>

            </div>

        </div>
    </section>

</div>
@endsection