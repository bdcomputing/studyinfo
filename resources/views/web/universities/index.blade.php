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
        <form method="get">
            <div class="flex gap-x-3">
                <input value="{{ request('search') }}" name="search" type="search" class="md:min-w-96 rounded-lg border-gray-300 placeholder:text-gray-400 placeholder:text-center" placeholder="Search university">
                <button onclick="filterUniversity()" class="bg-gradient-to-r from-accent to-secondary  size-10 rounded-lg text-white"><i class="bi bi-search text-xl"></i></button>
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
                    @if($university->ranking <=5)
                        <span class="bg-secondary text-white absolute top-2 left-2 p-1 text-xs md:text-sm rounded-lg font-semibold">Top Ranked</span>
                        @endif
                </div>
                <div class=" space-y-5 p-5 md:px-0">
                    <div class="flex gap-x-3 items-center">
                        <img class="object-cover size-8 ring-2 ring-primary rounded-full" src="{{ asset('storage/' . $university->logo_url) }}" alt="{{$university->destination->name}}">
                        <p class="font-bold text-lg md:text-xl text-secondary">{{$university->name}}</p>
                    </div>

                    <div class="flex gap-2 items-center ">
                        <img class="object-cover size-6 rounded-full" src="{{ asset('storage/' . $university->destination->flag_url) }}" alt="{{$university->destination->name}}">
                        <div class="flex gap-1">
                            <p class=" text-gray-600">{{$university->city}},</p>
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

                </div>
            </div>
            @empty
            <div class="p-5 bg-gray-100 rounded-md">
                <p class="p-5">No universities yet!</p>

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