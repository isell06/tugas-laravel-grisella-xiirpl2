<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pinjam;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugass';
    protected $fillable = [
        'nama_petugas',
        'jabatan_petugas',
        'no_telp_petugas',
        'alamat_petugas',
    ];

    public function pinjam() {
        return $this->hasMany(Petugas::class, 'id', 'petugas_id');
    }
}
