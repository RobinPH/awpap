<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="assets/logowhite.png" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>AWPAP</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body data-theme="corporate" class="font-[Poppins]">


    {{--FOR USERS LAYOUT--}}
    <livewire:navbar/>
        {{ $slot }}
    <livewire:footer/>


    {{--FOR ADMINS LAYOUT
    <div class="flex">
        <livewire:admin-navbar/>
        <div class="flex flex-grow flex-col">
            <livewire:admin-topbar/>
            {{ $slot }}
        </div>
    </div>--}}


    @livewireScripts
</body>

</html>
