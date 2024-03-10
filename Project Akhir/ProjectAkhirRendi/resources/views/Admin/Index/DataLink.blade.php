@extends('Layout.Admin')
@section('content')
    <div class="flex p-3">
        @if (session()->has('succes'))
        <div class="p-4 text-green-500 border-2 border-green-600 rounded-xl">
            <div class="text-start font-bold">{{ session('succes') }}</div>
        </div>
        @endif
        <div class="rounded-lg text-white bg-opacity-30 bg-white p-5 w-full font-sans min-h-80 border-2 border-purple-800 hover:border-blue-800 flex space-y-4 flex-col">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2 ">Data Link</h1>
            <div class="realtive overflow-x-auto min-h-44 bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl ">
                    <table class="w-full text-[11px] sm:text-sm ">
                        <thead>
                            <tr class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                                <th rowspan="2" class="w-[40px] border-r px-6">No</th>
                                <th rowspan="2" class="border-r px-6">Name User</th>
                                <th rowspan="2" class="border-r px-6">Short Link</th>
                                <th rowspan="2" class="border-r px-6">Original Link</th>
                                <th colspan="2" class=" sm:py-1 px-6">Created At</th>
                            </tr>
                            <tr class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                                <th class="border-r sm:py-1 border-t px-6">Date</th>
                                <th class=" sm:py-1 border-t px-6">Time</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($dataLinks as $link)
                                <tr class="">
                                    <td class="border-t border-r border-b py-2 px-6">{{ $i }}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ ($link->user_id == null) ? '(Guest)' : $link->user->name }}</td>
                                    <td class="border-t border-r border-b py-2 px-6 hover:text-blue-600"><a href="{{url('/')."/l=".$link->short_link}}" target="_blank">{{url('/')."/l=".$link->short_link}}</a></td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $link->original_link}}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $link->created_at->format('d M Y')}}</td>
                                    <td class="border-t border-b py-2 px-6">{{ $link->created_at->format('H:i A ')}}</td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            {{ $dataLinks->onEachSide(1)->links() }}
            {{-- {{$dataAdmin->links('vendor.pagination.tailwind')}} --}}
            {{-- <div class="text-end mt-auto">
                <a href="{{ route('usersManagement.index') }}" class="bg-gradient-to-br from-blue-300 to-blue-700 shadow-xl shadow-blue-500 py-1 px-4 text-white rounded-lg font-bold hover:bg-gradient-to-r">Add Admin</a>
            </div> --}}
        </div>
    </div>
@endsection