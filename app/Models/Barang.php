<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'nama_barang',
        'id_jenis',
        'harga_beli',
        'harga_jual',
        'stok'
    ];
}
