@extends('layouts.base')

@section('body')
    <div class="bg-gray-100 min-w-screen min-h-screen flex flex-col">
        @yield('content')
    
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
