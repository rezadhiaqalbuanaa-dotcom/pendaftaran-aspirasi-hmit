<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Pendaftar;

class FormController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(PendaftaranRequest $request)
    {
        Pendaftar::create($request->validated());

        return redirect('/login')->with('success', 'Pendaftaran berhasil, silakan login!');
    }
}