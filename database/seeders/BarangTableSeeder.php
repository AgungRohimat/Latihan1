<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'nama' => 'Roti',
                'varian' => 'Stobery',
                'harga_beli' => 1500,
                'harga_jual' => 2000,

            ],
            [
                'nama' => 'Big Cola',
                'varian' => 'Original',
                'harga_beli' => 2500,
                'harga_jual' => 3000,

            ],
            [
                'nama' => 'Poki',
                'varian' => 'Greentea',
                'harga_beli' => 14500,
                'harga_jual' => 15000,

            ],
            [
                'nama' => 'Donat',
                'varian' => 'Coklat',
                'harga_beli' => 1000,
                'harga_jual' => 1500,

            ],
            [
                'nama' => 'Ale-Ale',
                'varian' => 'Sirsak',
                'harga_beli' => 500,
                'harga_jual' => 1000,

            ],

        ];
        DB::table('barangs')->insert($barang);

    }
}
