<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalProduk = Produk::count();
        $totalUser = User::count();
        $totalPelanggan = Pelanggan::count();
        $totalTransaksi = Transaksi::count();
    
        // Hitung persentase
        $maxProduk = 100; // Misalnya, total maksimum yang mungkin dari produk
        $maxUser = 100; // Misalnya, total maksimum yang mungkin dari produk
        $maxPelanggan = 100; // Misalnya, total maksimum yang mungkin dari pelanggan
        $maxTransaksi = 100; // Misalnya, total maksimum yang mungkin dari transaksi
    
        $userPercentage = ($totalUser / $maxProduk) * 100;
        $produkPercentage = ($totalProduk / $maxProduk) * 100;
        $pelangganPercentage = ($totalPelanggan / $maxPelanggan) * 100;
        $transaksiPercentage = ($totalTransaksi / $maxTransaksi) * 100;
    
        return view('dashboard.index', compact('totalProduk', 'totalUser', 'totalPelanggan', 'totalTransaksi', 'produkPercentage', 'userPercentage', 'pelangganPercentage', 'transaksiPercentage'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
