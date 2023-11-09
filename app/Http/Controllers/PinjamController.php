<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    $pinjams = Pinjam::with('anggota', 'petugas', 'buku')->get();
    return view('perpustakaan.pinjam.index', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Buku $buku, Anggota $anggota, Petugas $petugas)
    {
        //
        $bukus = $buku::all();
        $anggotas = $anggota::all();
        $petugass = $petugas::all();
        return view('perpustakaan.pinjam.create', compact('bukus', 'anggotas', 'petugass'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku, Petugas $petugas, Anggota $anggota)
    {
        //
        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        $pinjam = new Pinjam;
        $pinjam->anggota_id = $request->anggota_id;
        $pinjam->petugas_id = $request->petugas_id;
        $pinjam->buku_id = $request->buku_id;
        $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjam->tanggal_kembali = $request->tanggal_kembali;
        $pinjam->save();

        return redirect()->route('peminjaman.index', $pinjam->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjam)
    {
        //
    }
}
