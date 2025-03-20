<x-app-layout>
    <div class="py-12">
        <div class="container mx-auto px-5 md:p-0   rounded">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5  ">
                <div class="relative p-5 border rounded-lg bg-white flex gap-x-8 z-0 text-primary">
                    <div class="flex h-full items-center">
                        <i class="bi bi-globe text-4xl text-secondary"></i>
                    </div>
                    <div class=" w-full px-3">
                        <p class="text-xl font-extrabold">Destinations</p>
                        <p class="py-5 text-2xl font-bold">{{$destination_count}}</p>
                    </div>
                </div>
                <div class="relative p-5 border rounded-lg bg-white flex gap-x-8 z-0 text-primary">
                    <div class="flex h-full items-center">
                        <i class="bi bi-buildings text-4xl text-secondary"></i>
                    </div>
                    <div class=" w-full px-3">
                        <p class="text-xl font-extrabold">Universities</p>
                        <p class="py-5 text-2xl font-bold">{{$university_count}}</p>
                    </div>
                </div>
                <div class="relative p-5 border rounded-lg bg-white flex gap-x-8 z-0 text-primary">
                    <div class="flex h-full items-center">
                        <i class="bi bi-mortarboard text-4xl text-secondary"></i>
                    </div>
                    <div class=" w-full px-3">
                        <p class="text-xl font-extrabold">Programs</p>
                        <p class="py-5 text-2xl font-bold">{{$programs_count}}</p>
                    </div>
                </div>
                <div class="relative p-5 border rounded-lg bg-white flex gap-x-8 z-0 text-primary">
                    <div class="flex h-full items-center">
                        <i class="bi bi-people text-4xl text-secondary"></i>
                    </div>
                    <div class=" w-full px-3">
                        <p class="text-xl font-extrabold">Users</p>
                        <p class="py-5 text-2xl font-bold">{{$users_count}}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>