<nav class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="pt-2 flex-shrink-0 flex items-start">
            <a href="{{route('welcome')}}" class="text-black">Institute</a>
        </div>
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-center">
                <div class=" sm:ml-6">
                    <div class="flex space-x-4">
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('admin.dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>

                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('admin.dashboard')">
                                {{ __('Create Class') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
