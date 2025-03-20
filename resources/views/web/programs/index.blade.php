@extends('layouts.web')

@section('title', 'Programs')

@section('content')
<section class="p-5">
    <div class="container mx-auto md:p-5 py-5 rounded-lg">
        <h1 class="font-bold text-primary-900 text-xl md:text-2xl md:px-5">Explore Programs</h1>
    </div>
    <div class="md:p-5 container mx-auto flex md:justify-center">
        <form method="get" class="w-full flex flex-col items-center">
            <div class="flex gap-x-3 items-center pb-3">
                <input value="{{ request('search') }}" name="search" type="search" class="md:min-w-96 rounded-lg border-gray-300 placeholder:text-gray-400 placeholder:text-center" placeholder="Search program">
                <button onclick="filterUniversity()" class="bg-gradient-to-r from-accent to-secondary  size-10 rounded-lg text-white"><i class="bi bi-search text-xl"></i></button>
            </div>
            <div>
                <p class="py-3 font-bold text-gray-600 text-lg">Filters</p>
            </div>
            <div class="py-3 grid grid-cols-2 md:grid-cols-5 items-center gap-3  w-full">
                <div>
                    <label class="text-gray-500 " for="">Study level</label>
                    <select name="study_level" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="all">All</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                    </select>
                </div>
                <div>
                    <label class="text-gray-500 " for="">Study Destination</label>
                    <select name="destination" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="all">All</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                    </select>
                </div>
                <div>
                    <label class="text-gray-500 " for="">Learning Mode</label>
                    <select name="mode" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="all">All</option>
                        <option class="text-gray-600 appearance-none" value="online">Online</option>
                        <option class="text-gray-600 appearance-none" value="on-campus">On Campus</option>
                        <option class="text-gray-600 appearance-none" value="hybrid">Hybrid</option>
                    </select>
                </div>
                <div>
                    <label class="text-gray-500 " for="">Graduate level</label>
                    <select name="study_level" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="all">All</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                    </select>
                </div>




                <div class="flex md:self-end gap-5 col-span-2 md:col-span-1 justify-center  ">
                    <p></p>
                    <button type="submit" class="p-2 px-4 text-white rounded-lg bg-primary" value="">Apply</button>
                    <button type="reset" class="p-2 px-2 text-white rounded-lg bg-accent" value="">Reset Filters</button>
                </div>

            </div>
        </form>
    </div>
    <div class="container mx-auto md:p-5 py-10">
        @if(request('search'))
        <h2 class="text-lg font-semibold text-primary">Search results for {{request('search')}}</h2>
        @endif
        <div class="py-5 grid grid-cols-1 md:grid-cols-2 gap-10">
            @forelse($programs as $program)
            <div class="university-card border border-gray-200 hover:shadow rounded-md md:grid md:grid-cols-2 gap-y-5 md:gap-5 w-full">
                <div class="w-full relative ">
                    <img class="object-cover h-full md:h-[300px] rounded-l-md" src="{{ asset('storage/' . $program->university->image_url) }}" alt="{{ $program->name }}">
                    <div class="bg-white/50 p-1 flex items-center justify-center size-8 text-primary absolute top-2 right-2  text-xs md:text-sm rounded-lg font-semibold">
                        <i class="bi bi-heart text-lg"></i>
                    </div>
                    <div class="bg-red-500 p-1 flex items-center justify-center h-8  text-white absolute top-2 left-2  text-xs md:text-sm rounded-lg font-semibold">
                        <i class="bi bi-fire text-lg"></i>Popular
                    </div>
                    <div class="absolute bottom-0 flex items-end gap-5 left-0 p-2 w-full bg-gradient-to-t h-20 from-white via-white/90 to-transparent">
                        <img class="object-cover size-8 bottom-2 right-2 rounded-full" src="{{ asset('storage/' . $program->university->destination->flag_url) }}" alt="{{ $program->name }}">

                        <p class="text-primary font-bold">
                            {{ $program->university->name }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-between px-5 md:px-0  py-5">
                    <div class="space-y-3">
                        <div class="flex gap-x-3 items-center">
                            <a href="{{route('web.programs.show',$program)}}">
                                <p class="font-bold text-secondary text-lg md:text-xl">{{ $program->name }}</p>
                            </a>
                        </div>
                        <div class="flex flex-col gap-2  text-gray-700">
                            <p>Field of Study: {{ $program->field_of_study }}</p>
                            <p>Level: {{ $program->level }}</p>
                            <p>Mode of Study: {{ $program->mode_of_study }}</p>
                            <p>Language : {{ $program->language_of_instruction }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div class="flex flex-col">
                            <div class="flex gap-2 text-sm">
                                <i class="bi bi-clock"></i>
                                <p class="font-bold text-gray-600">Duration</p>
                            </div>
                            <p>{{ $program->duration . ' Months' }}</p>

                        </div>
                        <div class="flex flex-col">
                            <div class="flex gap-2 text-sm">
                                <i class="bi bi-coin"></i>
                                <p class="font-bold text-gray-600">Cost</p>
                            </div>
                            <p>{{ $program->program_fee . ' ' . $program->university->destination->currency}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="p-5 bg-gray-100 rounded-md">
                <p class="p-5">No programs found!</p>
            </div>
            @endforelse
            <div>
                {{ $programs->links('pagination') }}
            </div>
        </div>
    </div>
</section>
@endsection