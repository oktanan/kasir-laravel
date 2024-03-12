@extends('layouts.main')

@section('content')
<h1>Edit Pelanggan</h1>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Pelanggan</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="{{ $pelanggan->nama_pelanggan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $pelanggan->alamat }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $pelanggan->telepon }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route ('pelanggan.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
