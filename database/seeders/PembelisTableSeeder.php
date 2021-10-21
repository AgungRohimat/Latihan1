<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            [
                'nama' => 'Agung',
                'jns_kelamin' => 'Laki-Laki',
                'alamat' => 'Kp.Cilisung',
                'kode_pos' => 4722,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-02-17',
            ],
            [
                'nama' => 'Maudy',
                'jns_kelamin' => 'Perempuan',
                'alamat' => 'Inhoftank',
                'kode_pos' => 4723,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-05-04',
            ],
            [
                'nama' => 'Cecep',
                'jns_kelamin' => 'Laki-Laki',
                'alamat' => 'Babakan',
                'kode_pos' => 4724,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-06-01',
            ],
            [
                'nama' => 'Riska',
                'jns_kelamin' => 'Perempuan',
                'alamat' => 'Rancamanyar',
                'kode_pos' => 4725,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-08-15',
            ],
            [
                'nama' => 'Ridwan',
                'jns_kelamin' => 'Laki-Laki',
                'alamat' => 'Ciparay',
                'kode_pos' => 4726,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-05-12',
            ],
        ];
        DB::table('pembelis')->insert($pembeli);

    }
}
