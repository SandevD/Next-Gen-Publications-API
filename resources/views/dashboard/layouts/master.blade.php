<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="/assets/css/app.css"> --}}
    @include('dashboard.layouts.css')

    @hasSection('head')
        @yield('head')
    @else
        <title>NEXTGEN Publication - Dashboard</title>
    @endif
</head>

<body>
    <div class="" style="">
        <div class="min-h-[640px]">

            <!--
        This example requires updating your template:

        ```
        <html class="h-full bg-gray-100">
        <body class="h-full">
        ```
        -->
            <div x-data="{ open: false }" @keydown.window.escape="open = false">

                @include('dashboard.layouts.side-nav')
                <div class="md:pl-64 flex flex-col flex-1">

                    @include('dashboard.layouts.top-nav')


                    <main>
                        @yield('admin-content')

                    </main>
                </div>
            </div>

        </div>
    </div>

    @include('dashboard.layouts.js')

</body>

</html>
