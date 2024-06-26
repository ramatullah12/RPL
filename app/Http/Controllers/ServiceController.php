<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('service.index')
                ->with('service', $service);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $val = $request->validate([
            'nama' => "required", 
            'hp' => "required", 
            'alamat' => "required", 
            'barang' => "required", 
            'keluhan' => "required"
        ]);

        // simpan tabel 
        Service::create($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('service.index')->with('success', 'Data berhasil disimpan, untuk selanjutnya silahkan anda isi bagian transaksi yang sudah kami sediakan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('service.edit')->with('service',$service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'nama' => 'required|string|max:255',
        'hp' => 'required|string|max:20',
        'alamat' => 'required|string|max:255',
        'barang' => 'required|string|max:255',
        'keluhan' => 'required|string|max:255',
    ]);

    // Cari data Service berdasarkan ID
    $service = Service::findOrFail($id);

    // Update detail Service
    $service->nama = $request->nama;
    $service->hp = $request->hp;
    $service->alamat = $request->alamat;
    $service->barang = $request->barang;
    $service->keluhan = $request->keluhan;

    // Simpan perubahan
    $service->save();

    // Redirect kembali ke halaman service dengan pesan sukses
    return redirect()->route('service.index')->with('success', 'Service berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete(); // hapus data mahasiswa
        return redirect()->route('service.index')->with('success',' Data berhasil dihapus.');
    }
}
