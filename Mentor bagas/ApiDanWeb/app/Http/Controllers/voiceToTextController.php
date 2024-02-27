<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voiceToTextController extends Controller
{
    function Change(Request $request){
        $request->validate([
            "operator" => 'required',
            "voice"    => 'required|mimes:mp3, mp4'
        ]);

        $voice = $request->file('voice')->getClientOriginalName();
        // dd($voice);
        $command = "vosk-transcriber -i".$voice."-o";
        $result = [];
        exec($command, $result);
        dd($result);
        return back()->with("succes", "Testing berhasil anjay");
    }
}
