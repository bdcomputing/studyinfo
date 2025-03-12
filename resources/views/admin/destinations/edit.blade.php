<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Edit Blog Post</h3>
                        <a href="{{ route('admin.blog') }}"
                            class="px-4 py-2 bg-gray-500 text-white hover:bg-gray-600 transition rounded-md">
                            Back to List
                        </a>
                    </div>

                    <form action="{{ route('admin.destinations.update', $destination) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Destination Name</label>
                                <input type="text" name="name" id="name"
                                    value="{{ old('name', $destination->name) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="country"
                                    class="block text-sm font-medium text-gray-700 ">Country</label>
                                <input name="country" id="country" value="{{ old('country', $destination->country) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500" />

                                @error('country')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="study_cost"
                                    class="block text-sm font-medium text-gray-700 ">Study
                                    Cost</label>
                                <input type="number" name="study_cost" id="publish_date"
                                    value="{{ old('study_cost',$destination->study_cost) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('study_cost')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="col-span-2">
                                <label for="image" class="block text-sm font-medium text-gray-700">Blog
                                    Image</label>
                                <div class="mt-2 mb-4">
                                    <img src="{{ asset('storage/images/destinations/' . $destination->image) }}"
                                        alt="{{ $destination->title }}" class="h-40 w-auto object-cover rounded-md">
                                </div>
                                <input type="file" name="image" id="image"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                <p class="mt-1 text-sm text-gray-500">Leave empty to keep current
                                    image. Recommended size: 800x450px. Max 2MB.</p>
                                @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="description" class="block text-sm font-medium text-gray-700">Destination
                                    Description</label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description', $destination->description) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500">A brief summary of the destination.</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="col-span-2">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_popular" id="is_popular" value="1"
                                            {{ old('is_published', $destination->is_popular) ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_popular"
                                            class="font-medium text-gray-700 ">Is destination Popolar</label>
                                    </div>
                                </div>
                                <p class="text-xs p-2 text-gray-400">Popular destination will appear in homepage</p>
                            </div>
                        </div>


                        <div class="mt-6">
                            <button type="submit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Update Destination
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