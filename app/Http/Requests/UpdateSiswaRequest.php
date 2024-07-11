<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiswaRequest extends FormRequest
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
            'namasiswa' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jadwal' => 'required'
            // 'gambarbuku' => 'required|mimes:jpg,png'
        ];
    }
    public function messages(): array
    {
        return [
            'namasiswa.required' => 'Data Harus Di Isikan',
            'alamat.required' => 'alamat Tidak Boleh Kosong',
            'kelas.email' => 'Pastikan Berisi yang Dimasukkan Kelas Yang Benar',
            'jadwal.email' => 'Pastikan Berisikan yang Dimasukkan Jadwal Yang Benar',
            // 'telpon.required' => 'Telpon Tidak Boleh Kosong',
            // 'gambarbuku.mimes' => 'Pastikan Format File Benar'
        ];
    }
}