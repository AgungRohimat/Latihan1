<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            [

                'nama_barang' => 'Roti',
                'nama_suplier' => 'Agung',
                'qty' => 10,
                'tgl' => '2021-09-17',

            ],
            [

                'nama_barang' => 'Donat',
                'nama_suplier' => 'Fani',
                'qty' => 5,
                'tgl' => '2021-08-18',

            ],
            [

                'nama_barang' => 'Big Cola',
                'nama_suplier' => 'Cecep',
                'qty' => 3,
                'tgl' => '2021-06-19',

            ],
            [

                'nama_barang' => 'Poki',
                'nama_suplier' => 'Riska',
                'qty' => 10,
                'tgl' => '2021-09-17',

            ],
            [

                'nama_barang' => 'Ale-Ale',
                'nama_suplier' => 'Adzura',
                'qty' => 1,
                'tgl' => '2021-09-17',

            ],

        ];
        DB::table('pembelians')->insert($pembelian);

    }
}
