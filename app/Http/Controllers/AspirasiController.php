<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasis = Aspirasi::where('user_id', auth()->id())->get();

        return view('aspirasi', compact('aspirasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        Aspirasi::create([
            'user_id' => auth()->id(),
            'isi' => $request->isi
        ]);

        return back()->with('success', 'Aspirasi berhasil ditambahkan');
    }

    public function destroy($id)
    {
        Aspirasi::findOrFail($id)->delete();

        return back()->with('success', 'Aspirasi berhasil dihapus');
    }

    public function all()
    {
    $aspirasis = Aspirasi::all();

    return view('aspirasi-admin', compact('aspirasis'));
    }
}