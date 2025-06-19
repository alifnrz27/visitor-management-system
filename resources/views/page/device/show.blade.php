@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- device --}}
            <div class="max-w-4xl mx-auto p-6">
                <div class="flex items-center gap-2 mb-6 mx-4">
                    <a href="{{ route('devices') }}" class="text-gray-500 text-4xl cursor-pointer font-bold flex items-center hover:scale-105"><</a>
                    <div class="text-2xl font-semibold flex items-center">Detail Perangkat</div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4">
                        <!-- Detail Perangkat -->
                        <div class="flex-1 space-y-4">
                            <div class="flex flex-col gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Nama</p>
                                    <p class="text-base text-gray-800">Ruang Rapat 1</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Kode</p>
                                    <p class="text-base text-gray-800">12345</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Lantai</p>
                                    <p class="text-base text-gray-800">Lantai 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end items-center">
                            <a href="" class="bg-[#125D72] px-4 py-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150">Ubah Data</a>
                        </div>
                    </div>

                    
                </div>
            </div>
            {{-- end device --}}
        </div>
    </div>
@endsection