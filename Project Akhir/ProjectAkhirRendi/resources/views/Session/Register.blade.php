<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="bg-cover bg-[url(../assets/images/nebula.jpg)] sm:bg-[url(../assets/images/Night.jpg)]">
    <div class="flex flex-col justify-center min-h-screen">
        <div class="items-center">
            <form action="" method="post">
                <div class="flex justify-center px-6 sm:px-0 font-serif">
                    <div class="items-center bg-white w-full sm:w-[500px] min-h-[350px] rounded-xl space-y-4 border-2 border-purple-600 hover:border-blue-600 px-3 sm:border-0">
                        @csrf
                        <h1 class="text-center font-bold text-2xl sm:text-4xl border-b-2 py-2">Register</h1>
                        <div class="">
                            <h1>Name</h1>
                            <input type="text" name="name" class="w-full rounded-lg @error('name') is-invalid @enderror" placeholder="Name"  value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <p class="text-red-600 text-[11px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="">
                            <h1>Email</h1>
                            <input type="email" name="email" class="w-full rounded-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-600 text-[11px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:justify-between">
                            <div class="">
                                <h1>Password</h1>
                                <input type="password" name="password" class="w-full sm:w-[230px] rounded-lg @error('password') is-invalid @enderror" placeholder="Password" required>
                                @error('password')
                                    <p class="text-red-600 text-[11px] sm:w-[200px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <h1>Password Confirmation</h1>
                                <input type="password" name="passwordConfirmation" class="w-full sm:w-[230px] rounded-lg @error('passwordConfirmation') is-invalid @enderror" placeholder="Password Confirmation" required>
                                @error('passwordConfirmation')
                                    <p class="text-red-600 text-[11px] w-full sm:w-[200px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        @if (session()->has('error'))
                            <div class="text-red-500">
                                <div class="text-start">{{ session('error') }}</div>
                            </div>
                        @endif
                        <div class="text-end">
                            <a href="/login" class=" font-bold text-blue-600 underline decoration-1">Back to login -></a>
                        </div>
                        <div class="border-t-2 py-4">
                            <button type="submit" class="w-full text-white font-bold py-2 rounded-lg bg-gradient-to-br from-blue-300 to-blue-600 hover:bg-gradient-to-r shadow-lg shadow-blue-600">Register</button>
                        </div>
                    </div>
                </div>
            </form>
         </div>
    </div>
</body>
</html>