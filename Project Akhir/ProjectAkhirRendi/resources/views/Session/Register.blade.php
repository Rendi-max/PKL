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
    <script src="{{ asset('js/password.js') }}"></script>
</head>
<body class="bg-cover bg-fixed bg-[url(../assets/images/greyRose.jpg)] sm:bg-[url(../assets/images/images.jpg)]">
    <div class="flex flex-col justify-center min-h-screen">
        <div class="items-center">
            <form action="" method="post">
                <div class="flex justify-center px-6 sm:px-0 font-serif">
                    <div class="items-center bg-gray-800 w-full sm:w-[500px] min-h-[350px] rounded-xl space-y-4  px-3 sm:border-0 bg-opacity-80 text-white backdrop-blur">
                        @csrf
                        <h1 class="text-center font-bold text-2xl sm:text-4xl border-b-2 py-2">Register</h1>
                        <div class="">
                            <h1>Name</h1>
                            <input type="text" name="name" class="w-full text-gray-600 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('name') is-invalid @enderror" placeholder="Name"  value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <p class="text-red-500 text-[11px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="">
                            <h1>Email</h1>
                            <input type="email" name="email" class="w-full text-gray-600 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-500 text-[11px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:justify-between">
                            <div class="sm:w-[230px]">
                                <h1>Password</h1>
                                <div class="relative text-gray-800">
                                    <input type="password" name="password" id="password" placeholder="Password" class="w-full py-2 px-3 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('password') is-invalid @enderror">
                                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 bg-transparent focus:outline-none">
                                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 8v4M6 8v4"/>
                                        </svg>
                                    </button>
                                </div>
                                @error('password')
                                    <p class="text-red-500 text-[11px] sm:w-[200px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:w-[230px]">
                                <h1>Password Confirmation</h1>
                                <div class="relative text-gray-800">
                                    <input type="password" name="passwordConfirmation" id="password2" placeholder="Password" class="w-full py-2 px-3 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('passwordConfirmation') is-invalid @enderror">
                                    <button type="button" id="togglePassword2" class="absolute inset-y-0 right-0 flex items-center px-3 bg-transparent focus:outline-none">
                                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 8v4M6 8v4"/>
                                        </svg>
                                    </button>
                                </div>
                                @error('passwordConfirmation')
                                    <p class="text-red-500 text-[11px] w-full sm:w-[200px]">{{ $message }}</p>
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