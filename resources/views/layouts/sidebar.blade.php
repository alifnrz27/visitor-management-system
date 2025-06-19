@php
    $mainMenu = [
        ['icon' => 'fa-house', 'label' => 'Dashboard', 'route' => 'dashboard'],
        ['icon' => 'fa-id-card', 'label' => 'Kunjungan', 'route' => 'visits'],
    ];

    $settingsMenu = [
        ['icon' => 'fa-user', 'label' => 'Profile', 'route' => 'profile'],
        ['icon' => 'fa-users', 'label' => 'Users', 'route' => 'users'],
        ['icon' => 'fa-user-shield', 'label' => 'Roles', 'route' => 'roles'],
        ['icon' => 'fa-key', 'label' => 'Permissions App', 'route' => 'permissions'],
    ];
@endphp

<div
    x-show="sidebar"
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="-translate-x-full opacity-0"
    class="flex flex-col lg:w-2/12 w-16 min-h-screen h-full bg-white shadow-lg p-4 transition-all duration-300"
>
    <div class="flex flex-col gap-4 w-full">

        <!-- Section: Main Menu -->
        <div>
            <div class="flex items-center gap-2 text-gray-500 text-xs p-2">
                <i class="fa-solid fa-bars"></i>
                <span x-show="sidebar" class="hidden lg:inline">Main Menu</span>
            </div>
            <hr>
        </div>

        @foreach ($mainMenu as $item)
            <a href="{{ route($item['route']) }}"
                class="flex items-center gap-2 p-2 rounded-lg text-sm transition-all duration-150 hover:scale-105
                    {{ request()->routeIs($item['route']) ? 'bg-[#125D72] text-white' : 'text-gray-500 hover:bg-[#125D72] hover:text-white' }}">
                <i class="fa-solid {{ $item['icon'] }}"></i>
                <span x-show="sidebar" class="hidden lg:inline">{{ $item['label'] }}</span>
            </a>
        @endforeach

        <!-- Section: Settings -->
        <div class="mt-4">
            <div class="flex items-center gap-2 text-gray-500 text-xs p-2">
                <i class="fa-solid fa-gear"></i>
                <span x-show="sidebar" class="hidden lg:inline">Settings</span>
            </div>
            <hr>
        </div>

        @foreach ($settingsMenu as $item)
            <a href="{{ route($item['route']) }}"
                class="flex items-center gap-2 p-2 rounded-lg text-sm transition-all duration-150 hover:scale-105
                    {{ request()->routeIs($item['route']) ? 'bg-[#125D72] text-white' : 'text-gray-500 hover:bg-[#125D72] hover:text-white' }}">
                <i class="fa-solid {{ $item['icon'] }}"></i>
                <span x-show="sidebar" class="hidden lg:inline">{{ $item['label'] }}</span>
            </a>
        @endforeach

    </div>
</div>
