<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_t';

    protected $fillable = [
        'no_peminjaman',
        'books_id',
        'pengunjung_id',
        'pegawai_id',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id');
    }

    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
