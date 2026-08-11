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
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
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

                              {{-- <!-- Responsive Navigation Menu -->
                            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                                <div class="pt-2 pb-3 space-y-1">
                                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-responsive-nav-link>
                                </div>

                                <!-- Responsive Settings Options -->
                                <div class="pt-4 pb-1 border-t border-gray-200">
                                    <div class="px-4">
                                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                    </div>

                                    <div class="mt-3 space-y-1">
                                        <x-responsive-nav-link :href="route('dashboard')">
                                            {{ __('Dashboard') }}
                                        </x-responsive-nav-link>

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
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:from-blue-700 hover:to-indigo-700 hover:shadow-xl hover:shadow-blue-500/30 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
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