@extends('layouts.main')

@section('content')
<h1>Produk</h1>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Add Produk</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ number_format($produk->harga) }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>
                            <div class="d-flex">
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pen"></i> 
                                </a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
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
                <h5 class="modal-title">Tambah Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form action="{{ route ('produk.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control form-control" required>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control form-control" required>
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <script>
  function confirmDelete(produkId) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini ?')) {
      window.location.href = '{{ route('produk.destroy', ':id') }}'.replace(':id', produkId);
    } else {
      return false;
    }
  }
</script> --}}


@endsection
