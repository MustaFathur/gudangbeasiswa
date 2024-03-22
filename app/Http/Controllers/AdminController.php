<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class AdminController extends Controller
{
    public function tambah()
    {

        return view('admin.tambah_beasiswa');
    }

    public function upload(Request $request)
    {
        $beasiswa = new beasiswa;

        $gambar = $request->file;

        $namagambar = time() . '.' . $gambar->getClientoriginalExtension();

        $request->file->move('gambarbeasiswa', $namagambar);

        $beasiswa->gambar = $namagambar;

        $beasiswa->name = $request->name;

        $beasiswa->lembaga = $request->lembaga;

        $beasiswa->kategori = $request->kategori;

        $beasiswa->deskripsi = $request->deskripsi;

        $beasiswa->save();

        return redirect()->back()->with('message', 'Beasiswa Berhasil Ditambahkan');
    }
}
