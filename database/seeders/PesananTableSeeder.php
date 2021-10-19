<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            [
                'nama_pelanggan' => 'Agung',
                'nama_barang' => 'Roti',
                'qty' => 10,
                'tgl_pesan' => '2021-09-17',

            ],
            [
                'nama_pelanggan' => 'Fani',
                'nama_barang' => 'Donat',
                'qty' => 5,
                'tgl_pesan' => '2021-08-18',

            ],
            [
                'nama_pelanggan' => 'Cecep',
                'nama_barang' => 'Big Cola',
                'qty' => 3,
                'tgl_pesan' => '2021-06-19',

            ],
            [
                'nama_pelanggan' => 'Riska',
                'nama_barang' => 'Poki',
                'qty' => 10,
                'tgl_pesan' => '2021-09-17',

            ],
            [
                'nama_pelanggan' => 'Adzura',
                'nama_barang' => 'Ale-Ale',
                'qty' => 1,
                'tgl_pesan' => '2021-09-17',

            ],

        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
