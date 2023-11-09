<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bukus = Buku::all();
        return view('perpustakaan.buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Rak $rak)
    {
        //
        $raks = $rak::all();
        return view('perpustakaan.buku.create', compact('raks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_buku'     => 'required',
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required',
            'stok'          => 'required',
            'rak_id'        => 'required'
        ]);

        Buku::create([
            'kode_buku'     => $request['kode_buku'],
            'judul_buku'    => $request['judul_buku'],
            'penulis_buku'  => $request['penulis_buku'],
            'penerbit_buku' => $request['penerbit_buku'],
            'tahun_terbit'  => $request['tahun_terbit'],
            'stok'          => $request['stok'],
            'rak_id'        => $request['rak_id'],
        ]);

        return redirect()->route('buku.index')->withSuccess('Buku telah di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku, Rak $rak)
    {
        //
        $raks = $rak::all();
        return view('perpustakaan.buku.show' , compact('buku', 'raks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku, Rak $rak)
    {
        //
        $raks = $rak::all();
        return view('perpustakaan.buku.edit', compact('buku', 'raks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku, Rak $rak)
    {
        //
        $request->validate([
            'kode_buku'     => 'required',
            'judul_buku'    => 'required',
            'penulis_buku'  => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit'  => 'required',
            'stok'          => 'required',
            'rak_id'        => 'required'
        ]);

        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->rak_id = $rak->rak_id;

        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
        $bukus = Buku::where('id', $buku->id)->delete();
        return redirect()->route('buku.index');
    }
}
