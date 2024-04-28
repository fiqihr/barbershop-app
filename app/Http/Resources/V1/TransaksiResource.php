<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class TransaksiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = null;
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pelayanan_id' => $this->pelayanan_id,
            'jenis_pelayanan' => $this->pelayanan->jenis,
            'user_id' => $this->user_id,
            'name' => $this->user->name,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'barberman_id' => $this->barberman_id,
            'nama_barberman' => $this->barberman->nama,
            'status_pembayaran' => $this->status_pembayaran,
            'status_transaksi' => $this->status_transaksi,
            'total_pembayaran' => $this->total_pembayaran,
            // 'user' => UserResource::collection($this->whenLoaded('user')),
        ];
    }
}