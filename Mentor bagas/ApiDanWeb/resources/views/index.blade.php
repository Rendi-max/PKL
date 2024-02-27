@extends('layout')
@section('konten')
    <div class="mx-4 sm:mx-16 my-5 sm:my-10 rounded-xl bg-white space-y-4 p-10">
            <h2 class="text-center font-bold text-xl sm:text-2xl">Voice to Text</h2>
            <form action="api/transform" method="post" enctype="multipart/form-data">
                <div class="flex space-x-3">
                    <input type="file" name="voice"  accept=".mp3" class="py-3 w-full border border-purple-600 text-purple-600 focus:outline-none focus:border-blue-600 px-4 font-bold rounded-lg" placeholder="Please select voice to get text">
                    <select name="operator" id="" class="border border-purple-600 text-purple-600 focus:outline-none focus:border-blue-600 px-4 font-bold rounded-lg" required>
                        <option value="">Pilih Opsi</option>
                        <option value="Vosk">Vosk</option>
                        <option value=""></option>
                    </select>
                    <button type="submit" class="bg-purple-600 px-4 py-2 font-bold text-white rounded-xl">Transform</button>
                </div>
                <audio class="w-full my-3" controls="true">
                </audio>
            </form>
            @if (session()->has('succes'))
                <h1 class="my-5 text-center">{{ session('succes') }}</h1>
            @endif
    </div>
@endsection
