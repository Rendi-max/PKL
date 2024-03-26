@extends('Layout.Admin')
@section('content')
    
<div class="p-5 min-h-screen bg-gray-800 bg-opacity-80 rounded-lg space-y-5 text-white">
    <div class="bg-gray-800 w-full flex min-h-[100px] rounded-lg space-x-4 p-4">
            <img src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png" alt="" class="items-center my-auto w-[40px] h-[40px] sm:w-[60px] sm:h-[60px] rounded-full">
            <div class="space-y-2 px-2 border-l-2 w-full">
                <p class="text-sm sm:text-xl font-bold">{{ $user->name }}</p>
                <p class="border w-full"></p>
                <p class="text-[11px] sm:text-lg font-bold">{{ $user->email }}</p>
            </div>
    </div>
    <div class="space-y-2">
        <p class="text-xl sm:text-2xl font-bold">All Data</p>
        <div class="w-full flex flex-wrap rounded-lg sm:px-10 py-5 items-center justify-evenly bg-gray-800">
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $data->count() }}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">User</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $link->count() }}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">Links Created</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $data->where('status', 'is Active')->count() }}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">User Allowed</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $data->where('status', 'is Banned')->count() }}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">User Banned</p>
            </div>
        </div>
    </div>
    <div class="space-y-2">
        <p class="text-xl sm:text-2xl font-bold">New Updates</p>
        <div class="min-h-[300px] bg-gray-800 w-full flex min-h-[100px] rounded-lg p-4">
            <div class="flex flex-col sm:flex-row justify-start sm:space-x-3 space-y-3 sm:space-y-0">
                <div class="min-h-[200px] w-[215px] bg-gray-600 rounded-lg p-5 space-y-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOCyBqnI8hBWKlwdlNDpF6YqonZPsitxrQPg&s" alt="">
                    <p class="text-white text-[11px] sm:text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, velit minima vel dicta nemo maxime minus repellat hic sequi voluptates!</p>
                </div>
                <div class="min-h-[200px] w-[215px] bg-gray-600 rounded-lg p-5 space-y-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOCyBqnI8hBWKlwdlNDpF6YqonZPsitxrQPg&s" alt="">
                    <p class="text-white text-[11px] sm:text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, velit minima vel dicta nemo maxime minus repellat hic sequi voluptates!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection