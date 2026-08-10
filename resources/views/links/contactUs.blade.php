@extends('layouts.landing')

@section('content')

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- Hero -->

    <div class="text-center">

        <div class="inline-flex items-center gap-2 bg-[#7c53ec15] text-[#7C53EC] px-4 py-2 rounded-full text-sm font-semibold">

            <x-lucide-mail class="w-4 h-4"/>

            Contact AnalyseCV

        </div>

        <h1 class="mt-6 text-4xl sm:text-5xl font-bold">

            We'd love to hear from you

        </h1>

        <p class="mt-5 text-lg text-gray-500 max-w-2xl mx-auto">

            Have a question, found a bug, or want to suggest a new feature?
            Send us a message and we'll get back to you as soon as possible.

        </p>

    </div>

    <!-- Content -->

    <div class="mt-16 grid lg:grid-cols-5 gap-10">

        <!-- Left -->

        <div class="lg:col-span-2">

            <div class="bg-[#7c53ec0d] rounded-3xl p-8 border">

                <div class="space-y-8">

                    <div class="flex gap-4">

                        <div class="h-12 w-12 rounded-xl bg-[#7c53ec20] flex justify-center items-center">

                            <x-lucide-mail class="w-6 h-6 text-[#7C53EC]"/>

                        </div>

                        <div>

                            <h3 class="font-semibold">

                                Email

                            </h3>

                            <p class="text-gray-500 mt-1">

                                support@analysecv.com

                            </p>

                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div class="h-12 w-12 rounded-xl bg-[#7c53ec20] flex justify-center items-center">

                            <x-lucide-clock-3 class="w-6 h-6 text-[#7C53EC]"/>

                        </div>

                        <div>

                            <h3 class="font-semibold">

                                Response Time

                            </h3>

                            <p class="text-gray-500 mt-1">

                                Usually within 24 hours.

                            </p>

                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div class="h-12 w-12 rounded-xl bg-[#7c53ec20] flex justify-center items-center">

                            <x-lucide-shield-check class="w-6 h-6 text-[#7C53EC]"/>

                        </div>

                        <div>

                            <h3 class="font-semibold">

                                Privacy

                            </h3>

                            <p class="text-gray-500 mt-1">

                                Your message is confidential and never shared.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Form -->

        <div class="lg:col-span-3">

            <div class="bg-white border rounded-3xl shadow-lg p-8">

                {{-- <form action="{{ route('contact.send') }}" method="POST" class="space-y-6"> --}}
                <form action="#" method="POST" class="space-y-6">

                    @csrf

                    <div>

                        <label class="block text-sm font-semibold mb-2">

                            Full Name

                        </label>

                        <input
                            type="text"
                            name="name"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none"
                            placeholder="John Doe">

                    </div>

                    <div>

                        <label class="block text-sm font-semibold mb-2">

                            Email Address

                        </label>

                        <input
                            type="email"
                            name="email"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none"
                            placeholder="john@example.com">

                    </div>

                    <div>

                        <label class="block text-sm font-semibold mb-2">

                            Subject

                        </label>

                        <input
                            type="text"
                            name="subject"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none"
                            placeholder="How can we help?">

                    </div>

                    <div>

                        <label class="block text-sm font-semibold mb-2">

                            Message

                        </label>

                        <textarea
                            name="message"
                            rows="7"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#7C53EC] focus:border-[#7C53EC] outline-none resize-none"
                            placeholder="Write your message..."></textarea>

                    </div>

                    <button
                        type="submit"
                        class="w-full bg-[#7C53EC] hover:bg-[#6c43dc] text-white font-semibold py-4 rounded-xl transition flex justify-center items-center gap-2">

                        <x-lucide-send class="w-5 h-5"/>

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection