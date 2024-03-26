@extends('Layout.Admin')
@section('content')
    <div class="flex p-3">
        <div class="rounded-lg text-white bg-opacity-80 bg-gray-800 p-5 w-full font-sans min-h-80 flex space-y-4 flex-col">
            @if (session()->has('succes'))
            <div class="p-4 text-green-500 border-2 border-green-600 rounded-xl">
                <div class="text-start font-bold">{{ session('succes') }}</div>
            </div>
            @endif
            <div class="font-serif">
                <a href="linksData" class="text-white bg-gradient-to-r from-gray-500 to-gray-600 rounded-lg font-bold py-1 px-3"><- Back</a>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-center border-b-2 ">Disable Words Data</h1>
            <div class="">
                <form action="{{ route('badWords.store') }}" method="post">
                    @csrf
                    <div class="flex space-x-2">
                        <input type="text" class="w-full rounded-lg text-black @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" placeholder="Add bad word ..." required>
                        <button type="submit" class=" bg-gradient-to-r from-green-400 to-green-600 rounded-lg px-4 py-1 font-bold">Add</button>
                    </div>
                    @error('text')
                        <p class="text-red-400 text-[11px] font-bold">{{ $message }}</p>
                    @enderror
                </form>
            </div>
            <div class="realtive overflow-x-auto ">
                    <table class="w-full text-[11px] sm:text-sm border bg-gray-800">
                        <thead>
                            <tr class="uppercase font-bold text-white">
                                <th class="w-[40px] border-r sm:py-2 px-6">No</th>
                                <th class="border-r sm:py-2 px-6">Words</th>
                                <th class="border-r sm:py-2 px-6">Option</th>
                            </tr>
                        </thead>
                        <tbody class="text-white text-center font-bold">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($badWords as $words)
                                <tr class="">
                                    <td class="border-t border-r border-b py-2 px-6">{{ $i }}</td>
                                    <td class="border-t border-r border-b py-2 px-6">{{ $words->text }}</td>
                                    <td class="border-t border-r border-b py-2 px-6 flex justify-center space-x-1">
                                        <x-delete route="badWords.destroy" id="{{ $words->id }}" message="{{ $words->text }}" background="bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl"/>
                                    </td>

                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
            </div>
            {{ $badWords->onEachSide(1)->links() }}
        </div>
    </div>
@endsection