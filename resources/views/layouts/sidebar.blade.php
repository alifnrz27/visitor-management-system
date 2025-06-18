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

        <!-- Menu Items -->
        <template x-for="item in [
            { icon: 'fa-house', label: 'Dashboard' },
            { icon: 'fa-id-card', label: 'Kunjungan' }
        ]" :key="item.label">
            <div class="flex items-center gap-2 p-2 rounded-lg text-gray-500 text-sm hover:bg-[#125D72] hover:text-white transition-all duration-150 hover:scale-105">
                <i :class="`fa-solid ${item.icon}`"></i>
                <span x-show="sidebar" class="hidden lg:inline" x-text="item.label"></span>
            </div>
        </template>

        <!-- Section: Settings -->
        <div>
            <div class="flex items-center gap-2 text-gray-500 text-xs p-2">
                <i class="fa-solid fa-gear"></i>
                <span x-show="sidebar" class="hidden lg:inline">Settings</span>
            </div>
            <hr>
        </div>

         <!-- Menu Items -->
        <template x-for="item in [
            { icon: 'fa-user', label: 'Profile' },
            { icon: 'fa-users', label: 'Users' },
            { icon: 'fa-user-shield', label: 'Roles' },
            { icon: 'fa-key', label: 'Permissions App' },
            { icon: 'fa-database', label: 'Master Data' }
        ]" :key="item.label">
            <div class="flex items-center gap-2 p-2 rounded-lg text-gray-500 text-sm hover:bg-[#125D72] hover:text-white transition-all duration-150 hover:scale-105">
                <i :class="`fa-solid ${item.icon}`"></i>
                <span x-show="sidebar" class="hidden lg:inline" x-text="item.label"></span>
            </div>
        </template>
    </div>
</div>
