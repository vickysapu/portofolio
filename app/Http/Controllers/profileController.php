<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Auth\Events\Login;

class profileController extends Controller
{
    public function update_profile(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = Profile::first();

        if (!$profile) {
            return redirect()->route('tampilBeranda')->with('error', 'Profile not found.');
        }

        $profile->nama_lengkap = $request->input('nama_lengkap');
        $profile->nama_panggilan = $request->input('nama_panggilan');
        $profile->password = $request->input('password');

        if ($request->hasFile('gambar')) {
            if ($profile->gambar && file_exists(public_path('imgProfile/' . $profile->gambar))) {
                unlink(public_path('imgProfile/' . $profile->gambar));
            }

            $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('imgProfile'), $fileName);

            $profile->gambar = $fileName;
        }

        $profile->save();

        return redirect()->route('tampilBeranda')->with('success', 'Profile updated successfully.');
    }


    public function tampilBerandaProfile()
    {
        $dataProfile = Profile::all();

        return view('index', compact('dataProfile'));
    }

}