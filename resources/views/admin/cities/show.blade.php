<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $destination->name }}</h3>
                        <div class="flex space-x-4">

                            <a href="{{ route('admin.destinations.edit', $destination) }}"
                                class="px-6 py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600 transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.destinations.index') }}"
                                class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition">
                                Back to List
                            </a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <img src="{{ $destination->image }}" alt="{{ $destination->name }}"
                            class="w-full h-[450px] object-cover rounded-lg">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Country:</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                {{ $destination->country }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2">Status:</span>
                            @if ($destination->is_popular)
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Popular</span>
                            @else
                                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Not Popular</span>
                            @endif
                        </div>

                    </div>

                    <div class="prose max-w-none">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Description</h4>
                        <p class="text-gray-600 mb-6">{{ $destination->description }}</p>

                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Study Cost</h4>
                        <div class="text-gray-600">
                            USD {{ $destination->study_cost }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
