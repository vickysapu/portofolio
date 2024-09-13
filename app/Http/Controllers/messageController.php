<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class messageController extends Controller
{
    public function kirim_pesan(Request $request) {
        $pesan = new message();

        $pesan->nama = $request->input('nama');
        $pesan->email = $request->input('email');
        $pesan->pesan = $request->input('pesan');

        $pesan->save();

        return redirect()->route('welcome');
    }

    public function hapus_pesan($id) {
        $hapusPesan = message::find($id);
        $hapusPesan->delete();

        return redirect()->route('tampilBeranda');
    }
}