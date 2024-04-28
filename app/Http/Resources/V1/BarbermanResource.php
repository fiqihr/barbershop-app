<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class BarbermanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'umur' => $this->umur,
            'deskripsi' => $this->deskripsi,
            'foto' => $this->foto,
            'transaksi' => TransaksiResource::collection($this->whenLoaded('transaksi')),
        ];
    }
}