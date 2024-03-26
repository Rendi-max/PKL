@extends('Layout.AuthenticatedUser')
@section('content')
    <div class="min-h-80 bg-gray-900 bg-opacity-80 p-5 rounded-xl space-y-2">
        <div class="flex space-x-2 justify-end">
                <a href="/exportlink" class="bg-green-400 font-bold rounded-lg py-2 px-4 text-[11px] sm:text-sm">Export Excell</a>
                <a href="{{ route('linksManagement.index') }}" class="bg-gray-800 font-bold rounded-lg py-2 px-4 text-[11px] sm:text-sm">Create Link</a>
        </div>
        <div class="space-y-4">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                @foreach ($dataLink as $linkData)
                    <h2 id="accordion-flush-heading-{{ $linkData->id }}">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-white gap-3 px-2 bg-gradient-to-r from-gray-800 to-gray-900" data-accordion-target="#accordion-flush-body-{{ $linkData->id }}" aria-expanded="false" aria-controls="accordion-flush-body-{{ $linkData->id }}">
                            <span><a href="{{url('/l=').$linkData->short_link}}" target="_blank" class="hover:text-blue-400 hover:underline text-[12px] sm:text-sm">{{url('/l=').$linkData->short_link}}</a></span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-{{ $linkData->id }}" class="hidden" aria-labelledby="accordion-flush-heading-{{$linkData->id}}">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-gray-700 to-gray-800 px-2">
                        <div class="flex flex-col">
                            <p class="text-[12px] sm:text-sm">Target link   : {{ $linkData->original_link }}.</p>
                            <p class="text-[12px] sm:text-sm">Passsword     : {{ ($linkData->password != null) ? 'true' : 'false' }}.</p>
                            <p class="text-[12px] sm:text-sm">Expired At    : {{ ($linkData->expired_at != null) ? Carbon\Carbon::parse($linkData->expired_at)->format('d M y, h:m A') : 'null' }}.</p>
                            <p class="text-[12px] sm:text-sm">Clicked       : {{ $linkData->linkClickeds->count()}}</p>

                        </div>
                        <div class="flex flex-wrap space-x-2">
                            <p class="text-[12px] sm:text-sm mr-auto">Created At : {{ $linkData->created_at->format('d M y, h:m A') }}.</p>
                            <a href="/QR={{ $linkData->short_link }}" class="px-4 py-1 font-bold bg-green-500 rounded-lg" target="_blank">Create QR</a>
                            <x-edit route="linksManagement.show" id="{{ $linkData->short_link }}" />
                            <x-delete route="linksManagement.destroy" id="{{ $linkData->id }}" background="bg-gradient-to-r from-gray-600 to-gray-800" message="{{ url('/l=').$linkData->short_link }}"/>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection