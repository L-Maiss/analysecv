@extends('layouts.app')

    @push('styles')
        @vite('resources/css/upload.css')
    @endpush

@section('content')

    <div class="container">

        <!-- Resume Upload -->
        <div>
            <div class="w-full flex justify-center items-center">
                <div class="flex-column items-center justify-center">
                    <div class="flex justify-start items-center">
                        
                        <h1 class="flex justify-between items-center font-semibold text-xs gap-1 text-[#7C53EC] bg-[#7c53ec27] py-1.5 px-4 rounded-full">
                            <x-lucide-sparkle class="w-2 h-2 text-[#7C53EC]" /> 
                            AI Resume & Career Assistant
                        </h1>
                    </div>
                    <h1 class="text-5xl font-semibold">Optimize Your<span class="text-[#7C53EC]"> Resume with AI</span></h1>
                </div>
            </div>

            <div class="flex justify-center gap-20 items-center mt-10 mb-6">
                <div class="flex items-center space-x-4">
                    <div class="relative inline-block">
                        <div class="bg-[#7c53ec1e] h-12 w-12 rounded-lg flex justify-center items-center">
                            <x-lucide-file-up class="w-6 h-6 text-[#7C53EC]" />
                        </div>

                        <div class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white shadow-md">
                            1
                        </div>
                    </div>
                    
                    <div class="w-44">
                        <h1 class="text-sm font-semibold">Upload Your Files</h1>
                        <p class="text-xs text-gray-500">Upload your resume in PDF or DOCX format</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="relative inline-block">
                        <div class="bg-[#7c53ec1e] h-12 w-12 rounded-lg flex justify-center items-center">
                            <x-lucide-brain-circuit class="w-6 h-6 text-[#7C53EC]" />
                        </div>

                        <div class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white shadow-md">
                            2
                        </div>
                    </div>
                    <div class="w-44">
                        <h1 class="text-sm font-semibold">AI Analyzes</h1>
                        <p class="text-xs text-gray-500">Our AI analyzes your resume, identifies strengths and weaknesses</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="relative inline-block">
                        <div class="bg-[#7c53ec1e] h-12 w-12 rounded-lg flex justify-center items-center">
                            <x-lucide-circle-check-big class="w-6 h-6 text-[#7C53EC]" />
                        </div>

                        <div class="absolute -top-2 -right-2 h-6 w-6 rounded-full bg-[#7C53EC] text-white text-xs font-semibold flex items-center justify-center border-2 border-white shadow-md">
                            3
                        </div>
                    </div>
                    
                    <div class="w-44">
                        <h1 class="text-sm font-semibold">Get Your Results</h1>
                        <p class="text-xs text-gray-500">Get a detailed report with an ATS score, personalized feedback, and recommendations</p>
                    </div>
                </div>
            </div>

            <div
                x-data="{ tab: 'resume' }"
                class="max-w-6xl mx-auto mt-16"
            >

                <!-- Card -->
                <div class="bg-[#7c53ec0d] rounded-3xl shadow-xl border overflow-hidden">

                    <!-- Tabs -->
                    {{-- <div class="flex justify-center p-5 border-b">

                        <div class="flex bg-gray-100 rounded-xl p-1">

                            <button
                                @click="tab='resume'"
                                :class="tab=='resume'
                                    ? 'bg-white text-violet-600 shadow'
                                    : 'text-gray-600'"
                                class="px-8 py-3 rounded-xl font-semibold transition duration-300"
                            >
                                Resume Analyzer
                            </button>

                            <button
                                @click="tab='compare'"
                                :class="tab=='compare'
                                    ? 'bg-white text-violet-600 shadow'
                                    : 'text-gray-600'"
                                class="px-8 py-3 rounded-xl font-semibold transition duration-300"
                            >
                                CV vs Vacancy
                            </button>

                        </div>

                    </div> --}}

                    <div class="flex justify-center p-5">

                        <div class="flex bg-white rounded-xl shadow-xl">

                            <button
                                @click="tab='resume'"
                                :class="tab=='resume'
                                    ? 'bg-[#7C53EC] text-white shadow'
                                    : 'text-gray-600'"
                                class="px-8 py-3 rounded-xl font-semibold transition duration-300 flex justify-center items-center"
                            >
                                <x-lucide-file-text class="w-4 h-4 mr-2" />
                                <span>
                                    Resume Analyzer
                                </span>
                            </button>

                            <button
                                @click="tab='compare'"
                                :class="tab=='compare'
                                    ? 'bg-[#7C53EC] text-white shadow'
                                    : 'text-gray-600'"
                                class="px-8 py-3 rounded-xl font-semibold transition duration-300 flex justify-center items-center"
                            >
                                <x-lucide-briefcase-business class="w-4 h-4 mr-2" />
                                <span>
                                    CV vs Vacancy
                                </span>
                                
                            </button>

                        </div>

                    </div>

                    <!-- Content -->

                    {{-- <div> --}}

                        <!-- Resume -->

                    <div
                        x-show="tab==='resume'"
                        x-transition.opacity.duration.300ms
                        class="px-10 pb-10"
                    >

                        <h2 class="text-3xl font-bold mb-3">
                            Analyze Your Resume
                        </h2>

                        <p class="text-gray-500 mb-8">
                            Upload your resume and recieve AI-powered feedback in under a minute.
                        </p>

                        <form action="{{ route('resume.analyzer') }}" method="POST" enctype="multipart/form-data" class="space-y-8" id="analyzer-form">
                        @csrf

                            <div>
                                <div
                                    id="drop-zone"
                                    class="border-2 border-dashed border-[#7c53ec80] rounded-xl p-10 text-center cursor-pointer transition hover:border-indigo-500 hover:bg-indigo-50 bg-white"
                                >
                                    <input
                                        type="file"
                                        id="resume"
                                        name="resume"
                                        {{-- accept=".pdf,.doc,.docx" --}}
                                        accept=".pdf,.docx,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        class="hidden"
                                    >

                                    <div class="space-y-3">
                                        {{-- <div class="text-5xl">📄</div> --}}
                                        <div class="flex justify-center items-center h-24 w-24 rounded-full bg-[#7c53ec1e] mx-auto">
                                            <x-lucide-cloud-upload class="w-12 h-12 text-[#7C53EC]" />
                                        </div>

                                        <h3 class="text-lg font-semibold text-gray-800">
                                            Drag & Drop your Resume
                                        </h3>

                                        <p class="text-gray-500">
                                            PDF or DOCX (Max 5 MB)
                                        </p>

                                        <button
                                            type="button"
                                            id="browse-btn"
                                            class="inline-flex items-center px-5 py-2 border-2 border-[#7C53EC] text-[#7C53EC] hover:text-white rounded-lg hover:bg-[#7145ec] transition"
                                        >
                                            Browse Files
                                        </button>

                                        <p
                                            id="file-name"
                                            class="text-sm text-green-600 font-medium hidden"
                                        ></p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center mt-2 gap-2">
                                    <x-lucide-lock-keyhole class="w-3 h-3 text-gray-400" />
                                    <span class="text-gray-400 font-semibold text-xs">Your files are secure and confidential.</span>
                                </div>

                            </div>

                            <div class="w-full flex justify-center items-center">
                                <button
                                    type="submit"
                                    class=" bg-[#7C53EC] text-white py-2.5 px-3 rounded-xl hover:bg-[#7145ec] transition flex justify-center items-center"
                                >

                                <x-lucide-sparkles class="w-4 h-4 mr-2" />

                                <span class="font-semibold">Analyze Resume</span>

                                <x-lucide-chevron-right class="w-4 h-4 ml-2" />

                                </button>
                            </div>

                        </form>

                    </div>

                    {{-- </div> --}}

                                <!-- Comparison -->

                            {{-- <div> --}}

                    <div
                        x-show="tab==='compare'"
                        x-transition.opacity.duration.300ms
                        class="px-10 pb-10"
                    >

                        <h2 class="text-3xl font-bold mb-3">
                            CV vs Job Vacancy
                        </h2>

                        <p class="text-gray-500 mb-8">
                            Compare your CV with a Job Description
                        </p>

                        <form action="{{ route('resume.comparison') }}" method="POST" enctype="multipart/form-data" class="space-y-8" id="comparison-form">
                        @csrf
                            <div>
                                <div class="space-y-5">

                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Resume
                                    </label>

                                    <div
                                        id="drop-zone2"
                                        class="border-2 border-dashed border-[#7c53ec80] rounded-xl p-10 text-center cursor-pointer transition hover:border-indigo-500 hover:bg-indigo-50 bg-white"
                                    >
                                        <input
                                            type="file"
                                            id="resume2"
                                            name="resume2"
                                            accept=".pdf,.doc,.docx"
                                            class="hidden"
                                        >

                                        <div class="space-y-3">
                                            <div class="flex justify-center items-center h-24 w-24 rounded-full bg-[#7c53ec1e] mx-auto">
                                                <x-lucide-cloud-upload class="w-12 h-12 text-[#7C53EC]" />
                                            </div>

                                            <h3 class="text-lg font-semibold text-gray-800">
                                                Drag & Drop your Resume
                                            </h3>

                                            <p class="text-gray-500">
                                                PDF or DOCX (Max 5 MB)
                                            </p>

                                            <button
                                                type="button"
                                                id="browse-btn2"
                                                class="inline-flex items-center px-5 py-2 border-2 border-[#7C53EC] text-[#7C53EC] hover:text-white rounded-lg hover:bg-[#7145ec] transition"
                                            >
                                                Browse Files
                                            </button>

                                            <p
                                                id="file-name2"
                                                class="text-sm text-green-600 font-medium hidden"
                                            ></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center mt-2 gap-2">
                                    <x-lucide-lock-keyhole class="w-3 h-3 text-gray-400" />
                                    <span class="text-gray-400 font-semibold text-xs">Your files are secure and confidential.</span>
                                </div>
                            </div>

                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Job Description
                            </label>

                            <textarea
                                name="job_description"
                                rows="8"
                                class="w-full border rounded-xl p-4 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none"
                                placeholder="Paste the job description here..."
                            ></textarea>

                            <div class="w-full flex justify-center items-center">
                                <button
                                    type="submit"
                                    class="bg-[#7C53EC] text-white py-2.5 px-3 rounded-xl hover:bg-[#7145ec] transition flex justify-center items-center"
                                >
                                    <x-lucide-sparkles class="w-4 h-4 mr-2" />
                                    <span class="font-semibold">Generate Comparison</span>
                                    <x-lucide-chevron-right class="w-4 h-4 ml-2" />
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- old response --}}

    {{-- @include('response') --}}

    {{-- @error('resume')
    <p class="mt-2 text-sm text-red-600">
        {{ $message }}
    </p>
@enderror

@error('ai')
    <p class="mt-2 text-sm text-red-600">
        {{ $message }}
    </p>
@enderror --}}


    {{-- ------------------- --}}

    {{-- <div
        id="loading-overlay"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-white/80 backdrop-blur-sm"
    >
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-[420px] text-center">

            <div class="flex justify-center mb-6">
                <div class="w-14 h-14 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
            </div>

            <h2 class="text-2xl font-bold text-gray-800">
                AI is analyzing your resume
            </h2>

            <p class="text-gray-500 mt-2">
                Please wait a few seconds.
            </p>

            <div class="mt-8">

                <p
                    id="loading-text"
                    class="text-purple-600 font-medium transition-all duration-300"
                >
                    Uploading your resume...
                </p>

            </div>

        </div>
    </div> --}}

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @include('components.parts.loader')

@endsection