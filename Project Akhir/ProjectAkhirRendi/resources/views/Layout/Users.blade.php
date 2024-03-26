<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('js/password.js') }}"></script>
</head>
<body id="home" class="bg-cover bg-fixed bg-[url(../assets/images/greyRose.jpg)] sm:bg-[url(../assets/images/images.jpg)]">
    <x-navbar />
    <div class="flex flex-col space-y-2">
        <div class="min-h-screen space-y-4">
            @yield('content')
        </div>
        <x-footer background="bg-gradient-to-r sticky from-gray-500 to-gray-700 mt-auto text-white"/>
    </div>
</body>
</html>