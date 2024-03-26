@extends('Layout.Admin')
@section('content')
    <div class="flex p-3 ">
        @if (session()->has('succes'))
        <div class="p-4 text-green-500 border-2 border-green-600 rounded-xl">
            <div class="text-start font-bold">{{ session('succes') }}</div>
        </div>
        @endif
        <div class="rounded-lg text-white bg-opacity-80 bg-gray-800 p-5 w-full font-sans min-h-80 flex space-y-4 flex-col ">
            <div class="font-serif flex space-x-2 justify-end">
                <a href="/exportlinks" class="px-4 py-2 font-bold text-white rounded-lg bg-green-500">Export Excel</a>
                <a href="{{ route('badWords.index') }}" class="text-white bg-gradient-to-r from-gray-500 to-gray-600 rounded-lg font-bold py-2 px-3">Bad Words -> </a>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2 ">Data Link</h1>
            <div class="realtive overflow-x-auto min-h-[400px]">
                    <table class="w-full text-[11px] sm:text-sm border bg-gray-800">
                        <thead>
                            <tr class="uppercase font-bold text-white">
                                <th rowspan="2" class="w-[40px] border-r px-6">No</th>
                                <th rowspan="2" class="border-r px-6">Name User</th>
                                <th rowspan="2" class="border-r px-6">Short Link</th>
                                <th rowspan="2" class="border-r px-6">Original Link</th>
                                <th colspan="2" class=" sm:py-1 px-6">Created At</th>
                            </tr>
                            <tr class="uppercase font-bold text-white">
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
                                    <td class="border-t border-r border-b py-2 px-6 hover:text-blue-600"><a href="{{url('/l=').$link->short_link}}" target="_blank">{{url('/l=').$link->short_link}}</a></td>
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
        </div>
    </div>
@endsection