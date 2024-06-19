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
        return redirect()->route('service.index')->with('success', 'Data berhasil disimpan, untuk pengerjaan 3 hari dari pemeberian barang ke pada kami');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
