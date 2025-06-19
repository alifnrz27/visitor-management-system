@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- table history visit --}}
            <div class="mt-8 px-6 py-4 mx-4 mb-10 bg-white rounded-lg shadow-xl">
                <h2 class="text-lg font-semibold mb-4">History Pengunjung Terakhir</h2>
                <div class="overflow-x-auto bg-white rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">#</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tujuan</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Waktu Masuk</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $dummyVisits = [
                                    ['nama' => 'Budi Santoso', 'tujuan' => 'Meeting', 'waktu' => '2025-06-18 09:10', 'status' => 'Selesai'],
                                    ['nama' => 'Siti Aminah', 'tujuan' => 'Maintenance', 'waktu' => '2025-06-18 10:15', 'status' => 'Menunggu'],
                                    ['nama' => 'Doni Pratama', 'tujuan' => 'Training', 'waktu' => '2025-06-18 08:45', 'status' => 'Selesai'],
                                    ['nama' => 'Rina Marlina', 'tujuan' => 'Interview', 'waktu' => '2025-06-18 11:00', 'status' => 'Menunggu'],
                                    ['nama' => 'Ahmad Fauzi', 'tujuan' => 'Konsultasi', 'waktu' => '2025-06-18 07:30', 'status' => 'Selesai'],
                                ];
                            @endphp

                            @foreach ($dummyVisits as $index => $visit)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $visit['nama'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $visit['tujuan'] }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ \Carbon\Carbon::parse($visit['waktu'])->format('d M Y H:i') }}</td>
                                    <td class="px-4 py-2 text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                            {{ $visit['status'] === 'Selesai' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $visit['status'] }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end table history visit --}}

        </div>
    </div>
@endsection