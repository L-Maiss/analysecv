@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-purple-50">

    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 h-[450px] w-[450px] rounded-full bg-[#7C53EC]/10 blur-3xl"></div>
            <div class="absolute left-0 bottom-0 h-80 w-80 rounded-full bg-indigo-200/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-6 pt-24 pb-16">

            <div class="text-center">

                <span
                    class="inline-flex items-center rounded-full border border-[#7C53EC]/20 bg-[#7C53EC]/10 px-4 py-2 text-sm font-medium text-[#7C53EC]">
                    Legal
                </span>

                <h1 class="mt-6 text-5xl font-bold tracking-tight text-gray-900">
                    Terms of Service
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    These Terms of Service govern your use of AnalyseCV.
                    By using our website, you agree to these terms and conditions.
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
                        1. Acceptance of Terms
                    </h2>

                    <p class="text-gray-600 leading-8">
                        By accessing or using AnalyseCV, you agree to comply with
                        these Terms of Service. If you do not agree with these terms,
                        please do not use the website.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        2. Description of Service
                    </h2>

                    <p class="text-gray-600 leading-8">
                        AnalyseCV provides AI-powered tools that help users analyze
                        resumes, compare resumes with job descriptions, and generate
                        personalized career recommendations.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        The service may evolve over time and features may be added,
                        modified, or removed without prior notice.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        3. User Responsibilities
                    </h2>

                    <p class="text-gray-600 mb-4">
                        By using AnalyseCV, you agree that:
                    </p>

                    <ul class="list-disc pl-6 space-y-3 text-gray-600">
                        <li>You own or have permission to upload any files you submit.</li>
                        <li>You will not upload illegal, malicious, or harmful content.</li>
                        <li>You will not attempt to disrupt or interfere with the website.</li>
                        <li>You will not misuse or abuse our services.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        4. AI-Generated Content
                    </h2>

                    <p class="text-gray-600 leading-8">
                        AnalyseCV uses artificial intelligence to generate resume
                        analysis, recommendations, ATS scores, and other suggestions.
                    </p>

                    <div class="mt-6 rounded-2xl border border-yellow-200 bg-yellow-50 p-6">

                        <h3 class="font-semibold text-yellow-900 mb-3">
                            Important
                        </h3>

                        <p class="text-yellow-800 leading-7">
                            AI-generated content is provided for informational purposes
                            only and should not be considered professional career,
                            legal, financial, or employment advice.
                        </p>

                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        5. No Guarantee of Employment
                    </h2>

                    <p class="text-gray-600 leading-8">
                        While AnalyseCV aims to improve resumes and job applications,
                        we do not guarantee:
                    </p>

                    <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-600">
                        <li>Employment.</li>
                        <li>Job interviews.</li>
                        <li>ATS compatibility with every employer.</li>
                        <li>Accuracy of AI-generated recommendations.</li>
                    </ul>

                    <p class="mt-6 text-gray-600 leading-8">
                        Users remain responsible for reviewing all generated content
                        before using it in real job applications.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        6. Intellectual Property
                    </h2>

                    <p class="text-gray-600 leading-8">
                        Unless otherwise stated, all content on AnalyseCV,
                        including the website design, branding, logo, graphics,
                        source code, and written content, is the intellectual
                        property of AnalyseCV and is protected by applicable
                        copyright and intellectual property laws.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        7. Availability of Service
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We strive to keep AnalyseCV available at all times.
                        However, we do not guarantee uninterrupted service.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        The website may occasionally be unavailable due to
                        maintenance, updates, technical issues, or events beyond
                        our reasonable control.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        8. Limitation of Liability
                    </h2>

                    <p class="text-gray-600 leading-8">
                        To the fullest extent permitted by law, AnalyseCV shall
                        not be liable for:
                    </p>

                    <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-600">
                        <li>Loss of employment opportunities.</li>
                        <li>Errors or inaccuracies in AI-generated content.</li>
                        <li>Loss of data.</li>
                        <li>Business interruption.</li>
                        <li>Indirect or consequential damages.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        9. Suspension or Termination
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We reserve the right to suspend or terminate access to
                        AnalyseCV if these Terms are violated or if we believe
                        continued access could harm the service or other users.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        10. Changes to These Terms
                    </h2>

                    <p class="text-gray-600 leading-8">
                        We may update these Terms of Service from time to time.
                        Updated versions will be published on this page.
                    </p>

                    <p class="mt-4 text-gray-600 leading-8">
                        Continued use of AnalyseCV after changes become effective
                        constitutes acceptance of the updated Terms.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        11. Governing Law
                    </h2>

                    <p class="text-gray-600 leading-8">
                        These Terms shall be governed by the applicable laws of
                        the jurisdiction in which AnalyseCV operates, unless
                        otherwise required by applicable law.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        12. Contact
                    </h2>

                    <p class="text-gray-600 leading-8">
                        If you have any questions regarding these Terms of Service,
                        please contact us through the contact information available
                        on analysecv.com.
                    </p>
                </div>

            </div>

        </div>
    </section>

</div>
@endsection