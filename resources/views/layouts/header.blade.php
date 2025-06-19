<div x-data="{ open: false }" class="bg-white border-b border-gray-200 px-6 py-3 shadow-md w-full z-100">
    <div class="w-full flex justify-between">
        <!-- Logo -->
        <div @click="sidebar = !sidebar" class="flex items-center gap-2 cursor-pointer">
            <i class="fa-solid fa-bars"></i>
            <div class="flex items-center">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo" class="h-8">
            </div>
        </div>

        <!-- Nav Links -->
        <div id="menu" class="w-fit flex items-center gap-4">
            <div class="flex-col gap-1 lg:flex hidden text-[10px] text-gray-500">
                <div>
                    John Doe
                </div>
                <div>
                    Admin
                </div>
            </div>
            <img src="{{ asset('assets/logo/user.png') }}" class="w-8 h-8 rounded-full shadow-lg cursor-pointer" alt="">
        </div>
    </div>
</div>