@extends('layouts.web')

@section('title')
Blog
@endsection

@php
$blogs = collect([
(object)[
'id' => 1,
'title' => 'First Blog Post',
'content' => 'This is the content of the first blog post. It is just a mock data for testing purposes.',
'created_at' => now()->subDays(2)
],
(object)[
'id' => 2,
'title' => 'Second Blog Post',
'content' => 'This is the content of the second blog post. It is just a mock data for testing purposes.',
'created_at' => now()->subDays(1)
],
(object)[
'id' => 3,
'title' => 'Third Blog Post',
'content' => 'This is the content of the third blog post. It is just a mock data for testing purposes.',
'created_at' => now()
],
]);
@endphp

@section('content')
<div class="container">
    <h1>Blog List</h1>
    @if($blogs->count())
    <ul>
        @foreach($blogs as $blog)
        <li>
            <h2><a href="">{{ $blog->title }}</a></h2>
            <p>{{ Str::limit($blog->content, 150) }}</p>
            <small>Published on {{ $blog->created_at->format('M d, Y') }}</small>
        </li>
        @endforeach
    </ul>
    @else
    <p>No blogs available.</p>
    @endif
</div>
<

    @endsection