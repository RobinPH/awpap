<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AWPAP</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body data-theme="corporate">
    <livewire:navbar />

    <div class="min-h-screen hero bg-base-200">
        <div class="text-center hero-content">
            <div class="max-w-4xl">
                <h1 class="text-5xl font-bold">Every Pet Deserves a Loving Home. <span class="text-blue-600">Adopt</span>
                    a Pet Today</h1>
                <p class="py-6">Browse our available animals and learn more about the adoption process. Together, we
                    can <b>rescue, rehabilitate, and rehome pets in need</b>. Thank you for supporting our mission to
                    bring joy
                    to families through pet adoption.</p>
            </div>
        </div>
    </div>

    <livewire:footer />

    @livewireScripts
</body>

</html>
