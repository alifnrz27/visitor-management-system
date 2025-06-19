@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- profile --}}
            <div class="max-w-4xl mx-auto p-6">
                <h1 class="text-2xl font-semibold mb-6">Profil Karyawan</h1>

                <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4">
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Foto Karyawan -->
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/logo/user.png') }}" alt="Foto Karyawan"
                                class="w-40 h-40 rounded-full object-cover border border-gray-300">
                        </div>

                        <!-- Detail Karyawan -->
                        <div class="flex-1 space-y-4">
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Budi Santoso</h2>
                                <p class="text-sm text-gray-500">Senior Software Engineer</p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="text-base text-gray-800 truncate">budi.santoso@example.com</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Nomor Telepon</p>
                                    <p class="text-base text-gray-800">+62 812 3456 7890</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Departemen</p>
                                    <p class="text-base text-gray-800">Teknologi Informasi</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Tanggal Masuk</p>
                                    <p class="text-base text-gray-800">12 Januari 2020</p>
                                </div>
                            </div>

                            <div>
                                <p class="text-sm text-gray-500">Alamat</p>
                                <p class="text-base text-gray-800">Jl. Kebon Jeruk Raya No. 17, Jakarta Barat</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex justify-end items-center">
                        <a href="{{ route('profile.change-password') }}" class="bg-[#125D72] px-4 py-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150">Ubah Password</a>
                    </div>
                </div>
            </div>
            {{-- end profile --}}
        </div>
    </div>
@endsection