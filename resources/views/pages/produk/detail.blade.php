@extends('layouts.master')

@section('konten')
<h1>detail produk kami</h1>
<hr>
<div class="card"> 
     <div class="card-header">
          detail produk
     </div>

 <div class="card-body">
    <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
    <p>nama produk : {{$produk->nama_produk}}</p>
    <p>harga : Rp.{{$produk->harga}}</p>
    <p>deskripsi : {{$produk->deskripsi_produk}}</p>
    <p>kategori : barang elektronik </p>
    <p>stok : tersedia 3</p>
    <a href="/product" class="btn btn-primary">kembali ke produk</a>
  </div>
</div>
@endsection