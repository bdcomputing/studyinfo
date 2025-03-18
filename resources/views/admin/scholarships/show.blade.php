<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Scholarship') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center  mb-6">
                        <div class="p-5 flex gap-5 items-center">
                            <img src="{{ asset('storage/' . $scholarship->logo_url) }}" alt="{{ $scholarship->name }}"
                                class=" size-16 object-cover rounded-md">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $scholarship->name }}</h3>
                        </div>
                        <div class="flex space-x-4">

                            <a href="{{ route('admin.scholarships.edit', $scholarship) }}"
                                class="px-6 py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600 transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.scholarships.index') }}"
                                class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition">
                                Back to List
                            </a>
                        </div>
                    </div>

                    <div class="py-3">
                        <p class="text-gray-600 mb-6">{{ $scholarship->description }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">University:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $scholarship->university->name }}
                            </span>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>