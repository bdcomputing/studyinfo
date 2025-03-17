@extends('layouts.web')
@section('title')
{{$program->name}}
@endsection
@section('content')
<section class="p-5">
    <div class="container mx-auto md:p-5">
        <h1 class="font-bold text-xl text-primary py-5">{{$program->name}} at {{$program->university->name}}</h1>
        <div class="relative">
            <img src="{{ asset('storage/' . $program->university->image_url) }}" class="my-2 rounded-xl w-full h-80 object-cover max-w-5xl" alt="">
            <div class="p-3 flex gap-3 items-center absolute w-full bottom-0 bg-gradient-to-t from-white/90 via-white/80 to-transparent">
                <div>
                    <img src="{{ asset('storage/' . $program->university->logo_url) }}" class="my-2 size-14 object-cover rounded-xl" alt="">
                </div>
                <h1 class="font-bold text-xl text-secondary">{{$program->name}}</h1>
            </div>
        </div>
        <div class="py-5">
            <div>
                {{$program->description}}
            </div>
            <div class="py-5">
                <p>Website: {{$program->website_url}}</p>
            </div>
        </div>
    </div>
</section>
@endsection