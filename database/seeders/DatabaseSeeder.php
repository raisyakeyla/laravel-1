<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Jenis;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Barang::create([
            'gambar' => 'image.jpg',
            'nama_barang' => 'Baju',
            'id_jenis' => 1,
            'harga_beli' => 100000,
            'harga_jual' => 150000,
            'stok' => 5
        ]);
       
        Jenis::create([
            'nama_jenis'=> 'Baju'
        ]);
    }
}
