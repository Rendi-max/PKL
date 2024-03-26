@extends('Layout.Admin')
@section('content')
    <div class="flex flex-col space-y-5 p-3">
        <div class="rounded-lg text-white bg-gray-800 bg-opacity-80 p-5 w-full font-sans min-h-80 flex flex-col space-y-4">
            @if (session()->has('succes'))
            <div class="p-4 text-green-500 border-2 border-green-600 rounded-xl">
                <div class="text-start font-bold">{{ session('succes') }}</div>
            </div>
            @endif
            <div class="flex justify-end space-x-2">
                <a href="/exportuser" class="px-4 py-2 font-bold text-white rounded-lg bg-green-500">Export Excel</a>
                <a href="{{ route('usersManagement.index') }}" class="bg-gradient-to-br from-gray-400 to-gray-700 shadow-xl backdrop-blur shadow-gray-800 py-1 px-4 text-white rounded-lg font-bold hover:bg-gradient-to-r py-2">Add Admin</a>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2">User Data</h1>
            <div class="realtive overflow-x-auto min-h-[500px]">
                    <table class="w-full text-[11px] sm:text-sm border bg-gray-800">
                        <thead class="border">
                            <tr class="uppercase font-bold text-white">
                                <th class="sm:py-2 px-6 border-r">No</th>
                                <th class="sm:py-2 px-6 border-r">Name</th>
                                <th class="sm:py-2 px-6 border-r">Email</th>
                                <th class="sm:py-2 px-6 border-r">Status</th>
                                <th class="sm:py-2 px-6 border-r">Admin</th>
                                <th class="sm:py-1 px-6 border-r">Option</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold border">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($dataUser as $users)
                                <tr class="border">
                                    <td class="sm:py-1 px-6 border-r">{{ $i }}</td>
                                    <td class="sm:py-1 px-6 border-r">{{ $users->name }}</td>
                                    <td class="sm:py-1 px-6 border-r">{{ $users->email}}</td>
                                    <td class="sm:py-1 px-6 border-r">{{ $users->status}}</td>
                                    <td class="sm:py-1 px-6 border-r">{{ ($users->isAdmin == 1) ? 'Yes' : 'No' }}</td>
                                    <td class="flex justify-center space-x-1 sm:py-1 px-6">
                                        @if ($users->isAdmin == 1)
                                            <x-edit route="usersManagement.show" id="{{ $users->email }}"/>
                                            <x-delete route="usersManagement.destroy" id="{{ $users->id }}" message="{{ $users->email }}" background="bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl"/>
                                        @else
                                            <a href="change/{{ $users->id }}" class="{{ ($users->status == "is Active") ? 'bg-red-500 border-red-400 hover:bg-red-600 px-7' : 'bg-green-500 border-green-400 hover:bg-green-600' }} text-white font-bold px-5 py-1 rounded-lg border-2">{{ ($users->status == "is Active") ? 'Ban' : 'Active' }}</a>
                                        @endif
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
                {{$dataUser->onEachSide(1)->links('vendor.pagination.tailwind')}}
            </div>
        </div>
    </div>
@endsection