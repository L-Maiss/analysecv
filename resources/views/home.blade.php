@extends('layouts.app')

    @push('styles')
        @vite('resources/css/upload.css')
    @endpush

@section('content')

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Hero -->
    <div class="w-full flex justify-center">
        <div class="flex flex-col items-center text-center pt-2">
                <div class="flex justify-center">
                    <h1
                        class="flex items-center gap-2 font-semibold text-xs text-[#7C53EC] bg-[#7c53ec27] py-2 px-4 rounded-full">
                        <x-lucide-sparkle class="w-3 h-3" />
                        AI Resume & Career Assistant
                    </h1>
                </div>

            <h1
                class="mt-2 text-3xl sm:text-4xl lg:text-6xl font-bold leading-tight max-w-4xl">
                Optimize Your
                <span class="text-[#7C53EC]">
                    Resume with AI
                </span>
            </h1>

            <p
                class="mt-5 text-gray-500 max-w-2xl text-base sm:text-lg">
                Improve your resume, increase your ATS score and land more interviews using AI-powered analysis.
            </p>

        </div>
    </div>

    <!-- Steps -->

    <div
        class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 mt-16 mb-10">

        <!-- Step 1 -->

        <div
            class="flex flex-col sm:flex-row items-center text-center sm:text-left gap-5">

            <div class="relative">

                <div
                    class="bg-[#7c53ec1e] h-14 w-14 rounded-xl flex items-center justify-center">

                    <x-lucide-file-up
                        class="w-7 h-7 text-[#7C53EC]" />

                </div>

                <div
                    class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white">
                    1
                </div>

            </div>

            <div>

                <h3 class="font-semibold text-lg">
                    Upload Resume
                </h3>

                <p class="text-sm text-gray-500">
                    Upload your PDF or DOCX resume securely.
                </p>

            </div>

        </div>

        <!-- Step 2 -->

        <div
            class="flex flex-col sm:flex-row items-center text-center sm:text-left gap-5">

            <div class="relative">

                <div
                    class="bg-[#7c53ec1e] h-14 w-14 rounded-xl flex items-center justify-center">

                    <x-lucide-brain-circuit
                        class="w-7 h-7 text-[#7C53EC]" />

                </div>

                <div
                    class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white">
                    2
                </div>

            </div>

            <div>

                <h3 class="font-semibold text-lg">
                    AI Analysis
                </h3>

                <p class="text-sm text-gray-500">
                    AI reviews every section and calculates your ATS score.
                </p>

            </div>

        </div>

        <!-- Step 3 -->

        <div
            class="flex flex-col sm:flex-row items-center text-center sm:text-left gap-5">

            <div class="relative">

                <div
                    class="bg-[#7c53ec1e] h-14 w-14 rounded-xl flex items-center justify-center">

                    <x-lucide-circle-check-big
                        class="w-7 h-7 text-[#7C53EC]" />

                </div>

                <div
                    class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white">
                    3
                </div>

            </div>

            <div>

                <h3 class="font-semibold text-lg">
                    Get Results
                </h3>

                <p class="text-sm text-gray-500">
                    Receive detailed recommendations in under a minute.
                </p>

            </div>

        </div>

    </div>

    @if ($errors->any())
        <div
            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div
        x-data="{ tab: 'resume' }"
        class="max-w-6xl mx-auto mt-10">

        <div
            {{-- old background color: #7c53ec0d --}}
            class="bg-[#F5F2FE] rounded-3xl shadow-xl border overflow-hidden">

            <!-- Tabs -->

            <div class="flex justify-center p-4">

                <div
                    class="flex flex-col sm:flex-row bg-white rounded-2xl shadow-lg overflow-hidden w-full sm:w-auto">

                    <button
                        @click="tab='resume'"
                        :class="tab=='resume'
                            ? 'bg-[#7C53EC] text-white'
                            : 'text-gray-600 hover:bg-gray-50'"
                        class="w-full sm:w-auto px-6 py-4 font-semibold transition flex justify-center items-center">

                        <x-lucide-file-text
                            class="w-5 h-5 mr-2" />

                        Resume Analyzer

                    </button>

                    <button
                        @click="tab='compare'"
                        :class="tab=='compare'
                            ? 'bg-[#7C53EC] text-white'
                            : 'text-gray-600 hover:bg-gray-50'"
                        class="w-full sm:w-auto px-6 py-4 font-semibold transition flex justify-center items-center">

                        <x-lucide-briefcase-business
                            class="w-5 h-5 mr-2" />

                        CV vs Vacancy

                    </button>

                </div>

            </div>

            <!-- Resume -->

                <div
                    x-show="tab==='resume'"
                    x-transition.opacity.duration.300ms
                    class="px-5 sm:px-8 lg:px-10 pb-8 lg:pb-10"
                >

                    <h2 class="text-2xl sm:text-3xl font-bold mb-3">
                        Analyze Your Resume
                    </h2>

                    <p class="text-gray-500 mb-8 text-sm sm:text-base">
                        Upload your resume and receive AI-powered feedback in under a minute.
                    </p>

                    <form
                        action="{{ route('resume.analyzer') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="space-y-8"
                        id="analyzer-form"
                    >
                        @csrf

                        <div>

                            <div
                                id="drop-zone"
                                class="border-2 border-dashed border-[#7c53ec80] rounded-2xl p-6 sm:p-8 lg:p-10 text-center cursor-pointer transition hover:border-[#7C53EC] hover:bg-[#7c53ec0d] bg-white"
                            >

                                <input
                                    type="file"
                                    id="resume"
                                    name="resume"
                                    accept=".pdf,.docx,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                    class="hidden"
                                >

                                <div class="space-y-5">

                                    <div
                                        id="upload-icon"
                                        class="flex justify-center items-center h-24 w-24 rounded-full bg-[#7c53ec1e] mx-auto transition-all duration-300"
                                    >

                                        <!-- Upload -->
                                        <div id="upload-state">

                                            <x-lucide-cloud-upload
                                                class="w-12 h-12 text-[#7C53EC]"
                                            />

                                        </div>

                                        <!-- Spinner -->
                                        <div
                                            id="loading-state"
                                            class="hidden"
                                        >

                                            <div
                                                class="w-10 h-10 border-4 border-[#7C53EC]/30 border-t-[#7C53EC] rounded-full animate-spin"
                                            ></div>

                                        </div>

                                        <!-- Success -->
                                        <div
                                            id="success-state"
                                            class="hidden"
                                        >

                                            <x-lucide-circle-check-big
                                                class="w-14 h-14 text-green-500 animate-bounce"
                                            />

                                        </div>

                                    </div>

                                    <h3
                                        id="upload-title"
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Drag & Drop your Resume
                                    </h3>

                                    <p
                                        id="upload-subtitle"
                                        class="text-gray-500"
                                    >
                                        PDF or DOCX (Max 5 MB)
                                    </p>

                                    <button
                                        type="button"
                                        id="browse-btn"
                                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-[#7C53EC] text-[#7C53EC] rounded-xl hover:bg-[#7C53EC] hover:text-white transition font-semibold"
                                    >
                                        Browse Files
                                    </button>

                                    <div
                                        id="uploaded-card"
                                        class="hidden mt-6 rounded-xl border bg-[#F8F6FF] border-[#DDD2FF] p-4"
                                    >

                                        <div class="flex items-center justify-between">

                                            <div>

                                                <p
                                                    id="file-name"
                                                    class="font-semibold break-all"
                                                ></p>

                                                <p
                                                    id="file-size"
                                                    class="text-sm text-gray-500"
                                                ></p>

                                            </div>

                                            <button
                                                id="remove-file"
                                                type="button"
                                                class="text-red-500 hover:text-red-600 font-semibold cursor-pointer z-50"
                                            >
                                                Remove
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div
                                class="flex justify-center items-center mt-4 gap-2 text-center"
                            >
                                <x-lucide-lock-keyhole
                                    class="w-4 h-4 text-gray-400 shrink-0"
                                />

                                <span
                                    class="text-gray-400 font-medium text-xs sm:text-sm"
                                >
                                    Your files are secure and confidential.
                                </span>
                            </div>

                        </div>

                        <div class="flex justify-center">

                            <button
                                id="analyze-btn"
                                type="submit"
                                disabled
                                class="w-full sm:w-auto bg-gray-300 text-gray-500 px-8 py-3 rounded-xl cursor-not-allowed transition flex justify-center items-center font-semibold disabled:opacity-100"
                            >

                                <x-lucide-sparkles class="w-5 h-5 mr-2" />

                                Analyze Resume

                                <x-lucide-chevron-right class="w-5 h-5 ml-2" />

                            </button>

                        </div>

                    </form>

                </div>

                <!-- Comparison -->

                <div
                    x-show="tab==='compare'"
                    x-transition.opacity.duration.300ms
                    class="px-5 sm:px-8 lg:px-10 pb-8 lg:pb-10"
                >

                    <h2 class="text-2xl sm:text-3xl font-bold mb-3">
                        CV vs Job Vacancy
                    </h2>

                    <p class="text-gray-500 mb-8 text-sm sm:text-base">
                        Compare your resume with a job description and discover how well you match.
                    </p>

                    <form
                        action="{{ route('resume.comparison') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="space-y-8"
                        id="comparison-form"
                    >
                        @csrf

                        <!-- Resume Upload -->

                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                Resume
                            </label>

                            <div
                                id="drop-zone2"
                                class="border-2 border-dashed border-[#7c53ec80] rounded-2xl p-6 sm:p-8 lg:p-10 text-center cursor-pointer transition hover:border-[#7C53EC] hover:bg-[#7c53ec0d] bg-white"
                            >

                                <input
                                    type="file"
                                    id="resume2"
                                    name="resume2"
                                    accept=".pdf,.doc,.docx"
                                    class="hidden"
                                >

                                <div class="space-y-5">

                                    <div
                                        id="upload-icon2"
                                        class="flex justify-center items-center h-24 w-24 rounded-full bg-[#7c53ec1e] mx-auto transition-all duration-300"
                                    >

                                        <!-- Upload -->
                                        <div id="upload-state2">

                                            <x-lucide-cloud-upload
                                                class="w-12 h-12 text-[#7C53EC]"
                                            />

                                        </div>

                                        <!-- Loading -->
                                        <div
                                            id="loading-state2"
                                            class="hidden"
                                        >

                                            <div
                                                class="w-10 h-10 border-4 border-[#7C53EC]/30 border-t-[#7C53EC] rounded-full animate-spin"
                                            ></div>

                                        </div>

                                        <!-- Success -->
                                        <div
                                            id="success-state2"
                                            class="hidden"
                                        >

                                            <x-lucide-circle-check-big
                                                class="w-14 h-14 text-green-500 animate-bounce"
                                            />

                                        </div>

                                    </div>

                                    <h3
                                        id="upload-title2"
                                        class="text-lg sm:text-xl font-semibold text-gray-800"
                                    >
                                        Drag & Drop your Resume
                                    </h3>

                                    <p
                                        id="upload-subtitle2"
                                        class="text-gray-500 text-sm sm:text-base"
                                    >
                                        PDF or DOCX (Max 5 MB)
                                    </p>

                                    <button
                                        type="button"
                                        id="browse-btn2"
                                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-[#7C53EC] text-[#7C53EC] rounded-xl hover:bg-[#7C53EC] hover:text-white transition font-semibold"
                                    >
                                        Browse Files
                                    </button>

                                    <div
                                        id="uploaded-card2"
                                        class="hidden mt-6 rounded-xl border bg-[#F8F6FF] border-[#DDD2FF] p-4"
                                    >

                                        <div class="flex items-center justify-between">

                                            <div>

                                                <p
                                                    id="file-name2"
                                                    class="font-semibold break-all"
                                                ></p>

                                                <p
                                                    id="file-size2"
                                                    class="text-sm text-gray-500"
                                                ></p>

                                            </div>

                                            <button
                                                id="remove-file2"
                                                type="button"
                                                class="text-red-500 hover:text-red-600 font-semibold"
                                            >
                                                Remove
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div
                                class="flex justify-center items-center mt-4 gap-2 text-center"
                            >
                                <x-lucide-lock-keyhole
                                    class="w-4 h-4 text-gray-400 shrink-0"
                                />

                                <span
                                    class="text-gray-400 font-medium text-xs sm:text-sm"
                                >
                                    Your files are secure and confidential.
                                </span>
                            </div>

                        </div>

                        <!-- Job Description -->

                        <div>

                            <label
                                class="block text-sm font-semibold text-gray-700 mb-3"
                            >
                                Job Description
                            </label>

                            <textarea
                                name="job_description"
                                id="job-description"
                                rows="6"
                                class="w-full rounded-2xl border border-gray-300 p-4 sm:p-5 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none resize-y text-sm sm:text-base"
                                placeholder="Paste the job description here..."
                                required
                            ></textarea>

                        </div>

                        <!-- Submit -->

                        <div class="flex justify-center">

                            <button
                                id="comparison-btn"
                                type="submit"
                                disabled
                                class="w-full sm:w-auto bg-gray-300 text-gray-500 px-8 py-3 rounded-xl cursor-not-allowed transition-all duration-300 flex justify-center items-center font-semibold disabled:opacity-100"
                            >

                                <x-lucide-sparkles class="w-5 h-5 mr-2" />

                                Generate Comparison

                                <x-lucide-chevron-right class="w-5 h-5 ml-2" />

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    @include('components.parts.loader')

@endsection