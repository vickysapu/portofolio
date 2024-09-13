<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

use function PHPUnit\Framework\fileExists;

class portofolioController extends Controller
{
    public function tambah_portofolio(Request $request){
        $tambahPortofolio = new portofolio();

        $tambahPortofolio->nama_portofolio = $request->input('nama_portofolio');
        $tambahPortofolio->deskripsi = $request->input('deskripsi');
        $tambahPortofolio->link = $request->input('link');

        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('imgPortofolio'), $fileName);

            $tambahPortofolio->gambar = $fileName;
        }

        $tambahPortofolio->save();

        return redirect()->route('tampilBeranda');
    }

    public function hapus_portofolio($id) {
        $hapusPortofolio = portofolio::find($id);
        $hapusPortofolio->delete();

        return redirect()->route('tampilBeranda');
    }
}
