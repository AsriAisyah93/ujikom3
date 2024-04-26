<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $makanan = Jenis::create([
            'nama_jenis' => 'Makanan'
        ]);
        
        $minuman = Jenis::create([
            'nama_jenis' => 'Minuman'
        ]);

        Kategori::create([
            'nama_kategori' => 'Makanan Berat',
            'jenis_id'=> $makanan->id
        ]);

        Kategori::create([
            'nama_kategori' => 'Makanan Ringan',
            'jenis_id'=> $makanan->id
        ]);

        Kategori::create([
            'nama_kategori' => 'Minuman',
            'jenis_id'=> $minuman->id
        ]);
    }
}
