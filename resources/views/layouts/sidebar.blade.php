<aside :class="{'-translate-x-full md:translate-x-0 ':!open}" class="flex md:translate-x-0 flex-col min-h-screen min-w-max w-3/4 lg:w-64 transition-transform duration-300 overflow-y-hidden top-0 z-20 absolute left-0 md:relative bg-white shadow md:shadow-none">

    <!-- Navigation Links -->
    <div class="flex flex-col justify-between flex-1 p-5 pt-20">
        <nav class="-mx-3 space-y-6 px-3">
            <div class="flex flex-col gap-5">
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <i class="bi bi-grid mr-2"></i>
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
                <x-nav-link :href="route('admin.cities.index')" :active="request()->routeIs('admin.cities.index')">
                    <i class="bi bi-building mr-2"></i>
                    {{ __('Cities') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.universities.index')" :active="request()->routeIs('admin.universities.index')">
                    <i class="bi bi-buildings mr-2"></i>
                    {{ __('Universities') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.programs.index')" :active="request()->routeIs('admin.programs.index')">
                    <i class="bi bi-mortarboard mr-2"></i>
                    {{ __('Programs') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.scholarships.index')" :active="request()->routeIs('admin.scholarships.index')">
                    <i class="bi bi-coin mr-2"></i>
                    {{ __('Scholarships') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
                    <i class="bi bi-people mr-2"></i>
                    {{ __('User Management') }}
                </x-nav-link>
            </div>
            <div class="space-y-3 pt-5">
                <label class="px-2 text-xs text-gray-500 uppercase">Customization</label>
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