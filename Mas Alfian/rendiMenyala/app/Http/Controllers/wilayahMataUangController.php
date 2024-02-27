<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Models\WilayahMataUang;
use App\Http\Resources\WilayahMataUangResource;

class wilayahMataUangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(["data" => WilayahMataUang::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "negara"   => "required",
            "uang"      => "required",
            "konversi"  => 'required'
        ]);

        // dd($request->all());
        $idWilayah = Wilayah::where("negara", 'like' , '%'.$request->negara.'%')->value("id");
        if ($idWilayah == null) {
            return response()->json(["Message" => "Country doesnt exist"]);
        }else{

            $checkWilayah = WilayahMataUang::where("wilayah_id", $idWilayah)->value('wilayah_id');
            // dd($checkWilayah);

            if ($checkWilayah == $idWilayah) {
                return response()->json(["Message" => "Country already have currency"]);
            }else{
                $mata_uang = new WilayahMataUang;
                $mata_uang->wilayah_id = $idWilayah;
                $mata_uang->nama_mata_uang = $request->uang;
                $mata_uang->uang_ke_dolar = $request->konversi;
                $mata_uang->save();

                return response()->json([
                    "Message" => "Data succesfuly added",
                    "Mata Uang" =>  WilayahMataUangResource::collection(WilayahMataUang::latest()->get()) 
                ]);
            }
        }
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
            "negara"   => "required",
            "uang"      => "required",
            "konversi"  => 'required'
        ]);

        $idWilayah = Wilayah::where("negara", 'like' , '%'.$request->negara.'%')->value("id");
        if ($idWilayah == null) {
            return response()->json(["Message" => "Country doesnt exist"]);
        }else{

            $checkWilayah = WilayahMataUang::where("wilayah_id", $idWilayah)->where("id", "!=", $id)->value('wilayah_id');
            // dd($checkWilayah);

            if ($checkWilayah == $idWilayah) {
                return response()->json(["Message" => "Country already have currency"]);
            }else{
                $mata_uang = WilayahMataUang::find($id);
                $mata_uang->wilayah_id = $idWilayah;
                $mata_uang->nama_mata_uang = $request->uang;
                $mata_uang->uang_ke_dolar = $request->konversi;
                $mata_uang->save();

                return response()->json([
                    "Message" => "Data succesfuly Edited",
                    "Mata Uang" => new WilayahMataUangResource(WilayahMataUang::find($id)) 
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataUang = WilayahMataUang::find($id);
        $mataUang->delete();
        
        return response()->json([
            "Message" => "Data succesfuly deleted :)",
            "Mata Uang" =>  WilayahMataUangResource::collection(WilayahMataUang::find($id))
        ]);
    }
}
