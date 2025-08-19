@extends('layouts.master')

@section('konten')
<h1>daftar produk kami</h1>
<hr>
<a href="/product/create" type="button" class="btn btn-primary mb-3">tambah data</a>
<div class="alert alert-primary">
         <b>Nama Toko : </b> {{$data_toko['nama_toko']}}
         <br>
         <b>Alamat Toko : </b> {{$data_toko['alamat']}}
         <br>
         <b>Tipe Toko : </b> {{$data_toko['type']}}
</div>
<div class="card"> 
     <div class="card-header">
          daftar produk
     </div>

 <div class="card-body">
   <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama produk</th>
      <th scope="col">harga</th>
      <th scope="col">deskripsi_produk</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_produk as $item)
         <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->nama_produk}}</td>
      <td>{{$item->harga}}</td>
      <td>{{$item->deskripsi_produk}}</td>
      <td><button type="button" class="btn btn-danger">hapus</button>
          <button type="button" class="btn btn-warning">edit</button>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection