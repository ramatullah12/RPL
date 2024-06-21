<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index')
                ->with('produk', $produk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Produk::class)){
            abort(403);
        }
        $val = $request->validate([
            'nama' => "required", 
            'harga' => "required"
        ]);

        // simpan tabel 
        Produk::create($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit')->with('produk',$produk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        if ($request->user()->cannot('create',Produk::class)){
            abort(403);
        }
        $val = $request->validate([
            'nama' => "required", 
            'harga' => "required"
        ]);

        // simpan tabel 
        Produk::create($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('produk.index')->with('success', 'Produk berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete(); // hapus data mahasiswa
        return redirect()->route('produk.index')->with('success',' Data berhasil dihapus.');
    }
}
