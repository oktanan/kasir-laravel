@extends('layouts.main')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">+ Add Transaction</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th><i class="fa-solid fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $key => $row)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $row->pelanggan->nama_pelanggan }}</td>
                                <td class="text-right">{{ number_format($row->total_harga) }}</td>
                                <td class="text-center">{{ $row->created_at }}</td>
                                <td>
                                    <div class="text-center">
                                        <a href="{{ route('transaksi.show', $row->id) }}" class="btn btn-sm btn-primary">Detail</a>
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
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Pilih Pelanggan</h5>
                <button type="button" class="close text-white" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col"><i class="bx bx-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggan as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->nama_pelanggan }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td class="text-center">
                                        <div class="d-flex">
                                            <a href="{{ route('transaksi.show', $row->id) }}" class="btn btn-sm btn-primary">Pilih</a>
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
  </div>
@endsection