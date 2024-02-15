<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WilayahMataUangResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id'                => $this->id,
            // 'negara'            => $this->wilayah->negara,
            "nama_mata_uang"    => $this->nama_mata_uang,
            "nilai_dolar"       => $this->uang_ke_dolar, 
        ];
    }
}
