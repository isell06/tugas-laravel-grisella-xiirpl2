<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;
use App\Models\Pinjam;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus'; 

    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_terbit',
        'stok',
        'rak_id'
    ];

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'id', 'rak_id');
    }

    public function pinjam() {
        return $this->hasMany(Pinjam::class, 'id', 'buku_id');
    }
}
