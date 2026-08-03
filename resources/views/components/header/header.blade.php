<header
    x-data="{ mobileMenu: false }"
    class="w-full border-b border-gray-100 bg-white/90 backdrop-blur sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-16">

            <!-- Logo -->

            <a href="{{ route('home') }}" class="flex items-center">

                <img
                    src="{{ asset('images/analysecv_logo_bg1.png') }}"
                    alt="AnalyseCV Logo"
                    class="h-10 sm:h-12 w-auto">

            </a>

            <!-- Desktop Menu -->

            <nav class="hidden md:flex items-center gap-8">

                <a
                    href="{{ route('how-it-works') }}"
                    class="font-medium text-gray-700 hover:text-[#7C53EC] transition">

                    How it works

                </a>

                <a
                    href="{{ route('blog') }}"
                    class="font-medium text-gray-700 hover:text-[#7C53EC] transition">

                    Blog

                </a>

            </nav>

            <!-- Mobile Button -->

           <button
                @click="mobileMenu = !mobileMenu"
                class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">

                <x-lucide-menu
                    x-show="!mobileMenu"
                    x-cloak
                    class="w-6 h-6" />

                <x-lucide-x
                    x-show="mobileMenu"
                    x-cloak
                    class="w-6 h-6" />

            </button>

        </div>

    </div>

    <!-- Mobile Menu -->

    <div
        x-show="mobileMenu"
        x-transition
        class="md:hidden border-t border-gray-100 bg-white">

        <div class="px-4 py-4 flex flex-col space-y-4">

            <a
                href="{{ route('how-it-works') }}"
                class="font-medium text-gray-700 hover:text-[#7C53EC]">

                How it works

            </a>

            <a
                href="{{ route('blog') }}"
                class="font-medium text-gray-700 hover:text-[#7C53EC]">

                Blog

            </a>

        </div>

    </div>

</header>