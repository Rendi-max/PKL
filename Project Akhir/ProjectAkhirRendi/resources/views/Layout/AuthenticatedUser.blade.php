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
    <x-sideuser link="{{$links}}"/>
    <div class="sm:ml-64 text-white min-h-screen">
        <h1 class="sticky top-0 font-bold w-full p-4 bg-gray-900 bg-opacity-80 hidden sm:block underline">{{ $links }}</h1>
        <div class="p-4 sm:p-12">
            @yield('content')
        </div>
    </div>
    <x-footer background="bg-gray-800 text-white z-50 sm:ml-64"/>
</body>
</html>