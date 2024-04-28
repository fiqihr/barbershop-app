<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
         'name' => ['required', 'string', 'unique:users'],
         'email' => ['required', 'email', 'unique:users'],
         'password' => ['required', 'min:8'],
         'telepon' => ['required', 'string'],
         'alamat' => ['required', 'string'],
         'foto' => ['string'],
         'jenis_kelamin' => ['required', 'string'],
        ];
    }
}