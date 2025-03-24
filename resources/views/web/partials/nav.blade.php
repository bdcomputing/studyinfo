<nav x-data={open:false} class="relative top-0 left-0 right-0 z-50 bg-primary-50">
    <div class="grid lg:grid-cols-12  container gap-x-8 items-center mx-auto py-4 lg:px-4 w-full">
        <div class="flex gap-3 items-center col-span-12 lg:col-span-2 justify-between  w-full ">
            <a href="{{ route('web.home') }}" class="flex items-center space-x-3 ">
                <img class="h-14 w-auto" src="{{ asset('/assets/logos/logo.png') }}" alt="STUDYINFO Logo" />

            </a>
            <button @click="open=!open"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none  ">
                <span class="sr-only">Open main menu</span>
                <i :class="{ 'bi-list': !open, 'bi-x': open }" class="bi text-xl"></i>
            </button>


        </div>
        <div
            class="items-center justify-between p-8 lg:px-0 lg:py-0 top-20  hidden  lg:bg-transparent w-full lg:flex lg:w-auto col-span-8">
            <ul class="flex flex-col mt-4 gap-y-5 lg:flex-row lg:mt-0 lg:space-x-8">
                <li>
                    <a href="{{ route('web.home') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('web.about') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">About</a>
                </li>

                <li class="">
                    <div x-data="{ open: false }" class="" @mouseleave="open = false">
                        <a href="{{ route('web.programs.index') }}" @mouseover="open = true"
                            class="flex items-center gap-1 w-full py-2 px-3  text-primary border-b border-gray-100 lg:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary md:p-0">
                            Destinations
                            <i x-show="!open" class="bi bi-chevron-down text-sm"></i>
                            <i x-show="open" class="bi bi-chevron-up text-sm"></i>
                        </a>
                        <div x-show="open" x-transition
                            class=" absolute left-0 w-screen bg-transparent  shadow-md pt-5">
                            <div class="bg-white">
                                <div class="container mx-auto p-5">
                                    <div
                                        class="grid max-w-screen-2xl px-0 gap-5 mx-auto mt-5  text-sm text-gray-500  md:grid-cols-4 md:px-6">
                                        @foreach ($continents as $continent)
                                            <ul class="space-y-3">
                                                <p class="text-lg font-bold"><a
                                                        href="{{ route('web.universities.index', ['continent' => $continent->name]) }} ">{{ $continent->name }}</a>
                                                </p>
                                                @foreach ($destinations as $destination)
                                                    @if ($destination->continent->name === $continent->name)
                                                        <li>
                                                            <a href="{{ route('web.universities.index', ['destination' => $destination->name]) }}"
                                                                class="hover:underline text-sm font-medium hover:text-secondary ">
                                                                {{ $destination->name }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('web.universities.index') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Universities</a>
                </li>
                <li>
                    <a href="{{ route('web.programs.index') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Programs</a>
                </li>

                <li>
                    <a href="{{ route('web.blog.index') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Blog</a>
                </li>

                <li>
                    <a href="{{ route('web.events.index') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Events</a>
                </li>

            </ul>

        </div>
        {{-- Mobile Nav --}}
        <ul x-show="open"
            class="p-5 absolute top-16 bg-white w-full lg:hidden flex flex-col mt-4 gap-y-5 lg:flex-row lg:mt-0 lg:space-x-8">
            <li>
                <a href="{{ route('web.home') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0"
                    aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ route('web.about') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">About</a>
            </li>

            <li class="">
                <div x-data="{ open: false }" class="" @mouseleave="open = false">
                    <a href="{{ route('web.programs.index') }}" @mouseover="open = true"
                        class="flex items-center gap-1 w-full py-2 px-3  text-primary border-b border-gray-100 lg:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary md:p-0">
                        Destinations
                        <i x-show="!open" class="bi bi-chevron-down text-sm"></i>
                        <i x-show="open" class="bi bi-chevron-up text-sm"></i>
                    </a>
                    <div x-show="open" x-transition class=" absolute left-0 w-screen bg-transparent  shadow-md pt-5">
                        <div class="bg-white">
                            <div class="container mx-auto p-5">
                                <div
                                    class="grid max-w-screen-2xl px-0 gap-5 mx-auto mt-5  text-sm text-gray-500  md:grid-cols-4 md:px-6">
                                    @foreach ($continents as $continent)
                                        <ul class="space-y-3">
                                            <p class="text-lg font-bold"><a
                                                    href="{{ route('web.universities.index', ['continent' => $continent->name]) }} ">{{ $continent->name }}</a>
                                            </p>
                                            @foreach ($destinations as $destination)
                                                @if ($destination->continent->name === $continent->name)
                                                    <li>
                                                        <a href="{{ route('web.universities.index', ['destination' => $destination->name]) }}"
                                                            class="hover:underline text-sm font-medium hover:text-secondary ">
                                                            {{ $destination->name }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('web.universities.index') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Universities</a>
            </li>
            <li>
                <a href="{{ route('web.programs.index') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Programs</a>
            </li>

            <li>
                <a href="{{ route('web.blog.index') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Blog</a>
            </li>

            <li>
                <a href="{{ route('web.events.index') }}"
                    class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Events</a>
            </li>

        </ul>

        <div class="col-span-2 hidden lg:block place-self-end items-center  h-full content-center ">
            <a href="{{ route('web.contact') }}"
                class="px-4 py-2 rounded-full bg-primary text-white font-bold ">Contact Us</a>
        </div>

    </div>
</nav>
