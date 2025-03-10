@extends('layouts.web')

@section('title')
Blog
@endsection



@section('content')

<div class="bg-gradient-to-br from-primary-50 to-white min-h-screen py-16">
    <div class="container mx-auto px-5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="filterBlogs('all')"
                    class="px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition duration-300 filter-btn active"
                    data-category="all">
                    All Posts
                </button>
                @foreach ($categories as $category)
                <button onclick="filterBlogs('{{$category}}')"
                    class="px-6 py-2 rounded-full bg-primary-100 hover:bg-primary-200 text-primary-800 font-medium transition duration-300 filter-btn"
                    data-category="{{$category}}">
                    {{$category}}
                </button>
                @endforeach

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($blogs as $blog)
                <article
                    class="blog-card bg-white border border-gray-100 rounded-md overflow-hidden "
                    data-category="{{ $blog->category }}">
                    <img src="{{ asset('storage/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span
                                class=" text-xs font-medium px-2.5 py-0.5 bg-secondary/30 rounded">
                                {{ $blog->category }}
                            </span>
                            <span class="text-sm text-gray-500 ml-auto">{{ $blog->formatted_date }}</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">{{ $blog->title }}</h2>
                        <p class="text-gray-600 mb-4 line-clamp-4">{{ $blog->description }}</p>
                        <a href="{{ route('web.blog.single', $blog->slug) }}"
                            class="inline-flex items-center text-primary-600 hover:text-primary-700">
                            Read More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-12">
                    <h3 class="text-xl font-medium text-gray-500">No blog posts found</h3>
                    <p class="text-gray-400 mt-2">Check back soon for new content!</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
</section>

<script>
    function filterBlogs(category) {
        // Remove active class from all buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active');
        });

        // Add active class to clicked button
        document.querySelector(`[data-category="${category}"]`).classList.add('active');

        // Show/hide blog cards based on category
        document.querySelectorAll('.blog-card').forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

<style>
    .filter-btn.active {
        @apply ring-2 ring-offset-2 ring-gray-500;
    }
</style>


@endsection