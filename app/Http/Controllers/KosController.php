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
    // Validasi data
    $request->validate([
        'nama' => 'required|string|max:255',        // Nama wajib diisi, maksimal 255 karakter
        'alamat' => 'required|string|max:255',      // Alamat wajib
        'kota' => 'required|string|max:100',        // Kota wajib
        'harga' => 'required|numeric',              // Harga wajib dan harus angka
        'deskripsi' => 'nullable|string',           // Deskripsi boleh kosong
        'foto.*' => 'image|mimes:jpg,jpeg,png|max:2048' // Foto harus gambar, maksimal 2MB per file
    ]);

    $fotoPaths = [];

    if ($request->hasFile('foto')) {
        foreach ($request->file('foto') as $file) {
            $path = $file->store('foto_kos', 'public');
            $fotoPaths[] = $path;
        }
    }

    Kos::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'kota' => $request->kota,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'foto' => json_encode($fotoPaths)
    ]);

    return redirect('/kos')->with('success', 'Data kos berhasil ditambahkan!');
}
    public function show($id)
    {
        $kos = Kos::findOrFail($id);
        return view('kos.show', compact('kos'));
    }
    public function edit($id)
{
    $kos = Kos::findOrFail($id);
    return view('kos.edit', compact('kos'));
}

public function update(Request $request, $id)
{
    $kos = Kos::findOrFail($id);

    $kos->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'kota' => $request->kota,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi
    ]);

    return redirect('/kos');
}
public function destroy($id)
{
    $kos = Kos::findOrFail($id);

    // Hapus file foto dari storage
    $fotos = json_decode($kos->foto);
    if ($fotos) {
        foreach ($fotos as $foto) {
            if (file_exists(storage_path('app/public/' . $foto))) {
                unlink(storage_path('app/public/' . $foto));
            }
        }
    }

    // Hapus data kos
    $kos->delete();

    return redirect('/kos')->with('success', 'Kos berhasil dihapus!');
}
}