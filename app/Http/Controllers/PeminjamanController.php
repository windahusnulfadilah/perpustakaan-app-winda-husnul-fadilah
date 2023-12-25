<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat peminjaman
        return view('peminjaman.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'no_peminjaman' => 'required|unique:peminjaman_t',
            'books_id' => 'required',
            'pengunjung_id' => 'required',
            'pegawai_id' => 'required',
        ]);

        // Simpan data peminjaman baru
        Peminjaman::create([
            'no_peminjaman' => $request->no_peminjaman,
            'books_id' => $request->books_id,
            'pengunjung_id' => $request->pengunjung_id,
            'pegawai_id' => $request->pegawai_id,
            'status' => 0, // Default status
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Tampilkan form untuk mengedit peminjaman
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'no_peminjaman' => 'required|unique:peminjaman_t,no_peminjaman,' . $id,
            'books_id' => 'required',
            'pengunjung_id' => 'required',
            'pegawai_id' => 'required',
        ]);

        // Perbarui data peminjaman
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update([
            'no_peminjaman' => $request->no_peminjaman,
            'books_id' => $request->books_id,
            'pengunjung_id' => $request->pengunjung_id,
            'pegawai_id' => $request->pegawai_id,
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data peminjaman
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus');
    }

    public function ubahStatus($id)
    {
        // Ubah status peminjaman
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 1]);

        return redirect()->route('peminjaman.index')->with('success', 'Status Peminjaman berhasil diubah');
    }
}
