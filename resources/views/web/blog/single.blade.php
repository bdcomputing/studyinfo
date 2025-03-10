@extends('layouts.web')

@section('title')
Blog
@endsection
@section('content')
<section class="bg-white p-5">
    <div class="container mx-auto ">
        <!--  -->
        <div class="p-5 text-center space-y-5">
            <p class="">
                <span class="px-4 py-1.5 bg-primary/20 rounded-full">{{$blog->category}}</span>
            </p>
            <p class="md:text-2xl font-bold text-gray-600">{{$blog->title}}</p>
            <p>{{$blog->publish_date}}</p>
            <p>{{ Carbon\Carbon::parse($blog->publish_date)->diffForHumans() }}</p>
        </div>
    </div>
    <div class="bg-gradient-to-br from-primary-50 to-white py-16">
        <div class="container mx-auto px-5">
            <div class="max-w-4xl mx-auto">
                <!-- Blog content -->
                <article class="bg-white shadow-lg rounded-xl p-8 mb-12">
                    <div class="prose prose-lg max-w-none">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </article>

                <!-- Share buttons -->
                <div class="flex items-center justify-center space-x-4 mb-16">
                    <span class="text-gray-700 font-medium">Share this post:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('web.blog.single', $blog->slug)) }}"
                        target="_blank" class="text-blue-600 hover:text-blue-800">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(route('web.blog.single', $blog->slug)) }}"
                        target="_blank" class="text-blue-400 hover:text-blue-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('web.blog.single', $blog->slug)) }}&title={{ urlencode($blog->title) }}"
                        target="_blank" class="text-blue-700 hover:text-blue-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

                <!-- Related posts -->
                @if ($relatedBlogs->count() > 0)
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Related Posts</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach ($relatedBlogs as $relatedBlog)
                        <a href="{{ route('web.blog.single', $relatedBlog->slug) }}" class="block">
                            <article
                                class="bg-white shadow-md rounded-xl overflow-hidden transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                                <img src="{{ asset('storage/blog-images/' . $relatedBlog->image) }}"
                                    alt="{{ $relatedBlog->title }}" class="w-full h-40 object-cover">
                                <div class="p-4">
                                    <span
                                        class="{{ $relatedBlog->category_classes['bg'] }} {{ $relatedBlog->category_classes['text'] }} text-xs font-medium px-2 py-0.5 rounded mb-2 inline-block">
                                        {{ $relatedBlog->category }}
                                    </span>
                                    <h3 class="text-lg font-semibold text-gray-800 line-clamp-2">
                                        {{ $relatedBlog->title }}
                                    </h3>
                                    <p class="text-gray-500 text-sm mt-2">{{ $relatedBlog->formatted_date }}</p>
                                </div>
                            </article>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection