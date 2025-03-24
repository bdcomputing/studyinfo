<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center  mb-6">
                        <div class="p-5 flex gap-5 items-center">

                            <h3 class="text-2xl font-bold text-gray-900">{{ $program->name }}</h3>
                        </div>
                        <div class="flex space-x-4">

                            <a href="{{ route('admin.universities.edit', $program) }}"
                                class="px-6 py-1.5 bg-primary text-white rounded-xl hover:bg-primary-900 transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.universities.index') }}"
                                class="px-4 py-1.5 bg-accent text-white rounded-xl hover:bg-accent-900 transition">
                                Back to List
                            </a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <img src="{{ $program->university->image_url }}" alt="{{ $program->name }}"
                            class="w-full h-[450px] object-cover rounded-lg">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Country:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->university->destination->name }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">City:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->university->city->name }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Type:</span>
                            @if ($program->type === 'Public')
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Public</span>
                            @else
                                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Private</span>
                            @endif
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Duration:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->duration }} Months
                            </span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="bi bi-translate"></i>

                            <span class="text-gray-600 mr-2">Language:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->language_of_instruction }}
                            </span>
                        </div>

                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Mode of Study:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->mode_of_study }}
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Intake:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->intake_period }}
                            </span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="bi bi-coin"></i>
                            <span class="text-gray-600 mr-2">Program Fee:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->program_fee }} {{ $program->university->destination->currency }}
                            </span>
                        </div>

                        <div class="flex items-center gap-1">
                            <i class="bi bi-mortarboard"></i>
                            <span class="text-gray-600 mr-2">Level:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $program->level }}
                            </span>
                        </div>
                    </div>

                    <div class="prose max-w-none">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Overview</h4>
                        <p class="text-gray-600 mb-6">{{ $program->description }}</p>
                        <div class="prose">
                            {!! $program->detail !!}
                        </div>

                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Tuition fee</h4>
                        <div class="text-gray-600">
                            {{ $program->program_fee }} {{ $program->university->destination->currency }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
