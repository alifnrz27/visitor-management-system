@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- grid cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-sm text-gray-500 mb-1">Total Users</h2>
                    <p class="text-2xl font-bold text-gray-800">1,234</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-sm text-gray-500 mb-1">Total Visits</h2>
                    <p class="text-2xl font-bold text-gray-800">567</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-sm text-gray-500 mb-1">Active Devices</h2>
                    <p class="text-2xl font-bold text-gray-800">89</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-sm text-gray-500 mb-1">Pending Reports</h2>
                    <p class="text-2xl font-bold text-gray-800">12</p>
                </div>
            </div>
            {{-- end grid cards --}}

            {{-- charts --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                <!-- Grafik Visitor External -->
                <div class="bg-white shadow rounded p-4 h-[300px]">
                    <h2 class="text-lg font-semibold mb-2">Grafik Visitor External</h2>
                    <canvas id="lineChart" class="w-full h-full"></canvas>
                </div>

                <!-- Grafik Visitor Internal -->
                <div class="bg-white shadow rounded p-4 h-[300px]">
                    <h2 class="text-lg font-semibold mb-2">Grafik Visitor Internal</h2>
                    <canvas id="barChart" class="w-full h-full"></canvas>
                </div>
            </div>
            {{-- end charts --}}

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


<script>
    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    const options = {
        responsive: true,
        maintainAspectRatio: false, // penting agar tinggi mengikuti div
        plugins: {
            legend: { display: true },
        },
        scales: {
            y: { beginAtZero: true }
        }
    };


    // Data untuk grafik garis
    const lineData = {
        labels: labels,
        datasets: [{
            label: 'Visitor Eksternal',
            data: [65, 59, 80, 81, 56, 55],
            borderColor: 'rgb(59, 130, 246)', // blue-500
            backgroundColor: 'rgba(59, 130, 246, 0.2)',
            tension: 0.3,
            fill: true
        }]
    };

    // Data untuk grafik batang
    const barData = {
        labels: labels,
        datasets: [{
            label: 'Visitor Internal',
            data: [45, 79, 60, 71, 86, 65],
            backgroundColor: 'rgba(16, 185, 129, 0.7)', // green-500
            borderRadius: 6
        }]
    };

    // Inisialisasi grafik
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: lineData,
        options: options
    });

    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: barData,
        options: options
    });
</script>

@endsection