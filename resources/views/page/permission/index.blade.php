@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true}" class="flex min-h-screen">
        @include('layouts.sidebar')
        <div class="lg:w-10/12 w-full max-h-screen overflow-auto" :class="{ 'lg:w-10/12': sidebar, 'lg:w-full': !sidebar }">
            @include('layouts.header')

            {{-- table role --}}
            <div class="mt-8 px-6 py-4 mx-4 bg-white rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold mb-4">Daftar Permissions</h2>
                    <div>
                        <a href="{{ route('permissions.create') }}" class="p-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150 bg-[#125D72]">+ <span class="hidden md:inline">New</span></a>
                    </div>
                </div>
                <div class="overflow-x-auto bg-white rounded-lg shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">#</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama</th>
                                <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $dummyPermissions = [
                                    ['nama' => 'view dashboard'],
                                    ['nama' => 'view profile'],
                                    ['nama' => 'view role'],
                                    ['nama' => 'view permission'],
                                ];
                            @endphp

                            @foreach ($dummyPermissions as $index => $permission)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $permission['nama'] }}</td>
                                    <td class="px-4 py-2 flex items-center justify-center gap-4">
                                        <a href="" class="p-2 rounded-lg shadow-lg text-white hover:scale-105 duration-150 bg-yellow-500"><i class="fa-solid fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- end table role --}}

        </div>
    </div>
@endsection