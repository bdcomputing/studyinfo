<nav x-data="{ mobileMenuOpen: false, programsDropdownOpen: false, aboutDropdownOpen: false }" class="bg-white shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo and Primary Nav -->
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('web.home') }}" class="flex items-center">
                        <!-- Replace with your actual logo -->
                        <img class="h-20 w-auto" src="{{ asset('/assets/logos/logo.png') }}" alt="HAITRAC">
                        <div class="ml-3">
                            <span class="text-xl font-bold text-gray-900">HAITRAC</span>
                            <span class="block text-xs text-gray-600">Hue African Industrial Training Center</span>
                        </div>
                    </a>
                </div>

                <!-- Primary Navigation -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('web.home') }}"
                        class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('home') ? 'border-blue-500 text-gray-900 font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                        Home
                    </a>

                    <!-- Programs Dropdown -->
                    <div @click.away="programsDropdownOpen = false" class="relative inline-flex items-center">
                        <button @click="programsDropdownOpen = !programsDropdownOpen" type="button"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('programs.*') ? 'border-blue-500 text-gray-900 font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            Programs
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="programsDropdownOpen" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            class="absolute z-10 left-0 mt-16 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            style="display: none;">
                            <div class="py-1">
                                <a href="{{ route('web.programs.nursing') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Nursing</a>
                                <a href="{{ route('web.programs.ict') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">ICT</a>
                                <a href="{{ route('web.programs.mechEngineering') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mechanical
                                    Engineering</a>
                                <a href="{{ route('web.programs.all') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Programs</a>
                            </div>
                        </div>
                    </div>

                    <!-- About Dropdown -->
                    <div @click.away="aboutDropdownOpen = false" class="relative inline-flex items-center">
                        <button @click="aboutDropdownOpen = !aboutDropdownOpen" type="button"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('about.*') ? 'border-blue-500 text-gray-900 font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                            About Us
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="aboutDropdownOpen" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            class="absolute -left-1/4 -translate-x-1/4 z-50 mt-64 w-screen bg-white shadow-lg rounded-lg border"
                            style="display: none;">
                            <div class="p-6">
                                <div class="grid grid-cols-4 gap-8">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 mb-4">About HAITRAC</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('web.about.mission') }}"
                                                class="block text-gray-600 hover:text-primary-600">Our Mission</a>
                                            <a href="{{ route('web.about.faculty') }}"
                                                class="block text-gray-600 hover:text-primary-600">Our Faculty</a>
                                            <a href="{{ route('web.about.team') }}"
                                                class="block text-gray-600 hover:text-primary-600">Our Team</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Success & Careers</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('web.about.success-stories') }}"
                                                class="block text-gray-600 hover:text-primary-600">Success Stories</a>
                                            <a href="{{ route('web.about.careers') }}"
                                                class="block text-gray-600 hover:text-primary-600">Career
                                                Opportunities</a>
                                            <a href="{{ route('web.about.gallery') }}"
                                                class="block text-gray-600 hover:text-primary-600">Photo Gallery</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 mb-4">News & Updates</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('web.about.news') }}"
                                                class="block text-gray-600 hover:text-primary-600">Latest News</a>
                                            <a href="{{ route('web.about.events') }}"
                                                class="block text-gray-600 hover:text-primary-600">Upcoming Events</a>
                                            <a href="{{ route('web.about.blog') }}"
                                                class="block text-gray-600 hover:text-primary-600">Blog</a>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Partners</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('web.about.partnerships') }}"
                                                class="block text-gray-600 hover:text-primary-600">Partnerships</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('web.admissions') }}"
                        class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('admissions') ? 'border-blue-500 text-gray-900 font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                        Admissions
                    </a>

                    <a href="{{ route('web.contact') }}"
                        class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('contact') ? 'border-blue-500 text-gray-900 font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Right Side CTA and Mobile Menu Button -->
            <div class="flex items-center">
                <a href="{{ route('web.apply') }}"
                    class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Apply Now
                </a>

                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden ml-4">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg x-show="!mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg x-show="mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"
                            style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div x-show="mobileMenuOpen" class="sm:hidden" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('web.home') }}"
                class="{{ request()->routeIs('web.home') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Home
            </a>

            <!-- Mobile Programs Dropdown -->
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="{{ request()->routeIs('programs.*') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    <span>Programs</span>
                    <svg :class="{ 'rotate-180': open }" class="h-5 w-5 transform transition-transform duration-200"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" class="pl-6" style="display: none;">
                    <a href="{{ route('web.programs.nursing') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Nursing
                    </a>
                    <a href="{{ route('web.programs.ict') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        ICT
                    </a>
                    <a href="{{ route('web.programs.mechEngineering') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Mechanical Engineering
                    </a>
                    <a href="{{ route('web.programs.all') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        All Programs
                    </a>
                </div>
            </div>

            <!-- Mobile About Us Dropdown -->
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="{{ request()->routeIs('about.*') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    <span>About Us</span>
                    <svg :class="{ 'rotate-180': open }" class="h-5 w-5 transform transition-transform duration-200"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" class="pl-6" style="display: none;">
                    <a href="{{ route('web.about.mission') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Our Mission
                    </a>
                    <a href="{{ route('web.about.faculty') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Our Faculty
                    </a>
                    <a href="{{ route('web.about.success-stories') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Success Stories
                    </a>
                    <a href="{{ route('web.about.partnerships') }}"
                        class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                        Partnerships
                    </a>
                </div>
            </div>

            <a href="{{ route('web.admissions') }}"
                class="{{ request()->routeIs('admissions') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Admissions
            </a>

            <a href="{{ route('web.contact') }}"
                class="{{ request()->routeIs('contact') ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Contact
            </a>

            <div class="pt-4 pb-3 border-t border-gray-200">
                <a href="{{ route('web.apply') }}"
                    class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</nav>
