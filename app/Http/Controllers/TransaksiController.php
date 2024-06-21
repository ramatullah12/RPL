<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index')
                ->with('transaksi', $transaksi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('transaksi.create')->with('produk',$produk);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $val = $request->validate([
            'barang' => "required",
            'jumblah' => "required",
            'produk_id' => "required",
            'harga' => "required"
        ]);

        // simpan tabel prodi
        Transaksi::create($val);

        // radirect ke halaman list prodi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disimpan,Barang akan kami ambil dan kami perbaiki,maksimal perbaikan 3 hari pengerjaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $produk = Produk::all();
        return view('transaksi.edit')->with('produk',$produk)->with('transaksi',$transaksi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $val = $request->validate([
            'barang' => "required",
            'jumblah' => "required",
            'produk_id' => "required",
            'harga' => "required"
        ]);

        // simpan tabel prodi
        Transaksi::create($val);

        // radirect ke halaman list prodi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diUbah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete(); // hapus data mahasiswa
        return redirect()->route('transaksi.index')->with('success',' Data berhasil dihapus.');
    }
}
