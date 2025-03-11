<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto p-5 sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden border">
                <div class="p-6">
                    <div class="md:flex space-y-3 justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $event->title }}</h3>
                        <div class="flex space-x-4">
                            <a href="{{ route('admin.events.edit', $event) }}"
                                class="px-6 py-1.5 bg-primary text-white rounded-xl hover:bg-primary-900 transition">
                                Edit
                            </a>
                            <a href="{{ route('admin.events.index') }}"
                                class="px-4 py-1.5 bg-accent text-white rounded-xl hover:bg-accent-900 transition">
                                Back to List
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:p-5">
                        <div class="md:col-span-1">
                            <div class="mb-6">
                                @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                    class="w-full h-auto rounded-lg">
                                @else
                                <div class="bg-gray-100 rounded-lg p-4 text-center">
                                    No image available
                                </div>
                                @endif
                            </div>

                            <div class="bg-white rounded-lg border overflow-hidden">
                                <div class="divide-y divide-gray-200">
                                    <div class="px-4 py-3 flex justify-between">
                                        <span class="text-gray-600">Status</span>
                                        @if ($event->is_active)
                                        <span
                                            class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Active</span>
                                        @else
                                        <span
                                            class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">Inactive</span>
                                        @endif
                                    </div>
                                    <div class="px-4 py-3 flex justify-between">
                                        <span class="text-gray-600">Date</span>
                                        <span class="text-gray-900">{{ $event->formatted_date }}</span>
                                    </div>
                                    <div class="px-4 py-3 flex justify-between">
                                        <span class="text-gray-600">Time</span>
                                        <span class="text-gray-900">{{ $event->formatted_time }}</span>
                                    </div>
                                    <div class="px-4 py-3 flex justify-between">
                                        <span class="text-gray-600">Location</span>
                                        <span class="text-gray-900">{{ $event->location }}</span>
                                    </div>
                                    <div class="px-4 py-3 flex justify-between">
                                        <span class="text-gray-600">Capacity</span>
                                        <span class="text-gray-900">
                                            @if ($event->capacity)
                                            {{ $event->registrations->count() }} / {{ $event->capacity }}
                                            ({{ $event->spots_left }} spots left)
                                            @else
                                            Unlimited
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex space-x-4">
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this event?')"
                                    class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full px-4 py-1.5 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                                        Delete Event
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <div class="prose max-w-none mb-8 px-5">
                                {!! nl2br(e($event->description)) !!}
                            </div>

                            <div class="bg-white rounded-lg  overflow-hidden">
                                <div class="px-4 py-3 ">
                                    <h4 class="text-lg font-semibold text-gray-900">Registration
                                        Summary</h4>
                                </div>
                                <div class="p-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <div class="bg-blue-50 p-4 rounded-lg">
                                            <div class="text-primary text-sm">Total</div>
                                            <div class="text-2xl font-bold text-primary">
                                                {{ $event->registrations->count() }}
                                            </div>
                                        </div>
                                        <div class="bg-yellow-50 p-4 rounded-lg">
                                            <div class="text-yellow-600 text-sm">Pending</div>
                                            <div class="text-2xl font-bold text-yellow-700">
                                                {{ $event->registrations->where('status', 'pending')->count() }}
                                            </div>
                                        </div>
                                        <div class="bg-green-50 p-4 rounded-lg">
                                            <div class="text-green-600 text-sm">Approved</div>
                                            <div class="text-2xl font-bold text-green-700">
                                                {{ $event->registrations->where('status', 'approved')->count() }}
                                            </div>
                                        </div>
                                        <div class="bg-red-50 p-4 rounded-lg">
                                            <div class="text-red-600 text-sm">Declined</div>
                                            <div class="text-2xl font-bold text-red-700">
                                                {{ $event->registrations->where('status', 'declined')->count() }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="{{ route('admin.events.registrations', $event) }}"
                                            class="inline-flex items-center px-4 py-1.5 bg-primary text-white rounded-xl hover:bg-primary-900 transition">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            Manage Registrations
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>