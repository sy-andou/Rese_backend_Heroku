<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            'id' => 1,
            'genre' => '寿司',
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'id' => 2,
            'genre' => '焼肉',
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'id' => 3,
            'genre' => '居酒屋',
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'id' => 4,
            'genre' => 'イタリアン',
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'id' => 5,
            'genre' => 'ラーメン',
        ];
        DB::table('genres')->insert($genre);
    }
}
