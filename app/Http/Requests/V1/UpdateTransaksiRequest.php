<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = $this->user();
        // return $user != null && $user->tokenCan('update');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();
        if ($method == 'PUT') {
            return [
                'pelayanan_id' => ['required'],
                'user_id' => ['required'],
                'tanggal' => ['required'],
                'jam' => ['required'],
                'barberman_id' => ['required'],
                'status_pembayaran' => ['required'],
                'status_transaksi' => ['required'],
            ];
        } else {
            return [
                'pelayanan_id' => ['sometimes','required'],
                'user_id' => ['sometimes','required'],
                'tanggal' => ['sometimes','required'],
                'jam' => ['sometimes','required'],
                'barberman_id' => ['sometimes','required'],
                'status_transaksi' => ['sometimes','required'],
            ];
            
        }
    }
}