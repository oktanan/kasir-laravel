<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Temp;
use App\Models\Transaksi;
use App\Models\transaksiDetail;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        $pelanggan = Pelanggan::all();
        $title = 'Transaksi';
        return view('transaksi.index', compact('title', 'pelanggan', 'transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->id_pelanggan = $request->input('id_pelanggan');
        $transaksi->total_harga = $request->input('total_harga');
        $transaksi->bayar = $request->input('bayar');
        $transaksi->kembalian = $request->input('kembalian');
        $transaksi->save();

        $pindahTemp = Temp::all();
        $transaksiDetails = [];

        foreach($pindahTemp as $row) {
            $produk = Produk::find($row->id_produk);
            if($produk && $produk->stok >= $row->jumlah) {
                $transaksiDetail = new transaksiDetail();
                $transaksiDetail->id_transaksi = $transaksi->id;
                $transaksiDetail->id_produk = $row->id_produk;
                $transaksiDetail->jumlah = $row->jumlah;

                // Hitung subtotal
                $subtotal = $produk->harga * $row->jumlah;
                $transaksiDetail->subtotal = $subtotal;

                $transaksiDetail->save();

                //kurangi stok produk
                $produk->stok -= $row->jumlah;
                $produk->save();

                $transaksiDetails[] = $transaksiDetail;
            }
        }

        // hapus dari keranjang belanja (temp) jika valid
        if(!empty($transaksiDetails)) {
            Temp::truncate();
        }

        return view('transaksi.nota', compact('transaksi', 'transaksiDetails'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temp = Temp::all();
        $produk = Produk::all();
        $pelanggan = Pelanggan::find($id);
        $data = [
            'title' => 'Form Transaksi',
        ];
        return view('transaksi.create', compact('data', 'pelanggan', 'produk', 'temp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
