@extends('Layout.Users')
@section('content')
    <div class="flex flex-col min-h-screen justify-center px-4">
        <div class="bg-gray-800 bg-opacity-80 w-full min-h-[200px] sm:max-w-[500px] sm:min-w-[500px] rounded-lg text-white sm:mx-auto p-6 sm:p-10 space-y-4">
            <p class="text-center font-bold text-xl sm:text-3xl">Password</p>
            <form action="/password={{ $id }}" method="post">
                @csrf
                <div class="flex flex-col sm:flex-row sm:space-x-1">
                    <div class="relative text-gray-800 w-full">
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full py-2 px-3 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('password') is-invalid @enderror" required>
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 bg-transparent focus:outline-none">
                            <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 8v4M6 8v4"/>
                            </svg>
                        </button>
                    </div>
                    <button type="submit" class="font-bold bg-green-400 rounded-lg px-3 py-2">Submit</button>
                </div>
                @if (session()->has('error'))
                    <p class="text-red-400 font-bold text-[12px] sm:text-sm">{{ session('error') }}</p>
                @endif
            </form>
        </div>
    </div>
@endsection