@extends('layouts.app')

@section('payrollcontent')
    <div class="flex p-5">
        <div>
            <header>
            <h1 class="text-4xl font-bold font-sans leading-loose">
                Payroll
            </h1>
            <span class ="font-extralight">
                @php
                echo $ldate = date('D | M d, Y');
                @endphp
            </span>
            </header>
        </div>      
    </div>
    <hr class="border-gray-700 pr-5">
    @yield('content')

@endsection