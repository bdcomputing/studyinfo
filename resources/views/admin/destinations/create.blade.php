<x-app-layout>



    <!-- 'name',
    'description',
    'image',
    'country',
    'study_cost',
    'is_popular' -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Create Destination</p>
                    </div>
                    <form id="form" action="{{ route('admin.destinations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Continent<span class="text-red-500">*</span></label>
                                <select name="continent_id" class="rounded-md border-gray-600">
                                    <option value="" class="p-3">Select Continent</option>
                                    @forelse($continents as $continent)
                                    <option value="{{$continent->id}}">{{$continent->name}}</option>
                                    @empty
                                    <span>No continents to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500"> -->
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="currency"
                                    class="block text-sm font-medium text-gray-700 required">Currency <span class="text-red-500">*</span></label>
                                <input type="text" name="currency" id="title" value="{{ old('currency') }}" required
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
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief description of the destination</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2 !relative">
                                <label for="detail"
                                    class="block text-sm font-medium text-gray-700 ">
                                    Destination Details</label>
                                <textarea name="detail" id="detail" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('detail') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">Destination details</p>
                                @error('detail')
                                <p class="mt-1 text-sm text-red-600 py-3">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-5">
                                <label for="language"
                                    class="block text-sm font-medium text-gray-700 ">Language</label>
                                <input name="language" id="language" required
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
                                    value="{{ old('cost_of_living') }}" required
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
                            <div class="">
                                <label for="flag"
                                    class="block text-sm font-medium text-gray-700 ">
                                    <span class="flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Destination Flag <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <input type="file" name="flag" id=" flag" required
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
                                @error('flag')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_popular" id="is_popular" value="1"
                                            {{ old('is_popular') ? 'checked' : '' }}
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
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Create Destination
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>