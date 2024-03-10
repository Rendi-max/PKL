@extends('Layout.Admin')
@section('content')
    <div class="rounded-lg bg-white p-5 w-full font-sans min-h-80 border-2 border-purple-800 hover:border-blue-800">
        <div class="space-x-2 py-2">
            <a href="usersData" class="bg-purple-600 rounded-lg px-2 py-1 text-white font-bold flex text-[12px] space-x-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                </svg>
                <span class="mt-0">Back</span>
            </a>
        </div>

        @if (session()->has('error'))
        <div class="p-4 text-red-500 border-2 border-red-600 rounded-xl">
            <div class="text-start font-bold">{{ session('error') }}</div>
        </div>
        @endif

        <div class="py-5 font-sans">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center px-5 border-b-2">Create Admin</h1>
            <form action="{{ route('usersManagement.store') }}" method="post">
                @csrf
                <div class="space-y-2 font-sans">
                    <div class="">
                        <span class="font-bold text-[12px] sm:text-sm">Name</span>
                        <input type="text" name="name" class="w-full rounded-lg border-2 border-purple-600 text-purple-900 focus:outline-none focus:border-purple-900 hover:border-blue-600 @error('name') is-invalid @enderror"  placeholder="Input name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <p class="text-red-600 font-bold text-[12px]">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <span class="font-bold text-[12px] sm:text-sm">Email</span>
                        <input type="email" name="email" class="w-full rounded-lg border-2 border-purple-600 text-purple-900 focus:outline-none focus:border-purple-900 hover:border-blue-600 @error('email') is-invalid @enderror"  placeholder="Input email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-600 font-bold text-[12px]">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <span class="font-bold text-[12px] sm:text-sm">Password</span>
                        <input type="password" name="password" class="w-full rounded-lg border-2 border-purple-600 text-purple-900 focus:outline-none focus:border-purple-900 hover:border-blue-600 @error('password') is-invalid @enderror"  placeholder="Input password" required>
                        @error('password')
                            <p class="text-red-600 font-bold text-[12px]">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center sm:text-end">
                        <button type="submit" class="shadow-xl shadow-purple-500 bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-br focus:outline-none focus:border-purple-400 rounded-lg px-4 py-1 text-white font-bold">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection