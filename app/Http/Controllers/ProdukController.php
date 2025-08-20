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
        
        // validasi
        $request->validate([
          'nama_produk'=>'required|min:8|max:12', // nama produk wajib diisi
          'harga_produk'=>'required',
          'deskripsi'=>'required',
        ],[
            'nama_produk.min'=>'nama produk minimal 8 karakter',
            'nama_produk.max'=>'nama produk maximal 12 karakter',
            'nama_produk.required'=>'inputan nama produk wajib diisi',
            'harga_produk.required'=>'inputan harga produk wajib diisi',
            'deskripsi.required'=>'inputan deskripsi produk wajib diisi',

        ]);
            
       // untuk menambahkan data ke tb_produk
       // DB::table('tb_produk')->create([]);
       //query tambah data
        produk::create([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga_produk,
            'deskripsi_produk'=>$request->deskripsi,
            'kategori_id'=>'1'
       ]);
     
        // setelah data berhasil di tambah, akan mengarahkan ke halaman /product dan memberikan notif berhasil men.....
        return redirect('/product')->with('message','berhasil menambahkan data');

    }

    public function show($id){
        // query atau perintah
        //elequent orm
       $data = produk::findOrFail($id);
       
       // query builder
       //DB::table('tb_produk')->where('id_produk',$id)->first0rFaill();
       
       return view('pages.produk.detail',[
        'produk'=>$data
       ]);
    } 

}