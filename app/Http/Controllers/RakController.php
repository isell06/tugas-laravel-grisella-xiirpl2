<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $raks = Rak::all();
        return view('perpustakaan.rak.index', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('perpustakaan.rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_rak'      => 'required|unique:raks',
            'lokasi_rak'    => 'required|unique:raks'
        ],[
            'nama_rak.required'     => 'Nama rak harus diisi!',
            'nama_rak.unique'       => 'Nama rak sudah ada!',
            'lokasi_rak.required'   => 'Lokasi rak harus diisi!',
            'lokasi_rak.unique'     => 'Lokasi rak sudah ada!',
        ]);

        $rak = new Rak;
 
        $rak->nama_rak = $request->nama_rak;
        $rak->lokasi_rak = $request->lokasi_rak;
 
        $rak->save();

        return redirect()->route('rak.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $rak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak)
    {
        //
        return view('perpustakaan.rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rak $rak)
    {
        //
        $request->validate([
            'nama_rak'      => 'required|unique:raks',
            'lokasi_rak'    => 'required|unique:raks'
        ],[
            'nama_rak.required'     => 'Nama rak harus diisi!',
            'nama_rak.unique'       => 'Nama rak sudah ada!',
            'lokasi_rak.required'   => 'Lokasi rak harus diisi!',
            'lokasi_rak.unique'     => 'Lokasi rak sudah ada!',
        ]);

        $rak->nama_rak = $request->nama_rak;
        $rak->lokasi_rak = $request->lokasi_rak;
 
        $rak->save();

        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $rak)
    {
        //
        $rak = Rak::where('id', $rak->id)->delete();
        return redirect()->route('rak.index');
    }
}
