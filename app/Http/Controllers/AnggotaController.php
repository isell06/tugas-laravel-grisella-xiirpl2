<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggotas = Anggota::all();
        return view('perpustakaan.anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('perpustakaan.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Anggota $anggota)
    {
        //
        $request->validate([
            'kode_anggota' => 'required|numeric',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required|min:11|max:13',
            'alamat_anggota' => 'required|max:200',
        ]);

        $anggota = new Anggota;
 
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jk_anggota = $request->jk_anggota;
        $anggota->jurusan_anggota = $request->jurusan_anggota;
        $anggota->no_telp_anggota = $request->no_telp_anggota;
        $anggota->alamat_anggota = $request->alamat_anggota;

        $anggota->save();

        return redirect()->route('anggotas.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
        return view('perpustakaan.anggota.show' , compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
        return view('perpustakaan.anggota.edit' , compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
        $request->validate([
            'kode_anggota' => 'required|numeric',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required|max:13',
            'alamat_anggota' => 'required|max:200',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggotas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
        $anggotas = Anggota::where('id', $anggota->id)->delete();
        return redirect()->route('anggotas.index');
    }
}
