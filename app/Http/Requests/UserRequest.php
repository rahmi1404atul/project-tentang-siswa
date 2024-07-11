<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'namasiswa'=> ' required|string',
            'email' => 'required|email',
            'nim' => 'required|min:12',
            'foto' => 'required|mimes:png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'namasiswa.required' => 'data harus di isikan',
            'email.required'=> 'email tidak boleh kosong ',
            'nim.email' => 'pastikan yang dimasukan berupa nim',
            'telpon.min' => 'minimal 12 digit',
            'foto.mimes' => 'Pastikan file yang diinput benar',
        ];
    }
}
