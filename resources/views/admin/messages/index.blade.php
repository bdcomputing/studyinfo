<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex p-5  justify-between w-full  ">
                        <p class="text-lg md:text-xl font-bold">Messages List</p>
                        <!-- <a href="{{route('admin.events.create')}}" class="rounded-lg cursor-pointer bg-primary self-end text-white  px-3 py-1.5">New Event</a> -->
                    </div>
                    @if (session('success'))
                    <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 px-4 w-max text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">

                                        </div>
                                    </th>

                                    <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>First Name</span>


                                        </button>
                                    </th>
                                    <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>Last Name</span>


                                        </button>
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>Phone</span>

                                        </button>
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Email</th>


                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Actions</th>


                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">




                                @forelse ($messages as $message)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">
                                        </div>
                                    </td>
                                    <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1">

                                            <h2 class="text-sm font-normal text-gray-600">{{$message->first_name}}</h2>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full  ">
                                            {{ $message->last_name}}
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $message->phone }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $message->email }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">

                                        <a href="{{ route('admin.messages.show', $message) }}"
                                            class="text-blue-600 hover:text-blue-900">View</a>
                                        <form action="{{ route('admin.messages.destroy', $message) }}"
                                            method="POST" class="inline-block"
                                            onsubmit="return confirm('Are you sure you want to delete this event?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty<tr>
                                    <td colspan="20">
                                        <div class="flex flex-col w-full max-w-sm px-4 mx-auto">
                                            <div class="p-3 mx-auto text-primary py-5  rounded-full ">
                                                <i class="bi bi-database-exclamation text-7xl"></i>
                                            </div>
                                            <h1 class="mt-3 text-lg text-gray-800 text-center ">No messages found</h1>
                                            <div class="flex items-center my-4 sm:mx-auto gap-x-3">
                                            </div>
                                        </div>
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