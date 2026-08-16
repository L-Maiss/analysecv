<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ __('Dashboard') }}
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Manage your AnalyzeCV account and career tools.
                </p>
            </div>
        </div>
    </x-slot>

    <div class="min-h-[calc(100vh-65px)] bg-gradient-to-br from-slate-50 via-white to-indigo-50/40">
        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

            {{-- Welcome --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    Welcome back, {{ Auth::user()->name }}!
                </h1>

                <p class="mt-2 text-gray-600">
                    Continue improving your resume and getting ready for your next opportunity.
                </p>
            </div>


            {{-- Account / Plan --}}
            @if(Auth::user()->subscribed('default'))

                {{-- Premium user --}}
                <div class="overflow-hidden rounded-2xl border border-indigo-100 bg-white shadow-sm">

                    <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-6 py-6 sm:px-8">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                            <div>
                                <div class="flex items-center gap-3">
                                    <h2 class="text-xl font-bold text-white">
                                        AnalyzeCV Premium
                                    </h2>

                                    <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-semibold text-white">
                                        Active
                                    </span>
                                </div>

                                <p class="mt-2 text-sm text-indigo-100">
                                    You have access to all premium features.
                                </p>
                            </div>

                            <div class="text-left sm:text-right">
                                <p class="text-2xl font-bold text-white">
                                    $15
                                    <span class="text-sm font-normal text-indigo-100">
                                        / month
                                    </span>
                                </p>
                            </div>

                        </div>
                    </div>


                    <div class="grid gap-4 p-6 sm:grid-cols-2 lg:grid-cols-3 sm:p-8">

                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-50">
                                <svg class="h-4 w-4 text-indigo-600"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2.5"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M5 12l5 5L20 7"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-gray-900">
                                    Unlimited analyses
                                </p>

                                <p class="mt-1 text-xs text-gray-500">
                                    Analyze as many resumes as you need.
                                </p>
                            </div>
                        </div>


                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-50">
                                <svg class="h-4 w-4 text-indigo-600"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2.5"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M5 12l5 5L20 7"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-gray-900">
                                    ATS scoring
                                </p>

                                <p class="mt-1 text-xs text-gray-500">
                                    Get detailed compatibility insights.
                                </p>
                            </div>
                        </div>


                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-50">
                                <svg class="h-4 w-4 text-indigo-600"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2.5"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M5 12l5 5L20 7"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-gray-900">
                                    AI optimization
                                </p>

                                <p class="mt-1 text-xs text-gray-500">
                                    Improve your resume with AI-powered suggestions.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            @else

                {{-- Free user --}}
                <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm">

                    <div class="grid lg:grid-cols-5">

                        {{-- Left side --}}
                        <div class="p-8 sm:p-10 lg:col-span-3">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50">
                                    <svg class="h-6 w-6 text-indigo-600"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="1.8"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h6l5 5v11a2 2 0 01-2 2z"/>
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M13 3v5h5"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-indigo-600">
                                        FREE PLAN
                                    </p>

                                    <h2 class="text-xl font-bold text-gray-900">
                                        You're currently on the free plan
                                    </h2>
                                </div>

                            </div>


                            <p class="mt-5 max-w-xl text-gray-600">
                                Upgrade to AnalyzeCV Premium to unlock advanced resume
                                analysis and get more powerful tools to improve your
                                chances of landing interviews.
                            </p>


                            <div class="mt-7 grid gap-4 sm:grid-cols-2">

                                <div class="flex items-center gap-3">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-green-50">
                                        <svg class="h-4 w-4 text-green-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>
                                    </div>

                                    <span class="text-sm text-gray-700">
                                        Unlimited resume analyses
                                    </span>
                                </div>


                                <div class="flex items-center gap-3">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-green-50">
                                        <svg class="h-4 w-4 text-green-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>
                                    </div>

                                    <span class="text-sm text-gray-700">
                                        Detailed ATS scoring
                                    </span>
                                </div>


                                <div class="flex items-center gap-3">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-green-50">
                                        <svg class="h-4 w-4 text-green-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>
                                    </div>

                                    <span class="text-sm text-gray-700">
                                        AI resume optimization
                                    </span>
                                </div>


                                <div class="flex items-center gap-3">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-green-50">
                                        <svg class="h-4 w-4 text-green-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>
                                    </div>

                                    <span class="text-sm text-gray-700">
                                        Career insights
                                    </span>
                                </div>

                            </div>

                        </div>


                        {{-- Right side --}}
                        <div class="flex flex-col justify-center bg-gradient-to-br from-indigo-50 to-blue-50 p-8 lg:col-span-2 lg:p-10">

                            <div class="rounded-2xl border border-indigo-100 bg-white p-6 shadow-sm">

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900">
                                            AnalyzeCV Premium
                                        </p>

                                        <p class="mt-1 text-xs text-gray-500">
                                            Full access to premium features
                                        </p>
                                    </div>

                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-gray-900">
                                            $15
                                        </span>

                                        <span class="text-xs text-gray-500">
                                            / month
                                        </span>
                                    </div>
                                </div>


                                <div class="my-6 border-t border-gray-100"></div>


                                <ul class="space-y-3 text-sm text-gray-600">

                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-indigo-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>

                                        Unlimited resume analysis
                                    </li>

                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-indigo-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>

                                        Advanced ATS insights
                                    </li>

                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-indigo-600"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2.5"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M5 12l5 5L20 7"/>
                                        </svg>

                                        AI-powered optimization
                                    </li>

                                </ul>


                                <form
                                    method="POST"
                                    action="{{ route('billing.subscribe') }}"
                                    class="mt-7"
                                >
                                    @csrf

                                    <button
                                        type="submit"
                                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                    >
                                        Upgrade to Premium

                                        <svg
                                            class="h-4 w-4"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M13 5l7 7-7 7M5 12h14"
                                            />
                                        </svg>
                                    </button>
                                </form>


                                <p class="mt-4 text-center text-xs text-gray-400">
                                    Secure checkout powered by Paddle
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            @endif


            {{-- Dashboard tools placeholder --}}
            <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <a
                    href="{{ route('home') }}"
                    class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-indigo-200 hover:shadow-md"
                >
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50">
                        <svg
                            class="h-6 w-6 text-indigo-600"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12h6m-6 4h4m4-13H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2z"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-gray-900 group-hover:text-indigo-600">
                        Analyze a Resume
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Upload your resume and get AI-powered insights.
                    </p>
                </a>


                <div class="rounded-2xl border border-dashed border-gray-300 bg-white/60 p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100">
                        <svg
                            class="h-6 w-6 text-gray-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6v6l4 2"
                            />
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-gray-700">
                        Analysis History
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Your previous analyses will appear here.
                    </p>
                </div>


                <div class="rounded-2xl border border-dashed border-gray-300 bg-white/60 p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100">
                        <svg
                            class="h-6 w-6 text-gray-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v18m9-9H3"
                            />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-gray-700">
                        More Career Tools
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        More powerful tools are coming soon.
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>