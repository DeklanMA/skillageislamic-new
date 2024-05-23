<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 dark:bg-gray-800">

    {{-- Header --}}
    @include('partials.__header')

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        @include('partials.__sidebar')

        <x-dashboard.sidebar.backdrop />
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                @yield('admin')
            </main>



        </div>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
        @stack('scripts')
</body>

</html>
