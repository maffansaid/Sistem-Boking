<?php

namespace App\Http\Controllers;

use App\Models\Informasi as ModelsInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Informasi extends Controller
{
    public function tampilan()
    {
        $data = ModelsInformasi::latest()->get();

        return view('pages.dashboard.admin.bagianInformasi.bagianInformasi', compact('data'));
    }

    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'bail|required|string|max:255',
            'gambar' => 'bail|required|file|image',
        ]);

        $validasi['gambar'] = '/storage/' . $request->file('gambar')->store('/informasi');

        ModelsInformasi::create($validasi);

        return redirect('/BagianInformasi')->with('success', 'Berhasil menambahkan data informasi.');
    }

    public function hapus(Request $request)
    {
        $data = ModelsInformasi::find($request->get('id'));

        if ($data) {
            Storage::delete(substr($data->gambar, 9)) ?? null;
            $data->delete();
        }

        return redirect('/BagianInformasi')->with('error', 'Berhasil menghapus data informasi.');
    }
}
