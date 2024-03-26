@extends('Layout.Users')
@section('content')
    <div class="flex justify-center my-20 px-4">
        <div class="bg-gray-800 bg-opacity-80 w-full sm:max-w-[400px] sm:min-w-[400px] rounded-lg text-white sm:mx-auto p-6 sm:p-10 space-y-4">
            <h1 class="text-white text-xl sm:text-2xl text-center">Qr Scan</h1>
        <div class="flex justify-center">
            {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate(url('/l='.$id))) !!} "> --}}
            {!! QrCode::size(300)->generate(url('/l='.$id)) !!} 
        </div>
       <div> 
            {{-- <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate(url('/l='.$id))) !!} " download>Downloads</a></div> --}}
        </div>
    </div>
@endsection