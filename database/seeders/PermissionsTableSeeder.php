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
                'name' => '利用者',
            ],
            [
                'name' => '店舗代表者',
            ],
            [
                'name' => '管理者',
            ],
        ]);
    }
}
