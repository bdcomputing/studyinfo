@extends('layouts.web')
@section('title')
{{$university->name}}
@endsection
@section('content')
<section class="p-5 bg-gray-50">
    <div class="container mx-auto md:p-5">
        <div class="max-w-4xl mx-auto p-5 md:p-10 shadow bg-white">
            <h1 class="font-bold text-xl text-primary py-3">About {{$university->name}}</h1>
            <div class="relative">
                <img src="{{ asset('storage/' . $university->image_url) }}" class="my-2 rounded-xl w-full h-80 object-cover max-w-5xl" alt="">
                <div class="p-3 flex gap-3 items-center absolute w-full bottom-0 bg-gradient-to-t from-white/90 via-white/80 to-transparent">
                    <div>
                        <img src="{{ asset('storage/' . $university->logo_url) }}" class="my-2 size-14 object-cover rounded-xl" alt="">
                    </div>
                    <h1 class="font-bold text-xl text-secondary">{{$university->name}}</h1>
                </div>
            </div>
            <div class="py-5  ">
                <div>
                    <p class="font-bold">Overview</p>
                    {{$university->description}}
                </div>
                <div class="py-5 prose">
                    {!! $university->content !!}
                </div>
                <div class="py-5">
                    <p>Website: {{$university->website_url}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection