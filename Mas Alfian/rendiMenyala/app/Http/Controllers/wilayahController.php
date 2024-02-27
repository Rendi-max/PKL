<?php

namespace App\Http\Controllers;

use App\Http\Resources\MasyarakatResource;
use App\Http\Resources\WilayahResource;
use App\Models\Masyarakat;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class wilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  WilayahResource::collection(Wilayah::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'negara' => 'required|unique:wilayahs',
            'benua' => 'required',
        ]);

        $data = [
            "negara" => $request->negara,
            "benua" => $request->benua,
        ];
        Wilayah::create($data);

        return response()->json([
            "Message" => "Data succsesfully Added",
            "Wilayah" =>  WilayahResource::collection(Wilayah::latest()->get())
        ]);
            
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "negara" => "required",
            "benua" => "required"
        ]);
        
        $wilayah = Wilayah::find($id);
        $wilayah->negara = $request->negara;
        $wilayah->benua = $request->benua;
        $wilayah->save();

        return response()->json([
            "Message" => "Data succsesfully Added",
            "Wilayah" =>  new WilayahResource(Wilayah::find($id))
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();
        return response()->json([
            "Message" => "Data succesfuly deleted",
            "Wilayah" => new WilayahResource($wilayah)
        ]);
    }
}
