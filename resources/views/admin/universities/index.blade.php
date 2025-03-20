<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Universities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">


                    <div class="overflow-hidden  border-gray-200  md:rounded-lg">
                        <table class="min-w-full divide-y">
                            <div class="bg-gray-50 h-20">
                                <div class="flex p-5  justify-between w-full  ">
                                    <p class="text-lg md:text-xl font-bold">University List</p>
                                    <div>
                                        <input type="search" name="" placeholder="search" class=" border-gray-200 py-1.5 focus:border-gray-400 rounded-xl placeholder:text-gray-400" id="">
                                    </div>
                                    <a href="{{route('admin.universities.create')}}" class="rounded-lg cursor-pointer bg-primary self-end text-white  px-3 py-1.5">Add University</a>
                                </div>
                            </div>
                            <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="py-3.5 px-4 w-max text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">
                                            Logo

                                        </div>
                                    </th>

                                    <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>Name</span>


                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>Country</span>

                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>City</span>

                                        </button>
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Ranking</th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Tuition Fee</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Type</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Actions</th>


                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">




                                @forelse ($universities as $university)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('storage/' . $university->logo_url) }}" alt="{{$university->name}}">

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1">

                                            <h2 class="text-sm font-normal text-gray-600">{{$university->name}}</h2>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <h2 class="text-sm font-normal text-gray-600">{{ $university->destination->name }}</h2>

                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 ">
                                        {{ $university->city->name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap font-bold">
                                        {{ $university->ranking }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        <p class="flex items-center text-gray-600">{{ $university->tuition_fee }} <span class="pl-2 text-sm text-primary rounded-lg font-bold">{{$university->destination->currency}}</span></p>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($university->type ==='Public')
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Public
                                        </span>
                                        @else
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Private
                                        </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                        <a href="{{ route('admin.universities.edit', $university->id) }}"
                                            class="text-primary-600 hover:text-primary-900">Edit</a>
                                        <a href="{{ route('admin.universities.show', $university->id) }}"
                                            class="text-blue-600 hover:text-blue-900">View</a>
                                        <form action="{{ route('admin.universities.destroy', $university) }}"
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
                                            <h1 class="mt-3 text-lg text-gray-800 text-center ">No University found</h1>
                                            <div class="flex items-center my-4 sm:mx-auto gap-x-3">


                                                <a href="{{route('admin.universities.create')}}" class="flex cursor-pointer items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-primary rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-primary-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <span>Add University</span>
                                                </a>
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