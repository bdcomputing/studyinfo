<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Edit Program</p>
                    </div>
                    <form id="form" action="{{ route('admin.programs.update',$program) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-5">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Program Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name',$program->name) }}" required
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
                                    <option {{old('university_id',$university->id) === $university->id ? 'selected' : '' }} value="{{$university->id}}">{{$university->name}}</option>
                                    @empty
                                    <span>No universities to select</span>
                                    @endforelse
                                </select>
                                <!-- <input type="text" name="name" id="title" value="{{ old('name') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary-500"> -->
                                @error('university_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="level"
                                    class="block text-sm font-medium text-gray-700 ">Level<span class="text-red-500">*</span></label>
                                <select name="level" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300 focus:border-gray-300">
                                    <option class="p-3" value="">Select Level</option>
                                    <option {{$program->level ==='Undergraduate' ?'selected' :''}} value="Undergraduate">Undergraduate</option>
                                    <option {{$program->level ==='Graduate' ?'selected' :''}} value="Graduate">Graduate</option>
                                    <option {{$program->level ==='PhD' ?'selected' :''}} value="PhD">PhD</option>
                                    <option {{$program->level ==='Short Course' ?'selected' :''}} value="Short Course">Short Course</option>
                                    <option {{$program->level ==='Language Course' ?'selected' :''}} value="Language Course">Language Course</option>
                                </select>
                                @error('level')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="field_of_study"
                                    class="block text-sm font-medium text-gray-700 required">Field of Study <span class="text-red-500">*</span></label>
                                <input type="text" name="field_of_study" id="title" value="{{ old('field_of_study',$program->field_of_study) }}" required
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
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('description',$program->description) }}</textarea>
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
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('detail',$program->detail) }}</textarea>
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
                                    <option {{$program->intake_period==='Fall' ? 'selected':''}} value="Fall">Fall</option>
                                    <option {{$program->intake_period==='Spring' ? 'selected':''}} value="Spring">Spring</option>
                                    <option {{$program->intake_period==='Summer' ? 'selected':''}} value="Summer">Summer</option>
                                    <option {{$program->intake_period==='Year-round' ? 'selected':''}} value="Year-round">Year-round</option>
                                </select>
                                @error('intake_period')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="mode_of_study"
                                    class="block text-sm font-medium text-gray-700 ">Mode of Study<span class="text-red-500">*</span></label>
                                <select name="mode_of_study" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300">
                                    <option value="" class="">Select Mode of Study</option>
                                    <option {{$program->mode_of_study==='on-campus' ? 'selected':''}} value="on-campus">On Campus</option>
                                    <option {{$program->mode_of_study==='online' ? 'selected':''}} value="online">Online</option>
                                    <option {{$program->mode_of_study==='hybrid' ? 'selected':''}} value="hybrid">Hybrid</option>
                                </select>
                                @error('mode_of_study')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="language_of_instruction"
                                    class="block text-sm font-medium text-gray-700 required"> Language of Instruction<span class="text-red-500">*</span></label>
                                <input type="text" name="language_of_instruction" id="language_of_instruction" value="{{ old('language_of_instruction',$program->language_of_instruction) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('language_of_instruction')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="duration"
                                    class="block text-sm font-medium text-gray-700 required">Duration <span class="text-red-500">*</span></label>
                                <input type="number" name="duration" id="duration" value="{{ old('duration',$program->duration) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                <p class="mt-1 text-sm text-gray-500"> Program duration length in months</p>
                                @error('duration')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="">
                                <label for="program_fee"
                                    class="block text-sm font-medium text-gray-700 ">Program Fee</label>
                                <input type="number" name="program_fee" id="program_fee" value="{{old('program_fee',$program->program_fee)}}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary" />

                                @error('program_fee')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="application_deadline"
                                    class="block text-sm font-medium text-gray-700 ">Application Deadline</label>
                                <input type="date" name="application_deadline" id="application_deadline" required value="{{old('application_deadline',$program->application_deadline->format('Y-m-d'))}}"
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary" />

                                @error('application_deadline')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="is_popular" id="is_popular" value="1"
                                            {{ old('is_popular',$program->is_popular) ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring-primary">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_popular"
                                            class="font-medium text-gray-700 ">Is Program Popolar</label>
                                    </div>
                                </div>
                                <p class="text-xs p-2 text-gray-400">Popular universities will appear in homepage</p>
                            </div>
                            <div class="col-span-1">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="has_scholarship" id="has_scholarship" value="1"
                                            {{ old('has_scholarship',$program->has_scholarship) ? 'checked' : '' }}
                                            class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring-primary">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="has_scholarship"
                                            class="font-medium text-gray-700 ">Program has Scholarship</label>
                                    </div>
                                </div>
                                <p class="text-xs p-2 text-gray-400">Popular universities will appear in homepage</p>
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