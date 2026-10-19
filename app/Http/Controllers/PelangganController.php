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
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Mengubah/meng-update data pelanggan di database.
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'birthday'   => 'nullable|date',
            'gender'     => 'nullable|in:Male,Female,Other',
            'email'      => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'phone'      => 'nullable|string|max:20',
        ]);

        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')
                         ->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    /**
     * Menghapus data pelanggan dari database.
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
                         ->with('success', 'Data pelanggan berhasil dihapus!');
    }
}
