<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Sukses', 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah Cepat Sukses?', 'content' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Kesuksesan', 'content' => 'lorem ipsum'],
        ];
        //
        DB::table('posts')->insert($posts);
    }
}
