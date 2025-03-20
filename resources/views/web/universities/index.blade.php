@extends('layouts.web')
@section('title')
Universities
@endsection
@section('content')
<section class="p-5">
    <div class="container mx-auto md:p-5 py-5  rounded-lg">
        <h1 class=" text-primary-900 font-bold text-xl md:text-2xl px-5">Explore Universities</h1>
    </div>
    <div class="p-5 container mx-auto flex justify-center">
        <form method="get" class="w-full flex flex-col items-center">
            <div class="flex gap-x-3 items-center pb-3">
                <input value="{{ request('search') }}" name="search" type="search" class="md:min-w-96 rounded-lg border-gray-300 placeholder:text-gray-400 placeholder:text-center" placeholder="Search university">
                <button onclick="filterUniversity()" class="bg-gradient-to-r from-accent to-secondary  size-10 rounded-lg text-white"><i class="bi bi-search text-xl"></i></button>
            </div>
            <div>
                <div class="py-3 flex gap-1 relative font-bold text-gray-600 text-lg">
                    <i class="bi bi-sliders "></i>
                    Filters
                    <span class="text-xs absollute text-secondary bg-red-300 h-max rounded-full px-1 top-0">{{ count(array_filter(request()->query())) }}</span>
                </div>
            </div>
            <div class="py-3 grid grid-cols-2 md:grid-cols-5 items-center gap-3  w-full">

                <div>
                    <label class="text-gray-500 " for="">Continent</label>
                    <select name="continent" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="">All</option>
                        @foreach($continents as $continent)
                        <option {{request('continent')===$continent->name ? 'selected' :''}} class="text-gray-600 appearance-none" value="{{$continent->name}}">{{$continent->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-gray-500 " for="">Study Destination</label>
                    <select name="destination" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="">All</option>
                        @foreach($destinations as $destination)
                        <option {{request('destination')===$destination->name ? 'selected' :''}} class="text-gray-600 appearance-none" value="{{$destination->name}}">{{$destination->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-gray-500 " for="">Type</label>
                    <select name="type" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="">All</option>
                        <option class="text-gray-600 appearance-none" {{request('type')==='Public' ? 'selected' :''}} value="Public">Public</option>
                        <option class="text-gray-600 appearance-none" {{request('type')==='Private' ? 'selected' :''}} value="Private">Private</option>
                    </select>
                </div>

                <div>
                    <label class="text-gray-500 " for="">Graduate level</label>
                    <select name="study_level" class="w-full rounded-md border-primary-200 active:border-primary-400 focus:border-primary-400">
                        <option class="text-gray-600 appearance-none" value="">All</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                        <option class="text-gray-600 appearance-none" value="">One</option>
                    </select>
                </div>




                <div class="flex md:self-end gap-5 col-span-2 md:col-span-1 justify-center  ">
                    <p></p>
                    <button type="submit" class="py-1.5 px-4 text-white rounded-lg bg-primary" value="">Apply</button>
                    <a href="{{ url()->current() }}" class="py-1.5 px-2 text-white rounded-lg bg-accent" value="">Reset Filters</a>
                </div>

            </div>
        </form>
    </div>
    <div class="container mx-auto md:p-5 py-10">
        <h2 class="text-lg font-semibold text-primary">Top universities</h2>
        <div class="py-5 grid grid-cols-1 md:grid-cols-2 gap-10">
            {{$universities}}
            @forelse($universities as $university)
            <div class="university-card border border-gray-200  hover:shadow rounded-md md:grid md:grid-cols-2 gap-y-5 md:gap-5 w-full">
                <div class="w-full relative">
                    <img class="object-cover  w-full h-full  rounded-l-md" src="{{ asset('storage/' . $university->image_url) }}" alt="{{$university->name}}">
                    @if($university->is_popular)
                    <span class="bg-secondary text-white absolute top-2 left-2 p-1 text-xs  rounded-lg font-semibold">
                        <i class="bi bi-fire"></i>
                        Popular
                    </span>
                    @endif
                </div>
                <div class=" space-y-5 p-5 md:px-0">
                    <div class="flex gap-x-3 items-center">
                        <img class="object-cover size-8 ring-2 ring-primary rounded-full" src="{{ asset('storage/' . $university->logo_url) }}" alt="{{$university->destination->name}}">
                        <a href="{{route('web.universities.show', $university)}}">
                            <p class="font-bold text-lg md:text-xl text-secondary">{{$university->name}}</p>
                        </a>
                    </div>

                    <div class="flex gap-2 items-center ">
                        <img class="object-cover size-6 rounded-full" src="{{ asset('storage/' . $university->destination->flag_url) }}" alt="{{$university->destination->name}}">
                        <div class="flex gap-1">
                            <p class=" text-gray-600">{{$university->city->name}},</p>
                            <p class=" text-gray-600">{{$university->destination->name}}</p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center ">
                        <i class="bi bi-globe text-secondary text-xl"></i>
                        <a class="text-gray-600" href="{{$university->website_url}}">{{$university->website_url}}</a>


                    </div>
                    <div class="flex gap-2 items-center ">
                        <i class="bi bi-buildings text-secondary text-xl"></i>
                        <p class="text-gray-600">Type:</p>
                        <p class="bg-primary-200 px-3 py-1 rounded-full text-sm">{{$university->type}}</p>

                    </div>
                    <div class="flex gap-2 items-center ">
                        <i class="bi bi-mortarboard text-xl text-secondary"></i>
                        <p class="text-gray-600">Programs Available:</p>
                        <p class="text-sm">{{$university->programs_count}}</p>
                    </div>
                    <div class="flex gap-2 items-center ">
                        <i class="bi bi-coin text-xl text-secondary"></i>
                        <p class="text-gray-600">Tuition fee</p>
                        <p class="text-sm">{{$university->tuition_fee}} {{$university->destination->currency}}</p>
                    </div>

                </div>
            </div>
            @empty
            <div class="p-5  rounded-md">
                <p class="p-5">No universities found!</p>

            </div>
            @endforelse
            <div>
                {{$universities->links('pagination')}}
            </div>
        </div>
    </div>
</section>
<script>
    function filterUniversity() {
        const card = document.querySelectorAll(".university-card")
        alert(card[0].data - university)
    }
</script>

@endsection