<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Create City</p>
                    </div>
                    <form id="form" action="{{ route('admin.cities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-400    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="destination_id"
                                    class="block text-sm mt-1 font-medium text-gray-700 ">Country<span class="text-red-500">*</span></label>
                                <select name="destination_id" class="rounded-md border-gray-400 w-full">
                                    <option class="p-3" value="">Select Country</option>
                                    @forelse($countries as $country)
                                    <option {{ old('destination_id') === $country->id ?'selected' : '' }} value="{{$country->id}}">{{$country->name}}</option>
                                    @empty
                                    <span>No countries to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500"> -->
                                @error('destination_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6 col-span-2 text-center">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Create City
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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