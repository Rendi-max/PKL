<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover" style="background-image: url('background.jpg')">
    <nav class="bg-purple-700 z-50">
        <div class="mx-auto max-w-7xl px-2 space-x-2 sm:px-6 lg:px-8">
           <div class="relative flex h-16 items-center sm:justify-end font-sans">
               <div class="flex me-auto space-x-3">
                    <h2 class="text-white text-[15px] sm:text-2xl items-center font-extrabold me-3">Cihuyy</h2>
                    <a href="dashboard" class="items-center text-white font-bold text-decoration-none text-[11px] sm:text-lg">Voice to text</a>
                    <a href="record" class="items-center text-white font-bold text-decoration-none text-[11px] sm:text-lg ">Record</a>
                </div>
                <form action="api/logout" method="post">
                    <button type="submit" class="jm bg-blue-400 font-bold px-4 py-1 rounded-xl hover:bg-blue-500">Logout</button>
                </form>
           </div>
        </div>
    </nav>
    @yield('konten')
</body>
</html>