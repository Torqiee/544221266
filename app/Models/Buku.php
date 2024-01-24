<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_buku',
        'tanggal_terbit',
        'nama_penulis',
        'jumlah_halaman',
        'harga_buku'
    ];
}
