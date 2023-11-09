<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pinjam;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas';
    protected $fillable = [
        'kode_anggota',
        'nama_anggota',
        'jk_anggota',
        'jurusan_anggota',
        'no_telp_anggota',
        'alamat_anggota'
    ];

    public function pinjam() {
        return $this->hasMany(Anggota::class, 'id', 'anggota_id');
    }
}
