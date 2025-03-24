<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-primary ">
                    <div class="py-5">
                        <p class="text-lg md:text-xl">Edit Program</p>
                    </div>
                    <form id="form" action="{{ route('admin.scholarships.update',$scholarship) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-5">
                            <div class="">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 ">Program Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name',$scholarship->name) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('name')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="university_id"
                                    class="block text-sm font-medium text-gray-700 ">University<span class="text-red-500">*</span></label>
                                <select name="university_id" class="rounded-md w-full mt-1 border-gray-300 active:border-gray-300 focus:border-gray-300">
                                    <option class="p-3">Select University</option>
                                    @forelse($universities as $university)
                                    <option {{old('university_id',$scholarship->university_id) === $university->id ? 'selected' : '' }} value="{{$university->id}}">{{$university->name}}</option>
                                    @empty
                                    <span>No universities to select</span>
                                    @endforelse
                                </select>

                                @error('university_id')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="amount"
                                    class="block text-sm font-medium text-gray-700 required">Amount <span class="text-red-500">*</span></label>
                                <input type="number" name="amount" id="title" value="{{ old('amount',$scholarship->amount) }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">
                                @error('amount')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label for="application_deadline"
                                    class="block text-sm font-medium text-gray-700 ">Application Deadline</label>
                                <input type="date" name="application_deadline" id="application_deadline" required value="{{old('application_deadline',$scholarship->application_deadline->format('Y-m-d'))}}"
                                    class="mt-1 block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary" />

                                @error('application_deadline')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="description"
                                    class="block required text-sm font-medium text-gray-700 ">Scholarship
                                    Description<span class="text-red-500">*</span></label>
                                <textarea name="description" id="description" rows="3" required
                                    class="mt-1 editor block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('description',$scholarship->description) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief description of the scholarship</p>
                                @error('description')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="eligibility_criteria"
                                    class="block required text-sm font-medium text-gray-700 ">Eligibility Criteria<span class="text-red-500">*</span></label>
                                <textarea name="eligibility_criteria" id="eligibility_criteria" rows="3" required
                                    class="mt-1 editor block w-full rounded-md border-gray-300    shadow-sm focus:border-primary focus:ring-primary">{{ old('eligibility_criteria',$scholarship->eligibility_criteria) }}</textarea>
                                <p class="mt-1 text-sm text-gray-500 ">A brief eligibility_criteria of the program</p>
                                @error('eligibility_criteria')
                                <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>

                        <div class="py-5">
                            <button type="submit"
                                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Update Scholarship
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>