@extends('layouts.main')

@section('content')
@if(session('message'))
<div class="row">
<div class="col">
    <div class="alert alert-info solid alert-right-icon alert-dismissible fade show">
        <span><i class="mdi mdi-check"></i></span>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>{{session('message')}}
    </div>
</div>
</div>
@endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h5 class="card-title text-white">Pilih Produk</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('temp.store') }}" method="POST">
                        @csrf
                        <div class="mb-3" bis_skin_checked="1">
                            <label class="form-label" for="basic-default-fullname">Pelanggan</label>
                            <input type="text" class="form-control" name="pelanggan"
                                value="{{ $pelanggan->nama_pelanggan }}" readonly>
                        </div>
                        <div class="mb-3" bis_skin_checked="1">
                            <label class="form-label" for="basic-default-fullname">Pilih Produk</label>
                            <select name="id_produk" class="form-control ">
                                @foreach ($produk as $row)
                                    <option value="{{ $row->id }}">{{ $row->nama_produk }} | {{ $row->stok }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" bis_skin_checked="1">
                            <label class="form-label" for="basic-default-fullname">Jumlah</label>
                            <input type="number" class="form-control text-center" name="jumlah" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h6 class="text-white">Keranjang Belanja</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Harga Satuan Rp.</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal Rp.</th>
                                    <th><i class="fa fa-gear"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0
                                @endphp
                                @foreach ($temp as $key => $row)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $row->produk->nama_produk }}</td>
                                        <td class="text-right">{{ number_format($row->produk->harga) }}</td>
                                        <td class="text-center">{{ $row->jumlah }}</td>
                                        <td class="text-right">{{ number_format($row->produk->harga * $row->jumlah) }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('temp.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button
                                                    onclick="return confirm('Apakah anda yakin untuk menghapus dari keranjang ?')"
                                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $total += $row->produk->harga * $row->jumlah;
                                    @endphp
                                @endforeach
                            <form action="{{ route('transaksi.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_pelanggan" value="{{ $pelanggan->id }}">
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right">Total Harga :</td>
                                    <td><input type="text" name="total_harga" class="form-control text-right" value="{{ $total }}" readonly></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right">Bayar :</td>
                                    <td><input type="number" name="bayar" id="bayar" oninput="hitungKembalian()" value="" class="form-control text-right"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right">Kembalian :</td>
                                    <td><input type="text" name="kembalian" id="kembalian" class="form-control text-right" readonly></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right">Check out :</td>
                                    <td class="text-center"><button type="submit" class="btn btn-primary"> Checkout</button></td>
                                    <td></td>
                                </tr>
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function hitungKembalian()
        {
            var totalHarga = parseFloat('{{ $total }}');
            var bayar = parseFloat(document.getElementById('bayar').value);
            var kembalian = bayar - totalHarga;
            document.getElementById('kembalian').value = kembalian;
        }
    </script>
@endsection