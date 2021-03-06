<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = [
            'id' => 1,
            'evaluation' => '5',
            'comment' => '美味である',
            'reserve_id' => '2',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 2,
            'evaluation' => '4',
            'comment' => 'すしすしすしし',
            'reserve_id' => '3',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 3,
            'evaluation' => '2',
            'comment' => 'やきやきにく',
            'reserve_id' => '4',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 4,
            'evaluation' => '5',
            'comment' => 'ジュジュジュのジュッ!w',
            'reserve_id' => '5',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 5,
            'reserve_id' => '9',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 6,
            'evaluation' => '2',
            'comment' => 'あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみむめもやゆよらりるれろわをん',
            'reserve_id' => '10',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 7,
            'evaluation' => '3',
            'comment' => '１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１１',
            'reserve_id' => '11',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 8,
            'evaluation' => '3',
            'comment' => '２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２２',
            'reserve_id' => '15',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 9,
            'evaluation' => '4',
            'comment' => 'こめんとコメントコメントコッコココメント',
            'reserve_id' => '16',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 10,
            'evaluation' => '1',
            'comment' => '店員の態度に難あり',
            'reserve_id' => '17',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 11,
            'evaluation' => '5',
            'comment' => '店員の態度に難なし',
            'reserve_id' => '18',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 12,
            'evaluation' => '4',
            'comment' => 'いろはにほへとちりぬるわ',
            'reserve_id' => '19',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 13,
            'evaluation' => '4',
            'comment' => 'いろはにほへとちりぬるわ',
            'reserve_id' => '20',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 14,
            'evaluation' => '5',
            'comment' => 'めずらし食材が多くてとても楽しかったです。',
            'reserve_id' => '21',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 15,
            'evaluation' => '4',
            'comment' => 'エンシェントレーシェン',
            'reserve_id' => '22',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 16,
            'evaluation' => '3',
            'comment' => 'マルクスの３人の魔女',
            'reserve_id' => '23',
        ];
        DB::table('reviews')->insert($review);
        $review = [
            'id' => 17,
            'evaluation' => '2',
            'comment' => 'お店の場所がわかりにくい',
            'reserve_id' => '24',
        ];
        DB::table('reviews')->insert($review);
        // $review = [
        //     'evaluation' => '4',
        //     'comment' => 'カマンベール',
        //     'reserve_id' => '6',
        // ];
        // DB::table('reviews')->insert($review);
        // $review = [
        //     'evaluation' => '2',
        //     'comment' => 'まずうま',
        //     'reserve_id' => '7',
        // ];
        // DB::table('reviews')->insert($review);
    }
}
