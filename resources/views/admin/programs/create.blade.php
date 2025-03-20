<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Create Program</p>
                    </div>
                    <form id="form" action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-5">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Program Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="university_id"
                                    class="block text-sm font-medium text-gray-700 ">University<span class="text-red-500">*</span></label>
                                <select name="university_id" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300 focus:border-gray-300">
                                    <option class="p-3" value="">Select University</option>
                                    @forelse($universities as $university)
                                    <option {{old('university_id') === $university->id ? 'selected' : '' }} value="{{$university->id}}">{{$university->name}}</option>
                                    @empty
                                    <span>No universities to select</span>
                                    @endforelse
                                </select>
                                @error('university_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="level"
                                    class="block text-sm font-medium text-gray-700 ">Level<span class="text-red-500">*</span></label>
                                <select name="level" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300 focus:border-gray-300">
                                    <option class="p-3" value="">Select Level</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Short Course">Short Course</option>
                                    <option value="Language Course">Language Course</option>
                                </select>
                                @error('level')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="field_of_study"
                                    class="block text-sm font-medium text-gray-700 required">Field of Study <span class="text-red-500">*</span></label>
                                <input type="text" name="field_of_study" id="title" value="{{ old('field_of_study') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('field_of_study')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="description"
                                    class="block required text-sm font-medium text-gray-700 ">Program
                                    Description<span class="text-red-500">*</span></label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('description') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief description of the program</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="detail"
                                    class="block required text-sm font-medium text-gray-700 ">Program
                                    Details<span class="text-red-500">*</span></label>
                                <textarea name="detail" id="detail" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('detail') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">Program details</p>
                                @error('detail')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="intake_period"
                                    class="block text-sm font-medium text-gray-700 ">Intake Period<span class="text-red-500">*</span></label>
                                <select name="intake_period" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300">
                                    <option class="" value="">Select Intake Period</option>
                                    <option value="Fall">Fall</option>
                                    <option value="Spring">Spring</option>
                                    <option value="Summer">Summer</option>
                                    <option value="Year-round">Year-round</option>
                                </select>
                                @error('intake_period')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="mode_of_study"
                                    class="block text-sm font-medium text-gray-700 ">Mode of Study<span class="text-red-500">*</span></label>
                                <select name="mode_of_study" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300">
                                    <option class="" value="">Select Mode of Study</option>
                                    <option value="on-campus">On Campus</option>
                                    <option value="online">Online</option>
                                    <option value="hybrid">Hybrid</option>
                                </select>
                                @error('mode_of_study')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="language_of_instruction"
                                    class="block text-sm font-medium text-gray-700 required"> Language of Instruction<span class="text-red-500">*</span></label>
                                <input type="text" name="language_of_instruction" id="language_of_instruction" value="{{ old('language_of_instruction') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('language_of_instruction')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="duration"
                                    class="block text-sm font-medium text-gray-700 required">Duration <span class="text-red-500">*</span></label>
                                <input type="number" name="duration" id="duration" value="{{ old('duration') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                <p class="mt-1 text-sm text-gray-500"> Program duration length in months</p>
                                @error('duration')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="">
                                <label for="program_fee"
                                    class="block text-sm font-medium text-gray-700 ">Program Fee</label>
                                <input type="number" name="program_fee" id="program_fee" value="{{old('program_fee')}}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary" />

                                @error('program_fee')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="application_deadline"
                                    class="block text-sm font-medium text-gray-700 ">Application Deadline</label>
                                <input type="date" name="application_deadline" id="application_deadline" required value="{{old('application_deadline')}}"
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary" />

                                @error('application_deadline')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_popular" id="is_popular" value="1"
                                            {{ old('is_popular') ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_popular"
                                            class="font-medium text-gray-700 ">Is Program Popolar</label>
                                    </div>
                                </div>
                                <p class="text-xs p-2 text-gray-400">Popular universities will appear in homepage</p>
                            </div>
                            <div class="">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="has_scholarship" id="has_scholarship" value="1"
                                            {{ old('has_scholarship') ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="has_scholarship"
                                            class="font-medium text-gray-700 ">Program has Scholarship</label>
                                    </div>
                                </div>
                                <p class="text-xs p-2 text-gray-400">Check if program has scholarship</p>
                            </div>



                        </div>

                        <div class="py-5">
                            <button type="submit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Add Program
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>