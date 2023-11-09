<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Petugas;
use App\Models\Anggota;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjams';
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'buku_id',
        'anggota_id',
        'petugas_id',
    ];

    public function buku() {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class, 'petugas_id', 'id');
    }

    public function anggota(){
         return $this->belongsTo(Anggota::class, 'anggota_id', 'id');
    }
}
