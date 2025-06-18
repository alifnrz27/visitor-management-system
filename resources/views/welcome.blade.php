@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="relative w-screen h-screen">
        <!-- Background image via Tailwind bg-[url] -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/logo/PLTGU-Muara-Karang.jpg') }}');"></div>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50" style="opacity: 50%"></div>

            <!-- Content -->
            <div class="relative z-10 flex items-center justify-center w-full h-full">
                <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang</h1>
                <p class="text-lg md:text-xl text-gray-200 mb-6">Visitor management system</p>
                <a href="{{ url('/home') }}" class="px-6 py-3 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                    Get Started
                </a>
            </div>
        </div>
    </div>

@endsection
