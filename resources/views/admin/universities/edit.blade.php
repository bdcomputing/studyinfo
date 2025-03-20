<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Edit University</p>
                    </div>
                    <form id="form" action="{{ route('admin.universities.update',$university) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-5">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">University Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="title" value="{{ old('name',$university->name) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="destination"
                                    class="block text-sm font-medium text-gray-700 ">Destination<span class="text-red-500">*</span></label>
                                <select name="destination_id" class="rounded-md w-full border-gray-600">
                                    <option value="" class="p-3">Select Destination</option>
                                    @forelse($destinations as $destination)
                                    <option {{old('destination_id',$university->destination_id) === $destination->id ? 'selected' : '' }} value="{{$destination->id}}">{{$destination->name}}</option>
                                    @empty
                                    <span>No destinations to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500"> -->
                                @error('destination_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="ranking"
                                    class="block text-sm font-medium text-gray-700 required">Ranking <span class="text-red-500">*</span></label>
                                <input type="number" name="ranking" id="title" value="{{ old('ranking',$university->ranking) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                @error('ranking')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="city"
                                    class="block text-sm font-medium text-gray-700 ">City<span class="text-red-500">*</span></label>
                                <select name="city_id" class="rounded-md w-full border-gray-600">
                                    <option class="p-3" value="">Select City</option>
                                    @forelse($cities as $city)
                                    <option {{old('city_id',$university->city->id) === $city->id ? 'selected' : '' }} value="{{$city->id}}">{{$city->name}}</option>
                                    @empty
                                    <span>No City to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500"> -->
                                @error('city_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-span-2">
                                <label for="description"
                                    class="block required text-sm font-medium text-gray-700 ">University
                                    Description<span class="text-red-500">*</span></label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description',$university->description) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief description of the university</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2 pb-16">
                                <label for="content"
                                    class="block pb-3 required text-sm font-medium text-gray-700 ">University
                                    Details<span class="text-red-500">*</span></label>
                                <textarea name="content" id="content" rows="3" required
                                    class="mt-1 editor block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('content',$university->content) }}</textarea>
                                @error('content')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="">
                                <label for="website_url"
                                    class="block text-sm font-medium text-gray-700 ">Website URL</label>
                                <input type="url" name="website_url" id="website_url" value="{{old('website_url',$university->website_url)}}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500" />

                                @error('website_url')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="contact_email"
                                    class="block text-sm font-medium text-gray-700 ">Contact Email</label>
                                <input type="email" name="contact_email" id="contact_email" required value="{{old('contact_email',$university->contact_email)}}"
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500" />

                                @error('contact_email')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="type"
                                    class="block text-sm font-medium text-gray-700 ">Type</label>
                                <select name="type" class="w-full border-gray-400 rounded-md" id="">
                                    <option class="" value="">Select Type</option>
                                    <option {{old('type',$university->type) ==='Public'? 'selected' :'' }} value="Public">Public</option>
                                    <option {{old('type',$university->type) ==='Private'? 'selected' :'' }} value="Private">Private</option>
                                </select>

                                @error('type')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div>
                                <label for="tuition_fee"
                                    class="block text-sm font-medium text-gray-700 ">Tuition Fee</label>
                                <input type="number" name="tuition_fee" id="publish_date"
                                    value="{{ old('tuition_fee',$university->tuition_fee) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                <p class="mt-1 text-sm text-gray-400">Tuition fee in country of origin currency</p>
                                @error('tuition_fee')
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
                                        University Image <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('storage/' . $university->image_url) }}" class="object-cover size-20 rounded-md" alt="">

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
                                        University Logo <span class="text-red-500">*</span>
                                    </span>
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300  border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset('storage/' . $university->logo_url) }}" class="size-20 object-cover rounded-md" alt="">

                                            <div>
                                                <input type="file" name="logo" id="logo"
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


                        </div>

                        <div class="py-5">
                            <button type="sub            automatic_uploads: false,
mit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Update University
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tinymce -->
    <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.editor',
            height: 400,
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat ',
            content_css: '{{ asset("tinymce/skins/content/default/content.min.css") }}',
            branding: false,
            promotion: false,
        });
    </script>
</x-app-layout>