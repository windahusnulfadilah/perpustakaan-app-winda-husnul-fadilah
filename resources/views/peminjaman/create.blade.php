@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white"> <!-- Ganti warna header menjadi hijau -->
                        <h1 class="h4 mb-0">Formulir Peminjaman Baru</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no_peminjaman">Nomor Peminjaman</label> <!-- Ganti label -->
                                <input type="text" name="no_peminjaman" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="books_id">ID Buku</label> <!-- Ganti label -->
                                <input type="text" name="books_id" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pengunjung_id">ID Pengunjung</label> <!-- Ganti label -->
                                <input type="text" name="pengunjung_id" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pegawai_id">ID Pegawai</label> <!-- Ganti label -->
                                <input type="text" name="pegawai_id" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success btn-block">Simpan</button> <!-- Ganti warna tombol -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
