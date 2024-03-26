@extends('Layout.AuthenticatedUser')
@section('content')
    <div class="min-h-80 bg-gray-900 bg-opacity-80 p-3 sm:px-8 rounded-xl space-y-3 ">
        <a href="/links" class="bg-gray-700 rounded-lg font-bold px-2 py-1 text-sm sm:text-lg sm:hidden"><- Back</a>
        <h1 class="text-center font-bold text-xl sm:text-3xl">Create Link</h1>
        @if (session()->has('error'))
            <div class="p-3 text-red-600 font-bold border-2 border-red-600 rounded-xl">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('linksManagement.store') }}" method="post">
            @csrf
            <div class="space-y-2 text-gray-600">
                <div class="text-sm sm:text-lg">
                    <p class="text-white">Custom Short Link (Optional)</p>
                    <input type="text" name="short_link" id="" class="w-full rounded-lg @error('short_link') is-invalid @enderror" placeholder="Custom short link" value="{{ old('short_link') }}">
                    @error('short_link')
                        <p class="text-red-400 text-[11px] sm:text-[13px]">{{ $message }}</p>
                    @enderror
                </div>
                <div class="class text-sm sm:text-lg">
                    <p class="text-white">Original Link</p>
                    <textarea name="original_link" id="" class="w-full min-h-[100px] rounded-lg p-2 text-[16px] @error('original_link') is-invalid @enderror" placeholder="Original link" required>{{ old('original_link') }}</textarea>
                    @error('original_link')
                        <p class="text-red-400 text-[11px] sm:text-[13px]">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <div class="text-sm sm:text-lg sm:w-[440px]">
                        <p class="text-white">Password (Optional)</p>
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
                            <p class="text-red-400 text-[11px] sm:text-[13px]">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-sm sm:text-lg ">
                        <p class="text-white">Expired Time (Optional)</p>
                        <input type="datetime-local" name="expired_at" id="" class="w-full sm:w-[440px] rounded-lg">
                    </div>
                </div>
                <div class="text-sm text-center sm:text-end">
                    <button type="submit" class="font-bold text-white bg-gradient-to-r from-green-400 to-green-700 rounded-xl px-5 py-2 border-2 border-green-600">Add Link</button>
                </div>
            </div>
        </form>
    </div>
@endsection