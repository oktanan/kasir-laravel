@extends('layouts.main')

@section('content')
<h1>Edit Produk</h1>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Produk</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('produk.update', $produks->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produks->nama_produk }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" id="harga" class="form-control" value="{{ $produks->harga }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" name="stok" id="stok" class="form-control" value="{{ $produks->stok }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route ('produk.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
