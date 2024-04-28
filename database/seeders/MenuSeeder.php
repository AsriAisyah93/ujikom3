<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Stok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(): void
    {
        $stok = [
            ['jumlah'=>23],
            ['jumlah'=>23],
            ['jumlah'=>23],
            ['jumlah'=>23],
            ['jumlah'=>23],
        ];
        $menu = [
            [
                'kategori_id' => 3,
                'nama_menu' => 'Croissant',
                'harga' => '5000',
                'stok_id'=>1,
                'image'=>'',
                'deskripsi' => 'Dibaca Quaso-',
            ],
            [
                'kategori_id' => 2,
                'nama_menu' => 'Nasi Goreng',
                'harga' => '15000',
                'stok_id'=>2,
                'image'=>'',
                'deskripsi' => 'Nasi goreng dengan topping telor ceplok.',
            ],
            [
                'kategori_id' => 2,
                'nama_menu' => 'Soto ayam',
                'harga' => '9000',
                'stok_id'=>3,
                'image'=>'',
                'deskripsi' => 'Soto kuah bening.',
            ],
            [
                'kategori_id' => 1,
                'nama_menu' => 'Soda gembira',
                'harga' => '6000',
                'stok_id'=>4,
                'image'=>'',
                'deskripsi' => 'Soda susu + lemon',
            ],
            [
                'kategori_id' => 1,
                'nama_menu' => 'Milkshake coklat',
                'harga' => '8000',
                'stok_id'=>5,
                'image'=>'',
                'deskripsi' => 'Susu kocok rasa coklat.',
            ],
            [
                'kategori_id' => 2,
                'nama_menu' => 'Nasi Goreng',
                'harga' => '9000',
                'stok_id'=>3,
                'image'=>'',
                'deskripsi' => 'Nasi Goreng Merah.',
            ],
            [
                'kategori_id' => 1,
                'nama_menu' => 'Watermelon Punch',
                'harga' => '6000',
                'stok_id'=>4,
                'image'=>'',
                'deskripsi' => 'Soda lemon + Semangka',
            ],
            [
                'kategori_id' => 3,
                'nama_menu' => 'Donut',
                'harga' => '5000',
                'stok_id'=>1,
                'image'=>'',
                'deskripsi' => 'Donat Berbagai Toping',
            ],
            [
                'kategori_id' => 3,
                'nama_menu' => 'Kentang Goreng',
                'harga' => '5000',
                'stok_id'=>1,
                'image'=>'',
                'deskripsi' => 'Kentang Wedges di dry fried',
            ],
            [
                'kategori_id' => 1,
                'nama_menu' => ' Matcha Latte',
                'harga' => '8000',
                'stok_id'=>5,
                'image'=>'',
                'deskripsi' => 'Susu fullcream + Matcha.',
            ],

        ];

        foreach ($stok as $key => $value) {
            Stok::create($value);
        }
        
        foreach ($menu as $key => $value) {
            Menu::create($value);
        }
    }
    
}
