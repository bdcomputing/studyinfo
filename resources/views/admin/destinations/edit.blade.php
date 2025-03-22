<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>


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


                        <div class="md:grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="title" value="{{ old('name',$destination->name) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="continent_id"
                                    class="block text-sm font-medium text-gray-700 ">Continent<span class="text-red-500">*</span></label>
                                <select name="continent_id" class="rounded-md border-gray-600">
                                    <option class="p-3">Select Continent</option>
                                    @forelse($continents as $continent)
                                    <option {{$destination->continent_id===$continent->id ? 'selected': ''}} value="{{$continent->id}}">{{$continent->name}}</option>
                                    @empty
                                    <span>No continents to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500"> -->
                                @error('continent_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="currency"
                                    class="block text-sm font-medium text-gray-700 required">Currency <span class="text-red-500">*</span></label>
                                <input type="text" name="currency" id="title" value="{{ old('currency',$destination->currency) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('currency')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-span-2">
                                <label for="description"
                                    class="block required text-sm font-medium text-gray-700 ">Destination
                                    Description<span class="text-red-500">*</span></label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description',$destination->description) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief description of the destination</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2 py-5 !relative">
                                <label for="detail"
                                    class="block text-sm font-medium text-gray-700 ">
                                    Destination Details</label>
                                <textarea name="detail" id="detail" rows="3" required
                                    class="mt-1   w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('detail',$destination->detail) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">Destination details</p>
                                @error('detail')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="language"
                                    class="block text-sm font-medium text-gray-700 ">Language</label>
                                <input name="language" id="language" required value="{{old('language',$destination->language)}}"
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500" />

                                @error('language')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="cost_of_living"
                                    class="block text-sm font-medium text-gray-700 ">Average
                                    Cost of Living</label>
                                <input type="number" name="cost_of_living" id="publish_date"
                                    value="{{ old('cost_of_living',$destination->cost_of_living) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('cost_of_living')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="">
                                <label for="image"
                                    class="block text-sm font-medium text-gray-700 ">
                                    <span class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Destination Image <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('storage/' . $destination->image_url) }}" class="object-cover size-20 rounded-md" alt="">

                                            <div>
                                                <input type="file" name="image" id="image"
                                                    class="mt-1 block w-full text-sm text-gray-500  self-center
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-primary-50 file:text-primary-700
                                            hover:file:bg-primary-100
                                            ">
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 ">
                                            PNG, JPG, GIF up to 2MB. Recommended size: 800x450px
                                        </p>
                                    </div>
                                </div>
                                @error('image')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="flag"
                                    class="block text-sm font-medium text-gray-700 ">
                                    <span class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Destination flag <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('storage/' . $destination->flag_url) }}" class="size-20 object-cover rounded-md" alt="">

                                            <div>
                                                <input type="file" name="flag" id="flag"
                                                    class="mt-1 block w-full text-sm text-gray-500  self-center
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-primary-50 file:text-primary-700
                                            hover:file:bg-primary-100
                                            ">
                                            </div>
                                        </div>

                                        <p class="text-xs text-gray-500 ">
                                            PNG, JPG, GIF up to 2MB. Recommended size: 800x450px
                                        </p>
                                    </div>
                                </div>
                                @error('logo')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_popular" id="is_popular" value="1"
                                            {{ old('is_popular',$destination->is_popular) ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_popular"
                                            class="font-medium text-gray-700 ">Is Destination Popolar</label>
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
</x-app-layout>