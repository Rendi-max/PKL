@extends('Layout.AuthenticatedUser')
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
        <p class="text-xl sm:text-2xl font-bold">Link Data</p>
        <div class="w-full flex flex-wrap rounded-lg sm:px-10 py-5 items-center justify-evenly bg-gray-800">
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $user->links->count() }}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">Links Created</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $user->links()->join('link_clickeds', 'links.id', '=', 'link_clickeds.link_id')->count()}}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">Link Clickeds</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $user->links()->join('link_clickeds', 'links.id', '=', 'link_clickeds.link_id')->where('link_clickeds.user_id', '!=', null)->count()}}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">Unique Visitor</p>
            </div>
            <div class="text-center bg-gray-700 p-2 sm:p-5 rounded-lg min-w-[100px] sm:min-w-[200px] my-2">
                <div class="flex justify-center space-x-1 items-center">
                    <svg class="w-6 h-6 sm:w-10 sm:h-10 text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <p class="text-center font-bold text-xl sm:text-2xl">{{ $user->links()->join('link_clickeds', 'links.id', '=', 'link_clickeds.link_id')->where('link_clickeds.user_id', '=', null )->count()}}</p>
                </div>
                <p class="text-center font-bold text-[12px] sm:text-lg">Guest</p>
            </div>
        </div>
    </div>
    <div class="space-y-2">
        <p class="text-xl sm:text-2xl font-bold">Last Link Accessed</p>
        <div class="min-h-[300px] bg-gray-800 w-full rounded-lg p-4 relative overflow-x-auto">
            <table class="w-full text-white text-center">
                <tr class="border-b text-[12px] sm:text-sm">
                    <th class="py-2 px-6">User</th>
                    <th class="py-2 px-6">Link</th>
                    <th class="py-2 px-6">Server</th>
                </tr>
                @foreach ($user->links()->join('link_clickeds', 'links.id', '=', 'link_clickeds.link_id')->select('link_clickeds.*', 'links.short_link')->latest()->paginate(6) as $data)
                    <tr class=" border-b text-[12px] sm:text-sm">
                        <td class="py-2 px-6">{{ ($data->user_id == null) ? '(Guest)' : $data->user->email}}</td>
                        <td class="py-2 px-6"><a href="{{ url('/l=').$data->short_link }}" class="underline hover:text-blue-500">{{ url('/l=').$data->short_link }}</a></td>
                        <td class="py-2 px-6">{{ $data->ip}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection