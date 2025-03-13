<x-app-layout>
    <section class="py-5">
        <div class="container mx-auto">
            <div class="p-5 space-y-3 bg-white md:w-1/3 rounded-lg">
                <p class="font-bold">Message From {{$message->first_name}} {{$message->last_name}}</p>
                <div class=" gap-2">
                    <p class="flex items-center gap-2"><i class="bi bi-envelope text-lg "></i> Message</p>
                    <p class="text-gray-600 px-2">{{$message->message}}</p>
                </div>
                <div class="flex gap-2">
                    <i class="bi bi-telephone"></i>
                    <p>{{$message->phone}}</p>
                </div>
                <div class="flex gap-2">
                    <i class="bi bi-envelope-alt"></i>
                    <p>{{$message->email}}</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>