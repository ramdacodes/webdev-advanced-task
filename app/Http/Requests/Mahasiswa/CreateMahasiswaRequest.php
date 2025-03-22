<?php

namespace App\Http\Requests\Mahasiswa;

use Illuminate\Foundation\Http\FormRequest;

class CreateMahasiswaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'npm' => ['required', 'unique:mahasiswas,npm'],
            'nama' => ['required'],
            'alamat' => ['required'],
            'program_studi' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'npm.required' => 'NPM wajib diisi.',
            'npm.unique' => 'NPM sudah terdaftar.',
            'nama.required' => 'Nama wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'program_studi.required' => 'Program Studi wajib diisi.',
        ];
    }
}
