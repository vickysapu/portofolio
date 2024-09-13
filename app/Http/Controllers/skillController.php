<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class skillController extends Controller
{
    public function tambah_skill(Request $request) {
        $tambahSkill = new skill();

        $tambahSkill->nama_skill = $request->input('nama_skill');
        $tambahSkill->performa = $request->input('performa');

        $tambahSkill->save();

        return redirect()->route('tampilBeranda');
    }
}
