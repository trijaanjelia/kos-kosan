<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index()
    {
        $dataKos = Kos::all();
        return view('kos.index', compact('dataKos'));
    }

    public function create()
    {
        return view('kos.create');
    }

    public function store(Request $request)
    {
        Kos::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/kos');
    }
}