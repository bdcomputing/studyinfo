@extends('layouts.web')
@section('title')
    Blog Page
@endsection

@section('content')
    <div class="bg-gradient-to-br from-primary-50 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-extrabold text-primary-800 mb-6 text-center">HAITRAC Blog</h1>
                <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Stay updated with the latest news, insights and
                    stories from our vibrant academic community.</p>

                <!-- Category Filter Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button onclick="filterBlogs('all')"
                        class="px-6 py-2 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition duration-300 filter-btn active"
                        data-category="all">
                        All Posts
                    </button>
                    <button onclick="filterBlogs('Healthcare')"
                        class="px-6 py-2 rounded-full bg-primary-100 hover:bg-primary-200 text-primary-800 font-medium transition duration-300 filter-btn"
                        data-category="Healthcare">
                        Healthcare
                    </button>
                    <button onclick="filterBlogs('Technology')"
                        class="px-6 py-2 rounded-full bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium transition duration-300 filter-btn"
                        data-category="Technology">
                        Technology
                    </button>
                    <button onclick="filterBlogs('Community')"
                        class="px-6 py-2 rounded-full bg-green-100 hover:bg-green-200 text-green-800 font-medium transition duration-300 filter-btn"
                        data-category="Community">
                        Community
                    </button>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        $blogs = [
                            [
                                'image' => 'about.jpg',
                                'alt' => 'Nursing Education',
                                'category' => [
                                    'name' => 'Healthcare',
                                    'bg' => 'bg-primary-100',
                                    'text' => 'text-primary-800',
                                ],
                                'date' => '15 July 2025',
                                'title' => 'Innovations in Nursing Education',
                                'description' =>
                                    'Exploring the latest technological advancements transforming healthcare training and patient care.',
                            ],
                            [
                                'image' => 'contact.png',
                                'alt' => 'Tech Education',
                                'category' => [
                                    'name' => 'Technology',
                                    'bg' => 'bg-blue-100',
                                    'text' => 'text-blue-800',
                                ],
                                'date' => '22 August 2025',
                                'title' => 'Tech Trends in Education',
                                'description' =>
                                    'How emerging technologies are reshaping technical education and professional skill development.',
                            ],
                            [
                                'image' => 'event.png',
                                'alt' => 'Community Programs',
                                'category' => [
                                    'name' => 'Community',
                                    'bg' => 'bg-green-100',
                                    'text' => 'text-green-800',
                                ],
                                'date' => '05 September 2025',
                                'title' => 'Community Impact Programs',
                                'description' =>
                                    'Highlighting our student-led initiatives that make a difference in local communities.',
                            ],

                            [
                                'image' => 'grad.jpg',
                                'alt' => 'Tech Education',
                                'category' => [
                                    'name' => 'Technology',
                                    'bg' => 'bg-blue-100',
                                    'text' => 'text-blue-800',
                                ],
                                'date' => '22 August 2025',
                                'title' => 'Tech Trends in Education',
                                'description' =>
                                    'How emerging technologies are reshaping technical education and professional skill development.',
                            ],
                            [
                                'image' => 'nursing.jpg',
                                'alt' => 'Community Programs',
                                'category' => [
                                    'name' => 'Community',
                                    'bg' => 'bg-green-100',
                                    'text' => 'text-green-800',
                                ],
                                'date' => '05 September 2025',
                                'title' => 'Community Impact Programs',
                                'description' =>
                                    'Highlighting our student-led initiatives that make a difference in local communities.',
                            ],
                        ];
                    @endphp

                    @foreach ($blogs as $blog)
                        <article
                            class="blog-card bg-white shadow-2xl rounded-xl overflow-hidden transition duration-300 hover:-translate-y-2"
                            data-category="{{ $blog['category']['name'] }}">
                            <img src="{{ asset('/assets/images/' . $blog['image']) }}" alt="{{ $blog['alt'] }}"
                                class="w-full h-56 object-cover">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="{{ $blog['category']['bg'] }} {{ $blog['category']['text'] }} text-xs font-medium px-2.5 py-0.5 rounded">
                                        {{ $blog['category']['name'] }}
                                    </span>
                                    <span class="text-sm text-gray-500 ml-auto">{{ $blog['date'] }}</span>
                                </div>
                                <h2 class="text-xl font-semibold text-gray-800 mb-4">{{ $blog['title'] }}</h2>
                                <p class="text-gray-600 mb-4 line-clamp-4">{{ $blog['description'] }}</p>
                                <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700">
                                    Read More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
