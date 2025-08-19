<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
       $toko = [
           'nama_toko'=>'Makmur Jaya Abadi',
           'alamat'=>'sidoarjo, jawa timur',
           'type'=>'Ruko'
        ];
        $produk  = produk::get(); // query untuk mengambil semua data yang berada di tb_produk
       // $queryBuilder = DB::table('tb_produk')->get(); //query untuk mengambil semua data yang berada
        return view('pages.produk.show',[
            'data_toko'=>$toko,
            'data_produk'=>$produk,
        ]);
    }

    public function create(){
        return view('pages.produk.add');
    }

    public function store(request $request){
        $request->validate([
          'nama_produk'=>'required',
          'harga_produk'=>'required',
          'deskripsi'=>'required',
        ]);
            
       // untuk menambahkan data ke tb_produk
      // DB::table('tb_produk')->create([]);
        produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'deskripsi_produk'=>$request->deskripsi,
            'kategori_id'=>'1'
       ]);
    }
}