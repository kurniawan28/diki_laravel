<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // sintaks di bawah untuk membuat tabel produk
        Schema::create(table:'tb_produk', callback:function (Blueprint $table): void{
            $table->id(column:'id_produk');//defaultnya 'id'
            $table->string(column:'nama_produk',leght:150);// default length dari laravel 255
            $table->integer(column:'harga');//membuat kolom 'harga' untuk menyimpan harga produk
            $table->text(column:'deskripsi_produk')->nullable();//membuat kolom 'deskripsi_produk' untuk menyimpan 

            $table->integer(column:'kategori_id');// membuat kolom 'kategori_id' yang dapat bernilai null

            $table->timestamps();// menambah kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
