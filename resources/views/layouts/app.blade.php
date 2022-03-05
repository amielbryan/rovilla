<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rovilla</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200 ">
    <div class="flex w-full min-h-screen font-sans ">
        <div class="w-52 min-h-screen bg-gray-800 flex flex-col">
            <div class="px-3 pt-8">
                <div class="flex items-center justify-between">
                    <ul>
                        <li class="relative text-gray-500">
                            <a href="{{ route('payroll') }}" class="inline-block w-full pl-10 pr-10 py-2 text-xl hover:bg-gray-800 rounded">
                                Payroll
                            </a>
                        </li>
                        <li class="relative text-gray-500">
                            <a href="{{ route('dashboard') }}" class="inline-block w-full pl-10 pr-10 py-2 text-xl hover:bg-gray-800 rounded">
                                Dashboard
                            </a>
                        </li>
                        <li class="relative text-gray-500">
                            <a href="{{ route('position') }}" class="inline-block w-full pl-10 pr-10 py-2 text-xl hover:bg-gray-800 rounded">
                                Position
                            </a>
                        </li>
                        <li class="relative text-gray-500">
                            <a href="{{ route('register') }}" class="inline-block w-full pl-10 pr-10 py-2 text-xl hover:bg-gray-800 rounded">
                                Register
                            </a>
                        </li>
                        <li class="relative text-gray-500">
                            <a href="{{ route('personnel') }}" class="inline-block w-full pl-10 pr-10 py-2 text-xl hover:bg-gray-800 rounded">
                                Personnel
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <main class="flex flex-col w-full flex-1 ">
                @yield('payrollcontent')
        </main>
        
    </div>
    
    
</body>
</html>