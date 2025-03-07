<nav class="fixed  top-0 left-0 right-0 z-50 bg-white shadow-md">
    <div class="flex container flex-wrap justify-between items-center mx-auto p-4">
        <a href="{{ route('web.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="h-14 w-auto" src="{{ asset('/assets/logos/logo.png') }}" alt="HAITRAC Logo" />
            <div class="ml-3">
                <span class="self-center text-xl font-semibold whitespace-nowrap ">HAITRAC</span>
                <span class="block text-xs font-thin text-gray-600">Hue African Industrial Training Center</span>
            </div>
        </a>
        <button data-collapse-toggle="mega-menu-full-image" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="mega-menu-full-image" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="{{ route('web.home') }}"
                        class="block py-2 px-3 text-lg font-bold text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="mega-menu-full-cta-image-button" data-collapse-toggle="mega-menu-full-image-dropdown"
                        class="flex text-lg items-center font-bold justify-between w-full py-2 px-3  text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0">
                        About
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                </li>
                <li>
                    <a href="{{ route('web.admissions') }}"
                        class="block text-lg py-2 px-3 font-bold text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Admissions</a>
                </li>

                <li>
                    <a href="{{ route('web.contact') }}"
                        class="block text-lg py-2 px-3 font-bold text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
            </ul>
            <div class="flex items-center ml-5">
                <a href="{{ route('web.apply') }}"
                    class="hidden md:inline-flex items-center px-6 py-2 font-bold border border-transparent text-sm  rounded-full shadow-sm text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
    <div id="mega-menu-full-image-dropdown" class="mt-1 bg-white border-gray-200 shadow-sm border-y  hidden">
        <div class="grid max-w-screen-2xl px-0 py-5 mx-auto text-sm text-gray-500  md:grid-cols-3 md:px-6">
            <ul class="space-y-4" aria-labelledby="mega-menu-full-image-button">
                <li>
                    <a href="{{ route('web.about') }}" class="hover:underline text-md font-medium hover:text-blue-600 ">
                        About Us
                    </a>
                </li>

                <li>
                    <a href="{{ route('web.about.partnerships') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Partnerships
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.success-stories') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Success Stories
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.careers') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Careers
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.blog') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Blog
                    </a>
                </li>
            </ul>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('web.about.news') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        News
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.events') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Events
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.gallery') }}"
                        class="hover:underline text-md font-medium hover:text-blue-600 ">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.about.team') }}"
                        class="block hover:underline text-md font-medium hover:text-blue-600 ">
                        Our Team
                    </a>
                </li>
            </ul>
            <a href="{{ route('web.apply') }}"
                class="p-8 bg-gradient-to-br from-blue-600 to-blue-700 bg-center bg-no-repeat bg-cover rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300">
                <p class="max-w-xl text-lg mb-5 font-extrabold leading-tight tracking-tight text-white">Ready to start
                    your
                    journey with HAITRAC?</p>
                <button type="button"
                    class="inline-flex items-center px-5 py-2 text-sm font-bold text-center text-blue-700 bg-white rounded-full hover:bg-blue-50 focus:ring-4 focus:outline-none focus:ring-blue-300">
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
