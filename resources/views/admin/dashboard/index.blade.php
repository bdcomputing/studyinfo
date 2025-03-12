<x-app-layout>
    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8 bg-white rounded">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-5">
                <div class="relative p-5 border rounded-lg   z-0 text-primary">
                    <p class="text-xl font-extrabold">Destinations</p>
                    <p class="py-5 text-3xl font-bold">{{$destination_count}}</p>
                </div>
                <div class="relative p-5 border rounded-lg   z-0 text-primary">
                    <p class="text-2xl font-extrabold">Blogs</p>
                    <p class="py-5 text-3xl font-bold">{{$blog_count}}</p>
                </div>
                <div class="relative p-5 border rounded-lg   z-0 text-primary">
                    <p class="text-2xl font-extrabold">Events</p>
                    <p class="py-5 text-3xl font-bold">{{$events_count}}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>