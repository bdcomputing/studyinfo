<x-app-layout>
    <section class="p-5">
        <div class="">
            <div class="md:py-5 ">
                <div class="md:p-5 bg -white">
                    <div class="flex p-5  justify-between w-full  ">
                        <p class="text-lg md:text-xl font-bold">Blog List</p>
                        <a href="{{route('admin.blog.create')}}" class="rounded-lg cursor-pointer bg-primary self-end text-white  px-3 py-1.5">New Blog</a>
                    </div>

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
                                            <span>Title</span>


                                        </button>
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <button class="flex items-center gap-x-2">
                                            <span>Category</span>

                                        </button>
                                    </th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Email address</th>

                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">Status</th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">
                                @forelse ($blogs as $blog)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded   ">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('storage/images/blog/' . $blog->image) }}" alt="">

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1">

                                            <h2 class="text-sm font-normal text-gray-600">{{$blog['title']}}</h2>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-200 dark:text-blue-900">
                                            {{ $blog->category }}
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $blog->publish_date }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($blog->is_published)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-200 dark:text-green-900">
                                            Published
                                        </span>
                                        @else
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-200 dark:text-red-900">
                                            Draft
                                        </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                        <a href="{{ route('admin.blog.show', $blog) }}"
                                            class="text-blue-800 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-gray-300">
                                            View
                                        </a>
                                        <a href="{{ route('admin.blog.edit', $blog) }}"
                                            class="text-blue-400 hover:text-blue-900 hover:underline dark:text-blue-400 dark:hover:text-blue-300">
                                            Edit
                                        </a>
                                        <form class="inline" method="POST"
                                            action="{{ route('admin.blog.destroy', $blog) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="20">
                                        <div class="flex flex-col w-full max-w-sm px-4 mx-auto">
                                            <div class="p-3 mx-auto text-primary py-5  rounded-full ">
                                                <i class="bi bi-database-exclamation text-7xl"></i>
                                            </div>
                                            <h1 class="mt-3 text-lg text-gray-800 text-center ">No blogs found</h1>
                                            <div class="flex items-center my-4 sm:mx-auto gap-x-3">


                                                <a href="{{route('admin.blog.create')}}" class="flex cursor-pointer items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-primary rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-primary-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <span>New Blog</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>

                        </table>
                        {{$blogs->links("pagination")}}
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>