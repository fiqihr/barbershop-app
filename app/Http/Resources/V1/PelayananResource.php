<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
class PelayananResource extends JsonResource
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
            'jenis' => $this->jenis,
            'harga' => $this->harga,
            'deskripsi' => $this->deskripsi,
            'foto' => $this->foto,
            'transaksi' => TransaksiResource::collection($this->whenLoaded('transaksi')),
        ];
        // return parent::toArray($request);
    }
}