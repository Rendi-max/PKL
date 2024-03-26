<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/password.js') }}"></script>
</head>

<body class="bg-cover bg-fixed bg-[url(../assets/images/greyRose.jpg)] sm:bg-[url(../assets/images/images.jpg)] flex flex-col ">
    @auth
        <x-sidebar name="{{ $user->name }}" email="{{ $user->email }}" link="{{$links}}" />
    @else
        <x-sidebar name="Rendi" email="Rendi@gmail.com" link="{{$links}}" />
    @endauth
    <div class="sm:ml-64 min-h-screen">
        <div class="p-4">
            @yield('content')
        </div>
    </div>
    <x-footer background="bg-gray-800 text-white mt-auto border-t-2 border-gray-500"/>
</body>

</html>
