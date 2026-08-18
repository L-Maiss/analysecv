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
                    href="{{ route('pricing') }}"
                    class="font-medium text-gray-700 hover:text-[#7C53EC] transition">

                    Pricing

                </a>

                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            {{-- <a
                                href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                            >
                                Dashboard
                            </a> --}}

                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-[#7C53EC] bg-white hover:text-[#6b40e2] focus:outline-none transition ease-in-out duration-150">
                                        {{-- <button class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-[#7C53EC] px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:from-blue-700 hover:to-[#6e41e9] hover:shadow-xl hover:shadow-blue-500/30 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"> --}}
                                            <div>{{ Auth::user()->name }}</div>
                                            {{-- <x-lucide-circle-user-round class="w-7 h-7" /> --}}

                                            <div class="ms-1">
                                                <x-lucide-chevron-down class="w-5 h-5" />
                                                {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg> --}}
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Dashboard') }}
                                        </x-dropdown-link>

                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-[#7C53EC] px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:from-blue-700 hover:to-[#6e41e9] hover:shadow-xl hover:shadow-blue-500/30 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                            >
                                SIGN IN
                            </a>

                            {{-- @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                    Register
                                </a>
                            @endif --}}
                        @endauth
                    </nav>
                @endif

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

            <!-- Hamburger -->
            {{-- <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}

        </div>

    </div>

    <!-- Mobile Menu -->

    <div
        x-show="mobileMenu"
        x-transition
        class="md:hidden border-t border-gray-100 bg-white">

        <div class="px-4 py-4 flex flex-col space-y-4 justify-center items-center">
            @if (Route::has('login'))
                @auth

                <div class="px-4 rounded-xl bg-gradient-to-r from-blue-600 to-[#7C53EC] py-2.5 text-white shadow-lg shadow-blue-500/20">
                    <div class="font-medium text-xl">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm">{{ Auth::user()->email }}</div>
                </div>

                <a
                    href="{{ route('dashboard') }}"
                    class="font-medium text-gray-700 hover:text-[#7C53EC] px-4">

                    Dashboard

                </a>
            @else
                <div class="flex items-center justify-start">
                    <a
                        href="{{ route('login') }}"
                        class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-[#7C53EC] px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:from-blue-700 hover:to-[#7C53EC] hover:shadow-xl hover:shadow-blue-500/30 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        SIGN IN
                    </a>
                </div>

                @endauth
            @endif

            <a
                href="{{ route('how-it-works') }}"
                class="font-medium text-gray-700 hover:text-[#7C53EC] px-4">

                How it works

            </a>

            <a
                href="{{ route('pricing') }}"
                class="font-medium text-gray-700 hover:text-[#7C53EC] px-4">

                Pricing

            </a>

        </div>

    </div>

    {{-- <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div> --}}

</header>