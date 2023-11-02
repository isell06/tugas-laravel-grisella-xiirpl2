<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Rak extends Model
{
    use HasFactory;
    protected $table = 'raks'; 

    protected $fillable = [
    'nama_anggota',
    'lokasi_rak'
    ];


    public function buku()
    {
        return $this->hasMany(Buku::class, 'id', 'rak_id'); 
    }
}
