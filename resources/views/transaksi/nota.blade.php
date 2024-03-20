<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            /* Atur padding untuk memberikan jarak antar sel */
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            /* Warna latar belakang untuk header */
        }

        tfoot td {
            background-color: #f2f2f2;
            /* Warna latar belakang untuk baris footer */
        }
    </style>
</head>

<body onload="window.print()">
    <center>
        <h1>Nota Transaksi</h1>
    </center>
    <hr>
    <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
    <p><strong>Pelanggan:</strong> {{ $transaksi->pelanggan->nama_pelanggan }}</p>
    <p><strong>Tanggal:</strong> {{ $transaksi->created_at->format('d/m/Y H:i:s') }}</p>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksiDetails as $key => $row)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row->produk->nama_produk }}</td>
                    <td>{{ number_format($row->produk->harga) }}</td>
                    <td>{{ number_format($row->jumlah) }}</td>
                    <td>{{ number_format($row->produk->harga * $row->jumlah) }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align: right;"><strong>Total Harga :</strong></td>
                <td>{{ number_format($transaksi->total_harga) }}</td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: right;"><strong>Bayar :</strong></td>
                <td>{{ number_format($transaksi->bayar) }}</td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: right;"><strong>Kembalian :</strong></td>
                <td>{{ number_format($transaksi->kembalian) }}</td>
            </tr>
        </tfoot>
    </table>

    <!-- Tambahkan JavaScript untuk mengarahkan kembali ke halaman indeks setelah mencetak atau menutup tab PDF -->
    <script>
        window.onafterprint = function() {
            window.location.href = "{{ route('transaksi.index') }}";
        };
    </script>
</body>

</html>
