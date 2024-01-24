<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            'judul_buku' => 'My Diary',
            'tanggal_terbit' => '2010-05-02',
            'nama_penulis' => 'Izar Maulana',
            'jumlah_halaman' => '203',
            'harga_buku' => '130000'
        ]);
    }
}
