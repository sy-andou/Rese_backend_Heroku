<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $today = Carbon::today();
        $reserve = [
            'id' => 1,
            'name' => '会社の忘年会',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 2,
            'name' => '昼会',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->format('Y-m-d'),
            'time' => '13:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 3,
            'name' => 'A社の懇親会',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(3)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 4,
            'name' => 'B社の懇親会',
            'user_id' => '2',
            'shop_id' => '2',
            'date' => $today->subDays(5)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 5,
            'name' => 'C社の懇親会',
            'user_id' => '2',
            'shop_id' => '2',
            'date' => $today->subDays(8)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '2',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 6,
            'name' => '飲み会X',
            'user_id' => '2',
            'shop_id' => '3',
            'date' => $today->addDays(20)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '2',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 7,
            'name' => '送別会',
            'user_id' => '2',
            'shop_id' => '4',
            'date' => $today->addDays(10)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '2',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 8,
            'name' => '懇親会Z',
            'user_id' => '2',
            'shop_id' => '10',
            'date' => $today->addDays(10)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 9,
            'name' => '親睦会Y',
            'user_id' => '2',
            'shop_id' => '10',
            'date' => $today->subDays(2)->format('Y-m-d'),
            'time' => '20:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 10,
            'name' => '転職祝い',
            'user_id' => '2',
            'shop_id' => '18',
            'date' => $today->subDays(2)->format('Y-m-d'),
            'time' => '21:00:00',
            'number' => '6',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 11,
            'name' => '就職祝い',
            'user_id' => '2',
            'shop_id' => '20',
            'date' => $today->subDays(10)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 12,
            'name' => '前借り',
            'user_id' => '2',
            'shop_id' => '19',
            'date' => $today->addDays(10)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 13,
            'name' => '慰安会',
            'user_id' => '2',
            'shop_id' => '7',
            'date' => $today->addDays(8)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 14,
            'name' => '後借り',
            'user_id' => '2',
            'shop_id' => '6',
            'date' => $today->addDays(3)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $today = Carbon::today();
        $reserve = [
            'id' => 15,
            'name' => 'こぶんおためし１',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(5)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 16,
            'name' => 'こぶんおためし２',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(3)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 17,
            'name' => 'こぶんおためし３',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(12)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 18,
            'name' => 'こぶんおためし４',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(9)->format('Y-m-d'),
            'time' => '19:00:00',
            'number' => '2',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 19,
            'name' => 'こぶんおためし５',
            'user_id' => '2',
            'shop_id' => '1',
            'date' => $today->subDays(13)->format('Y-m-d'),
            'time' => '18:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 20,
            'name' => 'こぶんおためし6',
            'user_id' => '2',
            'shop_id' => '9',
            'date' => $today->subDays(15)->format('Y-m-d'),
            'time' => '16:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 21,
            'name' => 'こぶんおためし７',
            'user_id' => '2',
            'shop_id' => '9',
            'date' => $today->subDays(15)->format('Y-m-d'),
            'time' => '20:00:00',
            'number' => '3',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 22,
            'name' => 'こぶんおためし８',
            'user_id' => '2',
            'shop_id' => '17',
            'date' => $today->subDays(19)->format('Y-m-d'),
            'time' => '20:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 23,
            'name' => 'こぶんおためし９',
            'user_id' => '2',
            'shop_id' => '17',
            'date' => $today->subDays(24)->format('Y-m-d'),
            'time' => '21:00:00',
            'number' => '4',
        ];
        DB::table('reserves')->insert($reserve);
        $reserve = [
            'id' => 24,
            'name' => 'こぶんおためし１０',
            'user_id' => '2',
            'shop_id' => '9',
            'date' => $today->subDays(2)->format('Y-m-d'),
            'time' => '21:00:00',
            'number' => '1',
        ];
        DB::table('reserves')->insert($reserve);

        // $reserve = [
        //     'name' => 'テスト用予約',
        //     'user_id' => '6',
        //     'shop_id' => '1',
        //     'date' => '2021-12-22',
        //     'time' => '18:00:00',
        //     'number' => '2',
        // ];
        // DB::table('reserves')->insert($reserve);
        // $reserve = [
        //     'name' => 'テスト用予約２',
        //     'user_id' => '7',
        //     'shop_id' => '1',
        //     'date' => '2021-12-22',
        //     'time' => '18:00:00',
        //     'number' => '2',
        // ];
        // DB::table('reserves')->insert($reserve);
    }
}
