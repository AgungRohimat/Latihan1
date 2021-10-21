<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            [
                'nama' => 'Agung',
                'alamat' => 'Kp.Cilisung',
                'kode_pos' => 4722,
                'kota' => 'Bandung',
            ],
            [
                'nama' => 'Maudy',
                'alamat' => 'Inhoftank',
                'kode_pos' => 4723,
                'kota' => 'Bandung',
            ],
            [
                'nama' => 'Cecep',
                'alamat' => 'Babakan',
                'kode_pos' => 4724,
                'kota' => 'Bandung',
            ],
            [
                'nama' => 'Riska',
                'alamat' => 'Rancamanyar',
                'kode_pos' => 4725,
                'kota' => 'Bandung',
            ],
            [
                'nama' => 'Ridwan',
                'alamat' => 'Ciparay',
                'kode_pos' => 4726,
                'kota' => 'Bandung',
            ],
        ];
        DB::table('supliers')->insert($suplier);

    }
}
