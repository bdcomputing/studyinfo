<aside class="flex flex-col w-52 px-5 py-8 overflow-y-auto   ">

    <!-- Navigation Links -->

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 px-3 ">


            <div class="flex flex-col gap-5">
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <i class="bi bi-speedometer2 mr-2"></i>
                    {{ __('Dashboard') }}
                </x-nav-link>

                <x-nav-link :href="route('admin.blog')" :active="request()->routeIs('admin.blog')">
                    <i class="bi bi-chat-square-text mr-2"></i>

                    {{ __('Blog') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.events.index')" :active="request()->routeIs('admin.events.index')">
                    <i class="bi bi-calendar4-event mr-2"></i>

                    {{ __('Events') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.destinations.index')" :active="request()->routeIs('admin.destinations.index')">
                    <i class="bi bi-geo-alt mr-2"></i>

                    {{ __('Destinations') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.universities.index')" :active="request()->routeIs('admin.universities.index')">
                    <i class="bi bi-buildings mr-2"></i>

                    {{ __('Universities') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.programs.index')" :active="request()->routeIs('admin.programs.index')">
                    <i class="bi bi-mortarboard mr-2"></i>

                    {{ __('Programs') }}
                </x-nav-link>
            </div>




            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase ">Customization</label>

                <div>
                    <x-nav-link>
                        <i class="bi bi-gear mr-2"></i>

                        {{ __('Settings') }}
                    </x-nav-link>
                </div>

            </div>
        </nav>
    </div>
</aside>