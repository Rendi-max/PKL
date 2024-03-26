@extends('Layout.Admin')
@section('content')
    <div class="p-3">
        <div class=" bg-gray-800 bg-opacity-80  p-5 w-full font-sans min-h-[500px] text-white space-y-4 rounded-xl ">
            <div class="text-end">
                <a href="/exportlog" class="px-4 py-2 font-bold text-white rounded-lg bg-green-500">Export Excel</a>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2">Log Activity</h1>
            <div class="realtive overflow-x-auto min-h-[400px]">
                    <table class="w-full text-[11px] sm:text-sm border bg-gray-800">
                        <thead class="border">
                            <tr class="uppercase font-bold text-white">
                                <th rowspan="2" class="sm:py-2 border-r border-t w-[40px] px-4">No</th>
                                <th rowspan="2" class="sm:py-2 border-r border-t px-6  w-[150px]">Username</th>
                                <th rowspan="2" class="sm:py-2 border-r border-t px-6  w-[500px]">Activity</th>
                                <th colspan="2" class="sm:py-1 border-r border-t  px-6">Date & Time</th>
                            </tr>
                            <tr class="uppercase font-bold text-white">
                                <th class="sm:py-1 border-r border-t px-6">Date</th>
                                <th class="sm:py-1 border-r border-t px-6">Time</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold border">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($logActivity as $logs)
                                <tr class="">
                                    <td class="py-2 border-r border-t px-6">{{ $i }}</td>
                                    <td class="py-2 border-r border-t px-6 text-start">{{ $logs->user->name}}</td>
                                    <td class="py-2 border-r border-t px-6 text-start">{{ $logs->activity}}</td>
                                    <td class="py-2 border-r border-t px-6">{{ $logs->created_at->format('d M Y')}}</td>
                                    <td class="py-2 border-r border-t px-6">{{ $logs->created_at->format('H:i A ')}}</td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            {{$logActivity->onEachSide(1)->links('vendor.pagination.tailwind')}}
        </div>
    </div>
@endsection