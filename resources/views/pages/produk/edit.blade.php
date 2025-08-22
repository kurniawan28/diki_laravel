@extends('layouts.master') 

@section('konten')
    <div class="card">
        <div class="card-header">update data produk</div>
        <div class="card-body">
            <form action="/product/{{$data->id_produk}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">nama produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{  $data->nama_produk}}">
                            @error('nama_produk')
                            <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" value="{{ $data->harga}}">
                            @error('harga_produk')
                            <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" style="height: 100px">{{ $data->deskripsi_produk}}</textarea>
                            <label >deskripsi Produk</label>
                            @error('deskripsi')
                            <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 ">
                        <button type="submit" class="btn btn-primary">tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('konten')
    <div class="card">
        <div class="card-header">tambah data Produk</div>
        <div class="card-body">
            <form action="/product" method="POST">
                @csrf {{-- Token untuk keamanan form --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" style="height: 100px"></textarea>
                            <label >deskripsi Produk</label>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 ">
                        <button type="submit" class="btn btn-primary">update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection