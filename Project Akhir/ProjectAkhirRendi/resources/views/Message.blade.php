@extends('Layout.Users')
@section('content')
    <div class="flex justify-center my-20 px-4">
        <div class="bg-gray-800 bg-opacity-80 w-full sm:max-w-[500px] sm:min-w-[500px] rounded-lg text-white sm:mx-auto p-6 sm:p-10 space-y-4">
            <p class="text-center font-bold text-xl sm:text-3xl">{{ $message }}</p>
        </div>
    </div>
@endsection