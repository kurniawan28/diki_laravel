<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // inisialisasi tabel produk
    protected $table = 'tb_produk';

    // inisialisasi primary key di dalam tabel (PERBAIKI huruf besar/kecil)
    protected $primaryKey = 'id_produk';

    // data yang boleh diisi
    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'deskripsi_produk',
        'kategori_id',
    ];

    // data yang tidak boleh diisi (opsional, bisa dihapus kalau sudah pakai $fillable)
    protected $guarded = ['id_produk'];
}