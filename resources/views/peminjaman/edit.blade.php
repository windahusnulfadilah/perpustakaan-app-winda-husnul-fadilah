@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-warning text-white"> <!-- Ganti warna header menjadi kuning -->
                        <h1 class="h4 mb-0">Ubah Data Peminjaman</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="no_peminjaman">Nomor Peminjaman</label> <!-- Ganti label -->
                                <input type="text" name="no_peminjaman" class="form-control" value="{{ $peminjaman->no_peminjaman }}" required>
                            </div>

                            <div class="form-group">
                                <label for="books_id">ID Buku</label> <!-- Ganti label -->
                                <input type="text" name="books_id" class="form-control" value="{{ $peminjaman->books_id }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pengunjung_id">ID Pengunjung</label> <!-- Ganti label -->
                                <input type="text" name="pengunjung_id" class="form-control" value="{{ $peminjaman->pengunjung_id }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pegawai_id">ID Pegawai</label> <!-- Ganti label -->
                                <input type="text" name="pegawai_id" class="form-control" value="{{ $peminjaman->pegawai_id }}" required>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block">Simpan Perubahan</button> <!-- Ganti warna tombol -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
