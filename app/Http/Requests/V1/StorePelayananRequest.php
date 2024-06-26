<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePelayananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('create'); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jenis' => ['required'],
            'harga' => ['required'],
            'deskripsi' => ['required'],
            'foto' => ['required'],
        ];
    }
}