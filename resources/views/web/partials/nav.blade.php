<nav class="relative top-0 left-0 right-0 z-50 bg-white shadow">
    @php
    $destinations = [
    ["region"=>"Africa","country"=>"Kenya"],
    ["region"=>"Africa","country"=>"Malawi"],
    ["region"=>"Africa","country"=>"Uganda"],
    ["region"=>"Africa","country"=>"Egypt"],
    ["region"=>"Africa","country"=>"Nigeria"],
    ["region"=>"Africa","country"=>"Morocco"],
    ["region"=>"Europe","country"=>"United Kingdom"],
    ["region"=>"Europe","country"=>"Germany"],
    ["region"=>"Europe","country"=>"Italy"],
    ["region"=>"Europe","country"=>"Spain"],
    ["region"=>"Asia","country"=>"India"],
    ["region"=>"Asia","country"=>"Malaysia"],
    ["region"=>"Asia","country"=>"Singapore"],
    ["region"=>"Asia","country"=>"South Korea"],
    ["region"=>"Asia","country"=>"Turkey"],
    ["region"=>"Asia","country"=>"Philippines"],
    ["region"=>"Oceania","country"=>"Australia"],
    ["region"=>"Oceania","country"=>"New Zealand"],
    ];
    @endphp
    <div class="grid md:grid-cols-12  container gap-x-8 items-center mx-auto p-4">
        <div class="flex gap-3 items-center col-span-2 justify-between">
            <a href="{{ route('web.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-14 w-auto" src="{{ asset('/assets/logos/logo.png') }}" alt="STUDYINFO Logo" />

            </a>
            <button data-collapse-toggle="mega-menu-full-image" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none  "
                aria-controls="mega-menu-full-image" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>


        </div>
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto col-span-8">
            <ul class="flex flex-col mt-4 md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="{{ route('web.home') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0"
                        aria-current="page">Home</a>
                </li>

                <li class="">
                    <div x-data="{ open: false }" class="" @mouseleave="open = false">
                        <button @mouseover="open = true"
                            class="flex items-center  justify-between w-full py-2 px-3  text-primary border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary md:p-0">
                            Destinations
                            <i x-show="!open" class="bi bi-chevron-down ml-2 text-sm"></i>
                            <i x-show="open" class="bi bi-chevron-up ml-2 text-sm"></i>
                        </button>
                        <div x-show="open" x-transition class=" absolute left-0 w-screen bg-transparent  shadow-md py-5">
                            <div class="bg-white">
                                <div class="container mx-auto p-5">
                                    <div class="grid max-w-screen-2xl px-0 py-5 mx-auto mt-5  text-sm text-gray-500  md:grid-cols-4 md:px-6">
                                        <ul class="space-y-4">
                                            <p class="text-lg font-bold">Africa</p>
                                            @foreach ($destinations as $destination)
                                            @if($destination['region']==="Africa")
                                            <li>
                                                <a href="#"
                                                    class="hover:underline text-sm font-medium hover:text-secondary ">
                                                    {{$destination['country']}}
                                                </a>
                                            </li>
                                            @endif

                                            @endforeach
                                        </ul>
                                        <ul class="space-y-4">
                                            <p class="text-lg font-bold">Asia</p>
                                            @foreach ($destinations as $destination)
                                            @if($destination['region']==="Asia")
                                            <li>
                                                <a href="#"
                                                    class="hover:underline text-sm font-medium hover:text-secondary ">
                                                    {{$destination['country']}}
                                                </a>
                                            </li>
                                            @endif

                                            @endforeach
                                        </ul>
                                        <ul class="space-y-4">
                                            <p class="text-lg font-bold">Europe</p>
                                            @foreach ($destinations as $destination)
                                            @if($destination['region']==="Europe")
                                            <li>
                                                <a href="#"
                                                    class="hover:underline text-sm font-medium hover:text-secondary ">
                                                    {{$destination['country']}}
                                                </a>
                                            </li>
                                            @endif

                                            @endforeach
                                        </ul>
                                        <ul class="space-y-4">
                                            <p class="text-lg font-bold">Oceania</p>
                                            @foreach ($destinations as $destination)
                                            @if($destination['region']==="Oceania")
                                            <li>
                                                <a href="#"
                                                    class="hover:underline text-sm font-medium hover:text-secondary ">
                                                    {{$destination['country']}}
                                                </a>
                                            </li>
                                            @endif

                                            @endforeach
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{route('web.universities.index')}}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Universities</a>
                </li>
                <li>
                    <a href="{{route('web.programs.index')}}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Programs</a>
                </li>

                <li>
                    <a href="{{route('web.blog.index')}}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Blog</a>
                </li>

                <li>
                    <a href="{{route('web.events.index')}}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Events</a>
                </li>

                <li>
                    <a href="{{ route('web.contact') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">Contact</a>
                </li>
                <li>
                    <a href="{{ route('web.about') }}"
                        class="block py-2 px-3  text-primary border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-secondary-700 md:p-0">About</a>
                </li>
            </ul>

        </div>
        <div class="col-span-2 hidden md:block place-self-end items-center  h-full content-center">
            <button class="px-4 py-1.5 rounded-full bg-primary text-white font-bold ">Apply</button>
        </div>

    </div>
    <div id="mega-menu-full-image-dropdown" class="mt-1 bg-white border-gray-200 shadow-sm border-y  hidden">

    </div>
</nav>