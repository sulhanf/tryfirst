<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjamit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip_peminjam', 'id_barang', 'tanggal_pinjam', 'tanggal_kembali', 'nip_petugas', 'status_peminjaman'
    ];
}
