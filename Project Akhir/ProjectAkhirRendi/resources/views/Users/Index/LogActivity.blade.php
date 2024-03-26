@extends('Layout.AuthenticatedUser')
@section('content')
    <div class="p-3">
        <div class="rounded-lg text-white min-h-100 bg-gray-900 bg-opacity-80 p-5 rounded-xl space-y-2 w-full font-sans min-h-[500px]">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center">Log Activity</h1>
            <div class="realtive overflow-x-auto min-h-[400px] ">
                    <table class="w-full  text-[11px] sm:text-sm ">
                        <thead class="border">
                            <tr class="uppercase font-bold text-white">
                                <th rowspan="2" class="sm:py-2 border-t border-r w-[40px] px-4">No</th>
                                <th rowspan="2" class="sm:py-2 border-t border-r px-6 w-[600px]">Activity</th>
                                <th colspan="2" class="sm:py-1 border-t px-6">Date & Time</th>
                            </tr>
                            <tr class="uppercase font-bold text-white">
                                <th class="sm:py-1 border-r border-t px-6">Date</th>
                                <th class="sm:py-1 border-t px-6">Time</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold border">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($logActivity as $logs)
                                <tr class="">
                                    <td class="border-t border-r border-b py-2 px-6">{{ $i }}</td>
                                    <td class="border-t border-r border-b py-2 px-6 text-start">{{ $logs->activity}}</td>
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