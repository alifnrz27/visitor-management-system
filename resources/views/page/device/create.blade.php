@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- create floor --}}
            <div class="max-w-xl mx-auto p-6">
                <div class="flex items-center gap-2 mb-6 mx-4">
                    <a href="{{ route('devices') }}" class="text-gray-500 text-4xl cursor-pointer font-bold flex items-center hover:scale-105"><</a>
                    <div class="text-2xl font-semibold flex items-center">Tambah Device</div>
                </div>

                <div class="bg-white shadow rounded-lg p-6">
                    <form method="POST" action="">
                        @csrf
                        <!-- Nama Device -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Device</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('name')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kode Device -->
                        <div class="mb-4">
                            <label for="code" class="block text-sm font-medium text-gray-700">Kode Device</label>
                            <input type="text" name="code" id="code" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('code')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Lantai -->
                        <div class="mb-4">
                            <label for="floor_id" class="block text-sm font-medium text-gray-700">Lantai</label>
                            <select name="floor_id" id="floor_id" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">-- Pilih Lantai --</option>
                                <option value="gedung-a">Lantai 2</option>
                                <option value="gedung-b">Lantai 5</option>
                                <option value="gedung-b">Lantai 8</option>
                                <option value="gedung-b">Lantai 9</option>
                            </select>
                        </div>

                        <!-- Tombol simpan -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 bg-[#125D72] text-white rounded-md hover:bg-[#125D72] transition hover:scale-105 duration-200">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- end create floor --}}
        </div>
    </div>
@endsection