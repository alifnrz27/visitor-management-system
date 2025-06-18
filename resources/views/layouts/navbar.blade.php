<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 px-4 py-3 shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo" class="h-8">
        </div>
    </div>

    <!-- Menu Button (mobile) -->
    <div class="md:hidden">
    <button @click="open = !open" class="text-gray-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path x-show="!open" d="M4 6h16M4 12h16M4 18h16" />
        <path x-show="open" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    </div>

    <!-- Nav Links -->
    <div id="menu" class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Services</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
    </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 max-h-0"
        x-transition:enter-end="opacity-100 max-h-96"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 max-h-96"
        x-transition:leave-end="opacity-0 max-h-0"
        class="md:hidden overflow-hidden mt-2 space-y-2">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
    </div>
</nav>