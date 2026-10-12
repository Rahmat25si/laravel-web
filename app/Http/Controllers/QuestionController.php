<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller




{
   public function store(Request $request)
{
    $request->validate([
        'nama'       => 'required|max:10',
        'email'      => ['required', 'email'],
        'pertanyaan' => 'required|max:300|min:8',
    ]);

    // Format pesan dinamis sesuai instruksi modul
    $pesan = "Terimakasih <b>{$request->nama}</b>! Pertanyaan ini: <b>{$request->pertanyaan}</b> akan segera direspon melalui email <b>{$request->email}</b>";

    // Simpan ke session jika masih dibutuhkan
    $request->session()->put('nama', $request->nama);
    $request->session()->put('email', $request->email);
    $request->session()->put('pertanyaan', $request->pertanyaan);

    // Redirect kembali dengan flash data 'info'
    return redirect()->back()->with('info', $pesan);
}
}
