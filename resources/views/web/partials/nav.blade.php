<nav class="fixed top-0 left-0 right-0 z-50 bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="{{ route('web.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="HAITRAC Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HAITRAC</span>
        </a>
        <button data-collapse-toggle="mega-menu-full-image" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mega-menu-full-image" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="{{ route('web.home') }}"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="mega-menu-full-cta-image-button" data-collapse-toggle="mega-menu-full-image-dropdown"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Programs
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                </li>
                <li>
                    <a href="{{ route('web.admissions') }}"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Admissions</a>
                </li>
                <li>
                    <a href="{{ route('web.about') }}"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="{{ route('web.contact') }}"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="mega-menu-full-image-dropdown"
        class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600 hidden">
        <div
            class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
            <ul class="space-y-4" aria-labelledby="mega-menu-full-image-button">
                <li>
                    <a href="{{ route('web.programs.nursing') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Nursing Programs
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.programs.ict') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        ICT Programs
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.programs.hospitality') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Hospitality Programs
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.programs.business') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Business Programs
                    </a>
                </li>
            </ul>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('web.programs.mechEngineering') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Mechanical Engineering
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.programs.shortcourses') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Short Courses
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.programs.all') }}"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        View All Programs
                    </a>
                </li>
            </ul>
            <a href="{{ route('web.apply') }}"
                class="p-8 bg-gradient-to-br from-blue-600 to-blue-700 bg-center bg-no-repeat bg-cover rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Ready to start your
                    journey with HAITRAC?</p>
                <button type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-blue-700 bg-white rounded-lg hover:bg-blue-50 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Apply Now
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
</nav>
