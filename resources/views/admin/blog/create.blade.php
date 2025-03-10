<x-app-layout>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Create Blog</p>
                    </div>
                    <form id="form" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2">
                                <label for="title"
                                    class="block text-sm font-medium text-gray-700 ">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('title')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="category"
                                    class="block text-sm font-medium text-gray-700 ">Category</label>
                                <select name="category" id="category" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category }}"
                                        {{ old('category') == $category ? 'selected' : '' }}>
                                        {{ $category }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="publish_date"
                                    class="block text-sm font-medium text-gray-700 ">Publish
                                    Date</label>
                                <input type="date" name="publish_date" id="publish_date"
                                    value="{{ old('publish_date', date('Y-m-d')) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('publish_date')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="image"
                                    class="block text-sm font-medium text-gray-700 ">
                                    <span class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Blog Image <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <input type="file" name="image" id="image" required
                                            class="mt-1 block w-full text-sm text-gray-500 
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-primary-50 file:text-primary-700
                                            hover:file:bg-primary-100
                                            ">
                                        <p class="text-xs text-gray-500 ">
                                            PNG, JPG, GIF up to 2MB. Recommended size: 800x450px
                                        </p>
                                    </div>
                                </div>
                                @error('image')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700 ">Short
                                    Description</label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief summary of the blog
                                    post (shown in listings).</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="content"
                                    class="block text-sm font-medium text-gray-700 ">Content</label>
                                <div class="!h-40 rounded-md " id="editor"></div>
                                <textarea name="content" id="content" rows="10"
                                    class="mt-1  w-full rounded-md hidden border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('content') }}</textarea>
                                @error('content')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_published" id="is_published" value="1"
                                            {{ old('is_published') ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_published"
                                            class="font-medium text-gray-700 ">Publish
                                            immediately</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Create Blog Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        const quill = new Quill('#editor', {
            theme: 'snow', // Use the Snow theme
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['clean']
                ]
            }
        });

        const form = document.querySelector('#form');
        form.onsubmit = function() {
            const content = document.querySelector('#content');
            content.value = quill.root.innerHTML; // Get the HTML content from Quill
        };
    </script>
</x-app-layout>