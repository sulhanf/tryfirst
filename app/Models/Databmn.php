<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databmn extends Model
{
    use HasFactory;

    protected $fillable = [
       'nomorbmn', 'jenisbarang', 'merk', 'tipe', 'tahun_perolehan', 'harga_perolehan'
    ];
}
