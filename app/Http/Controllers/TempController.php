<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Temp;
use Illuminate\Http\Request;

class TempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'id_produk' => 'required',
            'jumlah' => 'required|numeric|min:1', 
        ]);

        // Mendapatkan produk dari request
        $produk = Produk::findOrFail($request->id_produk);

        // Memeriksa apakah jumlah produk yang diminta melebihi stok yang tersedia
        if ($request->jumlah > $produk->stok) {
            return back()->with('message', 'Jumlah produk melebihi stok yang tersedia.');
        }

        // Simpan item ke dalam keranjang belanja (temp) jika valid
        Temp::create([
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
        ]);

        return redirect($_SERVER['HTTP_REFERER'])->with('message', 'Berhasil Ditambahkan ke Keranjang');
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
        Temp::find($id)->delete();
        return redirect($_SERVER['HTTP_REFERER'])->with('message', 'Berhasil dihapus dari keranjang');
    }
}
