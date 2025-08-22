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
    @if (session('message'))
        <div class="alert alert-primary">{{session('message')}}</div>
    @endif
<div class="card"> 
     <div class="card-header d-flex justify-content-between align-items-center">
          Daftar Produk
          <div class="d-flex gap-2">
          @if (request()->keyword!= '')
          <a href="/product" class="btn btn-info">reset</a>
          @endif
          <form class="input-group" style="width: 350px">
             <input type="text" class="form-control" value="{{request()->keyword}}"name="keyword" placeholder="Cari data produk">
            <button class="btn btn-success" type="submit" id="button-addon2">Cari Data</button>
          </div>
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
    @forelse($data_produk as $item)
     <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama_produk }}</td>
      <td>{{ $item->harga }}</td>
      <td>{{ $item->deskripsi_produk }}</td>
      <td>
        <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" 
            data-bs-target="#hapus{{$item->id_produk}}">
            hapus
          </button>
          <a href="/product/{{ $item->id_produk }}/edit" class="btn btn-warning">edit</a>
          <a href="/product/{{ $item->id_produk }}" class="btn btn-info">detail</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center">data yang anda cari tidak ada!!</td>
    </tr>
    @endforelse
  </tbody>
</table>
  </div>
</div>


 @foreach ($data_produk as $item)
  <!-- Modal -->
  <div class="modal fade" id="hapus{{ $item->id_produk }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
       aria-labelledby="hapusLabel{{ $item->id_produk }}" aria-hidden="true">
    <div class="modal-dialog">
      <form action="/product/{{ $item->id_produk }}" method="POST" class="modal-content">
        @csrf
        @method('DELETE')
        <div class="modal-header">
          <h5 class="modal-title" id="hapusLabel{{ $item->id_produk }}">Konfirmasi Penghapusan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus produk <strong>{{ $item->nama_produk }}</strong>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus Data</button>
        </div>
      </form>
    </div>
  </div>
@endforeach

@endsection