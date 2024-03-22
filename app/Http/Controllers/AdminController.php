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

    public function tampilkanbeasiswa()
    {
        $data = beasiswa::all();

        return view('admin.tampilkanbeasiswa', compact('data'));
    }

    public function hapusbeasiswa($id)
    {
        $data = beasiswa::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatebeasiswa($id)
    {

        $data = beasiswa::find($id);

        return view('admin.update_beasiswa', compact('data'));
    }

    public function editbeasiswa(Request $request, $id)
    {

        $beasiswa = beasiswa::find($id);

        $beasiswa->name = $request->name;
        $beasiswa->lembaga = $request->lembaga;
        $beasiswa->kategori = $request->kategori;
        $beasiswa->deskripsi = $request->deskripsi;

        $gambar = $request->file;

        if ($gambar) {

            $namagambar = time() . '.' . $gambar->getClientoriginalExtension();

            $request->file->move('gambarbeasiswa', $namagambar);

            $beasiswa->gambar = $namagambar;
        }

        $beasiswa->save();

        return redirect()->back()->with('message', 'Data Beasiswa Berhasil Diupdate!');
    }
}
