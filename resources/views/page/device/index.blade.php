@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- table floor --}}
            <div class="mt-8 px-6 py-4 mx-4 bg-white rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold mb-4">Daftar Perangkat</h2>
                    <div>
                        <a href="{{ route('devices.create') }}" class="p-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150 bg-[#125D72]">+ <span class="hidden md:inline">New</span></a>
                    </div>
                </div>
                <div class="overflow-x-auto bg-white rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">#</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Kode</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Lantai</th>
                                <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $dummyDevices = [
                                    ['nama' => 'Ruang Rapat 1', "kode" => '12345', "lantai" => "Lantai 2"],
                                    ['nama' => 'Ruang Rapat 2', "kode" => '23456', "lantai" => "Lantai 5"],
                                    ['nama' => 'Ruang Rapat 3', "kode" => '34567', "lantai" => "Lantai 8"],
                                    ['nama' => 'Ruang Rapat 4', "kode" => '45678', "lantai" => "Lantai 9"],
                                ];
                            @endphp

                            @foreach ($dummyDevices as $index => $device)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $device['nama'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $device['kode'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $device['lantai'] }}</td>
                                    <td class="px-4 py-2 flex items-center justify-center gap-4">
                                        <a href="{{ route('devices.show', ['id' => 1]) }}" class="p-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150 bg-blue-500"><i class="fa-solid fa-eye"></i></a>
                                        <a href="" class="p-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150 bg-yellow-500"><i class="fa-solid fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- end table floor --}}

        </div>
    </div>
@endsection