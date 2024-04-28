<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = $this->user();
        // return $user != null && $user->tokenCan('create'); 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pelayanan_id' => ['required'],
            'user_id' => ['required'],
            'tanggal' => ['required'],
            'jam' => ['required'],
            'barberman_id' => ['required'],
            'status_pembayaran' => ['required'],
            'status_transaksi' => ['required'],
        ];
    }
}