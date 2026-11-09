<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan daftar semua data pelanggan (lengkap dengan Filter & Pagination).
     */
public function index(Request $request)
{
    // Kolom yang dapat difilter
    $filterableColumns = ['gender'];

    // Kolom yang dapat dicari (Search)
    $searchableColumns = ['first_name', 'last_name', 'email', 'phone'];

    // Query data dengan Filter, Search, Pagination, dan Query String
    $pelanggan = Pelanggan::filter($request, $filterableColumns)
                        ->search($request, $searchableColumns)
                        ->paginate(10)
                        ->withQueryString();

    return view('pelanggan.index', compact('pelanggan'));
}

    /**
     * Menampilkan form untuk menambah data pelanggan baru.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Menyimpan data pelanggan baru ke database.
     */
    public function store(Request $request)
    {
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
        $dataPelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('dataPelanggan'));
    }

    /**
     * Mengubah/meng-update data pelanggan di database.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

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
