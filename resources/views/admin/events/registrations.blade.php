<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Registrations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Registrations for:
                            {{ $event->title }}
                        </h3>
                        <a href="{{ route('admin.events.show', $event) }}"
                            class="px-6 py-2 bg-gray-500 text-white hover:bg-gray-600 transition rounded-full">
                            Back to Event Details
                        </a>
                    </div>

                    @if (session('success'))
                    <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-white rounded-lg shadow p-4">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-500 bg-opacity-20">
                                    <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Total
                                        Registrations</h4>
                                    <p class="text-3xl font-bold text-gray-900">
                                        {{ $registrations->count() }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg shadow p-4">
                                <div class="flex flex-col">
                                    <div class="p-2 rounded-full bg-yellow-500 bg-opacity-20 self-start">
                                        <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Pending</h4>
                                        <p class="text-2xl font-bold text-gray-900">
                                            {{ $registrations->where('status', 'pending')->count() }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4">
                                <div class="flex flex-col">
                                    <div class="p-2 rounded-full bg-green-500 bg-opacity-20 self-start">
                                        <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Approved</h4>
                                        <p class="text-2xl font-bold text-gray-900">
                                            {{ $registrations->where('status', 'approved')->count() }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4">
                                <div class="flex flex-col">
                                    <div class="p-2 rounded-full bg-red-500 bg-opacity-20 self-start">
                                        <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Declined</h4>
                                        <p class="text-2xl font-bold text-gray-900">
                                            {{ $registrations->where('status', 'declined')->count() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Registration Date</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($registrations as $registration)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $registration->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $registration->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $registration->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $registration->phone ?? 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $registration->created_at->format('M d, Y H:i') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($registration->status == 'pending')
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                        @elseif($registration->status == 'approved')
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Approved
                                        </span>
                                        @elseif($registration->status == 'declined')
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Declined
                                        </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div x-data="{ open: false }">
                                            <button @click="open = true"
                                                class="inline-flex items-center px-4 py-2 bg-primary-500 text-white hover:bg-primary-600 transition rounded-full text-sm">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                Update Status
                                            </button>

                                            <div x-show="open" @click.away="open = false"
                                                class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"
                                                x-transition:enter="transition ease-out duration-300"
                                                x-transition:enter-start="opacity-0"
                                                x-transition:enter-end="opacity-100"
                                                x-transition:leave="transition ease-in duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0">
                                                <div
                                                    class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                                                    <div class="mt-3 text-center">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Update Registration Status</h3>
                                                        <div class="mt-2 px-7 py-3">
                                                            <form
                                                                action="{{ route('admin.registrations.updateStatus', $registration->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                <select name="status"
                                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                                                                    <option value="pending"
                                                                        {{ $registration->status == 'pending' ? 'selected' : '' }}>
                                                                        Pending</option>
                                                                    <option value="approved"
                                                                        {{ $registration->status == 'approved' ? 'selected' : '' }}>
                                                                        Approved</option>
                                                                    <option value="declined"
                                                                        {{ $registration->status == 'declined' ? 'selected' : '' }}>
                                                                        Declined</option>
                                                                </select>
                                                                <div class="flex justify-end gap-4 mt-4">
                                                                    <button type="button" @click="open = false"
                                                                        class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-300">
                                                                        Cancel
                                                                    </button>
                                                                    <button type="submit"
                                                                        class="px-4 py-2 bg-primary-600 text-white text-base font-medium rounded-md shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-300">
                                                                        Update
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        No registrations found
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>