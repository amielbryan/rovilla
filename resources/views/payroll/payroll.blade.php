@extends('layouts.app')

@section('payrollcontent')

<nav class="bg-gray-800">
    <div class="pl-10 inset-x-0 pb-2">
    <h1 class="text-4xl font-bold font-sans leading-loose text-white inline-flex pr-5">Payroll</h1>
    <div class="inline text-white space-x-4 ">
        <ul class="inline">
            <li class="inline">
            <a href="{{ route('dashboard') }}" class="{{request()->is('dashboard') ? 'active' : ''}}text-gray-300 hover:bg-gray-700 hover:text-white px-3 duration-500 py-2 rounded-md text-sm font-medium">Dashboard</a>
            </li>
            <li class="inline">
            <a href="{{ route('position') }}" class="{{request()->is('position') ? 'active' : '' }}text-gray-300 hover:bg-gray-700 hover:text-white px-3 duration-500 py-2 rounded-md text-sm font-medium">Position</a>
            </li>
            <li class="inline">
            <a href="{{ route('personnel') }}" class="{{request()->is('personnel') ? 'active' : '' }}text-gray-300 hover:bg-gray-700 hover:text-white px-3  duration-500 py-2 rounded-md text-sm font-medium">Personnel</a>
            </li>
            <li class="inline">
            <a href="#" class="{{request()->is('sites') ? 'active' : '' }}text-gray-300 hover:bg-gray-700 hover:text-white px-3 duration-500 py-2 rounded-md text-sm font-medium">Site</a>
            </li>
            <li class="inline">
            <a href="#" class="{{request()->is('reports') ? 'active' : '' }}text-gray-300 hover:bg-gray-700 hover:text-white px-3 duration-500 py-2 rounded-md text-sm font-medium">Reports</a>
            </li>
        </ul>
    </div>
    <p class=" inline content-right text-gray-300 "> @php echo $ldate = date('D | M d, Y'); @endphp</p>
</nav>

    
    @yield('content')

@endsection