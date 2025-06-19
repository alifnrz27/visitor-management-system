@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- visit --}}
            <div class="max-w-4xl mx-auto p-6">
                <div class="flex items-center gap-2 mb-6 mx-4">
                    <a href="{{ route('visits') }}" class="text-gray-500 text-4xl cursor-pointer font-bold flex items-center hover:scale-105"><</a>
                    <div class="text-2xl font-semibold flex items-center">Detail Visit</div>
                </div>

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
                                <h2 class="text-xl font-bold text-gray-800">Budi Santoso (PT. Sejahtera Abadi)</h2>
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
                                    <p class="text-sm text-gray-500">Tanggal Kunjungan</p>
                                    <p class="text-base text-gray-800">12 Januari 2020 10:00</p>
                                </div>
                            </div>

                            <div>
                                <p class="text-sm text-gray-500">Alasan Kunjungan</p>
                                <p class="text-base text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. A odio ipsa molestias harum libero suscipit error pariatur rerum, velit reiciendis fugiat cum impedit aut quia optio dolorem dolore? Nisi dignissimos quam consequuntur, labore reiciendis, maxime excepturi eaque praesentium iusto amet eum expedita neque architecto magni suscipit nam eligendi vitae eos, eius molestiae deleniti a quidem voluptate quod. Consectetur voluptates iusto corrupti quisquam dignissimos nesciunt aliquid earum voluptas neque rerum nostrum nisi provident, pariatur a distinctio! Deserunt voluptatibus reprehenderit animi facilis neque cum voluptate reiciendis. Distinctio magni expedita laboriosam! Vero velit iste totam accusantium optio excepturi maiores explicabo nostrum sed officiis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end visit --}}
        </div>
    </div>
@endsection