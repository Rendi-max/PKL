<?php

namespace App\Http\Resources;

use App\Models\WilayahMataUang;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WilayahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"        => $this->id,
            "negara"    => $this->negara,
            "benua"     => $this->benua,
            "mata_uang" => new WilayahMataUangResource($this->wilayah_mata_uang),
            "penduduk"  => new MasyarakatResource($this->masyarakat)
        ];
    }
}
