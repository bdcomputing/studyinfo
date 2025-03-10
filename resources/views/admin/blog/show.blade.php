<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $blog->title }}</h3>
                        <div class="flex space-x-4">
                            @if (!$blog->is_published)
                            <form action="{{ route('admin.blog.update', $blog) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="title" value="{{ $blog->title }}">
                                <input type="hidden" name="description" value="{{ $blog->description }}">
                                <input type="hidden" name="content" value="{{ $blog->content }}">
                                <input type="hidden" name="category" value="{{ $blog->category }}">
                                <input type="hidden" name="publish_date" value="{{ $blog->publish_date }}">
                                <input type="hidden" name="is_published" value="1">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
                                    Publish Now
                                </button>
                            </form>
                            @endif
                            <a href="{{ route('admin.blog.edit', $blog) }}"
                                class="px-6 py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600 transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.blog') }}"
                                class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition">
                                Back to List
                            </a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <img src="{{ asset('storage/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}"
                            class="w-full h-[450px] object-cover rounded-lg">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Category:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $blog->category }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Status:</span>
                            @if ($blog->is_published)
                            <span
                                class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Published</span>
                            @else
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Draft</span>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Publish Date:</span>
                            <span class="text-gray-900">{{ $blog->publish_date }}</span>
                        </div>
                    </div>

                    <div class="prose max-w-none">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Description</h4>
                        <p class="text-gray-600 mb-6">{{ $blog->description }}</p>

                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Content</h4>
                        <div class="text-gray-600">
                            {!! nl2br(e($blog->content)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>