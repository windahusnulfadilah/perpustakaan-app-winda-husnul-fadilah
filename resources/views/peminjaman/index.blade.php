@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h1>Daftar Peminjaman</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Tambah Peminjaman Baru</a> <!-- Ganti warna tombol menjadi hijau -->
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover"> <!-- Ganti warna header dan tambahkan efek hover -->
                <thead class="thead-light"> <!-- Ganti warna header -->
                    <tr>
                        <th scope="col" class="text-center">Nomor</th> <!-- Ganti label -->
                        <th scope="col" class="text-center">ID Buku</th>
                        <th scope="col" class="text-center">ID Pengunjung</th>
                        <th scope="col" class="text-center">ID Pegawai</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjamans as $peminjaman)
                        <tr>
                            <td class="text-center">{{ $peminjaman->no_peminjaman }}</td>
                            <td class="text-center">{{ $peminjaman->books_id }}</td>
                            <td class="text-center">{{ $peminjaman->pengunjung_id }}</td>
                            <td class="text-center">{{ $peminjaman->pegawai_id }}</td>
                            <td class="text-center">{{ $peminjaman->status }}</td>
                            <td class="text-center">
                                <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-info btn-sm">Ubah</a> <!-- Ganti warna tombol menjadi biru -->
                                <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
