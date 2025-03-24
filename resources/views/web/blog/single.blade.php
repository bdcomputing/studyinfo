@extends('layouts.web')



@section('title')
    Blog
@endsection
@section('content')
    <section class="bg-white p-5">
        <div class="container mx-auto ">
            <!--  -->
            <div class="md:p-5  space-y-5 md:max-w-6xl mx-auto md:py-5">
                <p class="md:text-2xl font-bold text-gray-600">{{ $blog->title }}</p>
                <p class="">
                    <span class="px-4 py-1.5 text-xs md:text-sm bg-primary/20 rounded-full">{{ $blog->category }}</span>
                </p>
                <p><span class="font-bold">Posted: </span>{{ Carbon\Carbon::parse($blog->publish_date)->diffForHumans() }}
                </p>
                <div class="flex ">
                    <img src="{{ asset('storage/blog/' . $blog->image) }}" class="rounded-md  object-cover"
                        alt="{{ $blog->title }}">
                </div>
                <article class="bg-white  md:p-8 mb-12">
                    <div class="prose  text-left">
                        {!! $blog->content !!}
                    </div>
                </article>

                <div class="flex items-center  space-x-4 mb-16">
                    <span class="text-gray-600  font-bold">Share this post:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('web.blog.single', $blog->slug)) }}"
                        target="_blank">
                        <i class="bi bi-facebook text-blue-500 text-3xl"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(route('web.blog.single', $blog->slug)) }}"
                        target="_blank">
                        <i class="bi bi-twitter-x text-primary text-3xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('web.blog.single', $blog->slug)) }}&title={{ urlencode($blog->title) }}"
                        target="_blank">
                        <i class="bi bi-linkedin text-blue-700 text-3xl"></i>
                    </a>
                </div>



                <!-- related blogs -->
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

    </section>






@endsection
