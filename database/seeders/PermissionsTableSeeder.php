<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'name' => '利用者',
            ],
            [
                'id' => 2,
                'name' => '店舗代表者',
            ],
            [
                'id' => 3,
                'name' => '管理者',
            ],
        ]);
    }
}
