@extends('Layout.Admin')
@section('content')
    <div class="p-3">
        <div class="rounded-lg text-white bg-opacity-30 bg-white p-5 w-full font-sans min-h-[500px] border-2 border-purple-800 hover:border-blue-800 space-y-4">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2">Log Activity</h1>
            <div class="realtive overflow-x-auto rounded-xl min-h-[400px] bg-gradient-to-r from-purple-600 to-blue-600">
                    <table class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-[11px] sm:text-sm ">
                        <thead>
                            <tr class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                                <th rowspan="2" class="sm:py-2 border-t border-r w-[40px] px-4">No</th>
                                <th rowspan="2" class="sm:py-2 border-t border-r px-6">Name</th>
                                <th rowspan="2" class="sm:py-2 border-t border-r px-6">Activity</th>
                                <th colspan="2" class="sm:py-1 border-t px-6">Created At</th>
                            </tr>
                            <tr class="uppercase bg-gradient-to-r from-purple-500 to-blue-500 font-bold text-white">
                                <th class="sm:py-1 border-r border-t px-6">Date</th>
                                <th class="sm:py-1 border-t px-6">Time</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($logActivity as $logs)
                                <tr class="">
                                    <td class="border-t border-r border-b py-2 px-6">{{ $i }}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $logs->user->name }}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $logs->activity}}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $logs->created_at->format('d M Y')}}</td>
                                    <td class="border-t border-b py-2 px-6">{{ $logs->created_at->format('H:i A ')}}</td>
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