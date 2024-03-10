@extends('Layout.Admin')
@section('content')
    <div class="flex flex-col space-y-5 p-3">
        @if (session()->has('succes'))
        <div class="p-4 text-green-500 border-2 border-green-600 rounded-xl">
            <div class="text-start font-bold">{{ session('succes') }}</div>
        </div>
        @endif
        <div class="rounded-lg text-white bg-white bg-opacity-30 p-5 w-full font-sans min-h-80 border-2 border-purple-800 hover:border-blue-800 flex flex-col space-y-4">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2">Admin</h1>
            <div class="realtive overflow-x-auto rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 min-h-44">
                    <table class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-[11px] sm:text-sm ">
                        <thead>
                            <tr class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                                <th class="sm:py-2 px-6">No</th>
                                <th class="sm:py-2 px-6">Name</th>
                                <th class="sm:py-2 px-6">Email</th>
                                <th class="sm:py-2 px-6">Status</th>
                                <th class="sm:py-2 px-6">Status Change</th>
                                <th class="sm:py-1 px-6">Option</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($dataAdmin as $users)
                                <tr class="">
                                    <td class="sm:py-1 px-6">{{ $i }}</td>
                                    <td class="sm:py-1 px-6">{{ $users->name }}</td>
                                    <td class="sm:py-1 px-6">{{ $users->email}}</td>
                                    <td class="sm:py-1 px-6">{{ $users->status }}</td>
                                    <td class="sm:py-1 px-6">
                                        <a href="change/{{ $users->id }}" class="{{ ($users->status == "is Active") ? 'bg-red-500 border-red-400 hover:bg-red-600 px-7' : 'bg-green-500 border-green-400 hover:bg-green-600' }} text-white font-bold px-5 py-1 rounded-lg border-2">{{ ($users->status == "is Active") ? 'Ban' : 'Active' }}</a>
                                    </td>
                                    <td class="flex justify-center space-x-1 sm:py-1 px-6">
                                        <x-edit route="usersManagement.show" id="{{ $users->email }}"/>
                                        <x-delete route="usersManagement.destroy" id="{{ $users->id }}" message="{{ $users->email }}" background="bg-gradient-to-br from-purple-600 to-blue-600 rounded-xl"/>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <div>
                {{$dataAdmin->onEachSide(1)->links('vendor.pagination.tailwind')}}
            </div>
            <div class="text-end mt-auto">
                <a href="{{ route('usersManagement.index') }}" class="bg-gradient-to-br from-purple-400 to-purple-700 shadow-xl backdrop-blur shadow-purple-500 py-1 px-4 text-white rounded-lg font-bold hover:bg-gradient-to-r">Add Admin</a>
            </div>
        </div>

        <div class="rounded-lg text-white bg-opacity-30 bg-white p-5 w-full font-sans min-h-80 border-2 border-purple-800 hover:border-blue-800 space-y-4">
            
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2">User</h1>
            <div class="realtive overflow-x-auto rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 min-h-44">
                    <table class="w-full text-[11px] sm:text-sm">
                        <thead class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                            <tr class="">
                                <th class="sm:py-2 px-6">No</th>
                                <th class="sm:py-2 px-6">Name</th>
                                <th class="sm:py-2 px-6">Email</th>
                                <th class="sm:py-2 px-6">Status</th>
                                <th class="sm:py-2 px-6">Status Change</th>
                            </tr>
                        </thead>
                        <tbody class="font-bold text-white text-center">
                            @php
                                $i = 1;
                            @endphp
                            @foreach($dataUser as $users)
                                <tr class="">
                                    <td class="sm:py-2 px-6">{{ $i }}</td>
                                    <td class="sm:py-2 px-6">{{ $users->name }}</td>
                                    <td class="sm:py-2 px-6">{{ $users->email}}</td>
                                    <td class="sm:py-2 px-6">{{ $users->status }}</td>
                                    <td class="sm:py-2 px-6">
                                        <a href="change/{{ $users->id }}" class="{{ ($users->status == "is Active") ? 'bg-red-500 border-red-400 hover:bg-red-600 px-7' : 'bg-green-500 border-green-400 hover:bg-green-600' }} text-white font-bold px-5 py-1 rounded-lg border-2">{{ ($users->status == "is Active") ? 'Ban' : 'Active' }}</a>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            {{$dataUser->onEachSide(1)->links('vendor.pagination.tailwind')}}
        </div>
    
    </div>
@endsection