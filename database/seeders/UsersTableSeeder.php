<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => '管理者サンプル',
            'email' => 'sample@administrators.com',
            'password' => Hash::make('password'),
            'permission_id' => 3,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => '店舗代表者サンプル',
            'email' => 'sample@representatives.com',
            'password' => Hash::make('password'),
            'permission_id' => 2,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'kuuchi',
            'email' => 'kuchi@inotani.com',
            'password' => Hash::make('password'),
            'permission_id' => 2,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'ちさいこ',
            'email' => 'chisaiko@inotani.com',
            'password' => Hash::make('password'),
            'permission_id' => 2,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'くまお',
            'email' => 'kumao@inotani.com',
            'password' => Hash::make('password'),
            'permission_id' => 2,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'name' => '一般ユーザーA',
            'email' => 'userA@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 7,
            'name' => '一般ユーザーB',
            'email' => 'userB@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 8,
            'name' => '一般ユーザーC',
            'email' => 'userC@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 9,
            'name' => '一般ユーザーD',
            'email' => 'userD@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 10,
            'name' => '一般ユーザーE',
            'email' => 'userE@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 11,
            'name' => '一般ユーザーF',
            'email' => 'userF@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 12,
            'name' => '一般ユーザーG',
            'email' => 'userG@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 13,
            'name' => '一般ユーザーH',
            'email' => 'userH@users.com',
            'password' => Hash::make('password'),
            'permission_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'ほんものしよくん',
        //     'email' => 'kakeru.the.solo@gmail.com',
        //     'password' => Hash::make('password'),
        //     'permission_id' => 3,
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'ほんものしよくん２',
        //     'email' => 'kakeru.the.solo@icloud.com',
        //     'password' => Hash::make('password'),
        //     'permission_id' => 3,
        // ]);
    }
}
