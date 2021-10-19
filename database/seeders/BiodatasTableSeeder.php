<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            [
                'nama' => 'Agung',
                'bornDate' => '2004-02-17',
                'gender' => 'Laki-Laki',
                'address' => 'Kp.Cilisung',
                'religion' => 'Islam',
                'age' => 18,
                'hobby' => 'Rebahan',
            ],
            [
                'nama' => 'Cecep',
                'bornDate' => '2003-06-01',
                'gender' => 'Laki-Laki',
                'address' => 'Kota Baru',
                'religion' => 'Islam',
                'age' => 19,
                'hobby' => 'Main Game',
            ],
            [
                'nama' => 'Fani',
                'bornDate' => '2003-11-13',
                'gender' => 'Perempuan',
                'address' => 'Cangkuang Kulon',
                'religion' => 'Islam',
                'age' => 18,
                'hobby' => 'Menggambar',
            ],
            [
                'nama' => 'Adya',
                'bornDate' => '2004-03-13',
                'gender' => 'Perempuan',
                'address' => 'Cibedug Girang',
                'religion' => 'Islam',
                'age' => 18,
                'hobby' => 'Main Tik Tok',
            ],
            [
                'nama' => 'Adi',
                'bornDate' => '2004-08-24',
                'gender' => 'Laki-Laki',
                'address' => 'Moh.Toha',
                'religion' => 'Islam',
                'age' => 18,
                'hobby' => 'Rebahan',
            ],

        ];
        DB::table('biodatas')->insert($bio);

    }
}
