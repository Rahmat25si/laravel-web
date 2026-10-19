<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan daftar semua data pelanggan.
     */
    public function index()
{
    $pelanggan = Pelanggan::all();
    return view('admin.pelanggan.index', compact('pelanggan'));
}

    /**
     * Menampilkan form untuk menambah data pelanggan baru.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Menyimpan data pelanggan baru ke database.
     */
   public function store(Request $request)
{
    // Tambahkan validasi ini
    $request->validate([
        'email' => 'required|email|unique:pelanggan,email',
    ], [
        'email.unique' => 'Email ini sudah terdaftar, silakan gunakan email lain!'
    ]);

    $data['first_name'] = $request->first_name;
    $data['last_name']  = $request->last_name;
    $data['birthday']   = $request->birthday;
    $data['gender']     = $request->gender;
    $data['email']      = $request->email;
    $data['phone']      = $request->phone;

    Pelanggan::create($data);

    return redirect()->route('pelanggan.index')
                     ->with('success', 'Penambahan Data Pelanggan Berhasil!');
}
    /**
     * Menampilkan detail satu pelanggan.
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Menampilkan form untuk mengedit data pelanggan.
     */
    public function edit(string $id)
{
    $data['dataPelanggan'] = Pelanggan::findOrFail($id);
    return view('admin.pelanggan.edit', $data);
}
    /**
     * Mengubah/meng-update data pelanggan di database.
     */
   public function update(Request $request, string $id)
{
    $pelanggan_id = $id;
    $pelanggan = Pelanggan::findOrFail($pelanggan_id);

    $pelanggan->first_name = $request->first_name;
    $pelanggan->last_name  = $request->last_name;
    $pelanggan->birthday   = $request->birthday;
    $pelanggan->gender     = $request->gender;
    $pelanggan->email      = $request->email;
    $pelanggan->phone      = $request->phone;

    $pelanggan->save();

    return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
}

    /**
     * Menghapus data pelanggan dari database.
     */
    public function destroy(string $id)
{
    $pelanggan = Pelanggan::findOrFail($id);
    $pelanggan->delete();

    return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Dihapus!');
}
}
