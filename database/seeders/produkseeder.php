<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query untuk menambah data
        DB::table('tb_produk')->insert([
        [
            'nama_produk'=>'Smart TV samsung 24 inch', 
            'harga'=>15000000,
            'deskripsi_produk'=>'ini adalah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ],[
           'nama_produk'=>'laptop asus', 
            'harga'=>17000000,
            'deskripsi_produk'=>'ini adalah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ],[
            'nama_produk'=>'smartwactch Aplle wacth series 9', 
            'harga'=>8000000,
            'deskripsi_produk'=>'ini adalah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ] 
        ]);
    }
}
