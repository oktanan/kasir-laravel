@extends('layouts.main')

@section('content')
<h1>Pelanggan</h1>
@if(session('message'))
<div class="row">
<div class="col">
    <div class="alert alert-primary solid alert-right-icon alert-dismissible fade show">
        <span><i class="mdi mdi-check"></i></span>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>{{session('message')}}
    </div>
</div>
</div>
@endif
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Add Pelanggan</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table header-border table-hover verticle-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pelanggan as $plg)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $plg->nama_pelanggan }}</td>
                        <td>{{ $plg->alamat }}</td>
                        <td>{{ $plg->telepon }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('pelanggan.edit', $plg->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pen"></i> 
                                </a>
                                <form action="{{ route('pelanggan.destroy', $plg->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin mengapus ?')">
                                        <i class="fas fa-trash"></i> 
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


{{-- MODAL --}}
<div class="modal fade" id="basicModal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Tambah Pelanggan Baru</h5>
              <button type="button" class="close" data-dismiss="modal"><span>×</span>
              </button>
          </div>
          <form action="{{ route ('pelanggan.store') }}" method="POST">
            @csrf
            <div class="modal-body">
              <label for="nama_pelanggan">Nama Pelanggan</label>
              <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control form-control" required>
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" id="alamat" class="form-control form-control" required>
              <label for="telepon">Telepon</label>
              <input type="number" name="telepon" id="telepon" class="form-control form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
  </div>
</div>
@endsection