<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(PendaftaranRequest $request)
    {
        // simpan data pendaftaran
        Pendaftar::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'alasan' => $request->alasan,
        ]);

        // buat akun login otomatis
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa',
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil, silakan login');
    }
}