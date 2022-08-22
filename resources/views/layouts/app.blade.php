<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        var pusher = new Pusher("{{config('broadcasting.connections.pusher.key')}}", {
            cluster: 'sa1'
        });

        var channel = pusher.subscribe('poll-channel');
        channel.bind('vote-event', function(data) {});
    </script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-800">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
        @include('layouts.navigation')
        <x-message />
        <!-- Page Content -->

        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="my-6 text-center text-lg text-black dark:text-white">Marlon Veiga @ {{date('Y')}}</footer>
</body>

</html>