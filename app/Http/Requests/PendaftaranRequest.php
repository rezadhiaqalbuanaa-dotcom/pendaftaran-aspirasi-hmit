<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:100',
            'nim' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'alasan' => 'required|string',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'nim.required' => 'NIM wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah digunakan',
            'alasan.required' => 'Alasan wajib diisi',
            'password.required' => 'Password wajib diisi',
        ];
    }
}