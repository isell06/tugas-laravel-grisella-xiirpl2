<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugass = Petugas::all();
        return view('perpustakaan.petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('perpustakaan.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Petugas $petugass)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $petugass = new Petugas;
 
        $petugass->nama_petugas = $request->nama_petugas;
        $petugass->jabatan_petugas = $request->jabatan_petugas;
        $petugass->no_telp_petugas = $request->no_telp_petugas;
        $petugass->alamat_petugas = $request->alamat_petugas;

        $petugass->save();

        return redirect()->route('petugass.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugass)
    {
        //
        return view('perpustakaan.petugas.show' , compact('petugass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugass)
    {
        //
        return view('perpustakaan.petugas.edit' , compact('petugass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugass)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required|max:13',
            'alamat_petugas' => 'required|min:20',
        ]);

        $petugass->update($request->all());

        return redirect()->route('petugass.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugass)
    {
        //
        $petugass = Petugas::where('id', $petugass->id)->delete();
        return redirect()->route('petugass.index');
    }
}
