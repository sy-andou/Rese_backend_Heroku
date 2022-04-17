<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = [
            'id' => 1,
            'name' => 'スシタロー',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/スシタロー.jpeg',
            'summary' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
            'opening_time' => '11:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '6',
            'user_id' => '2',
            'genre_id' => '1',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 2,
            'name' => 'うしのつの',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/うしのつの.jpeg',
            'summary' => '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。',
            'opening_time' => '17:00',
            'closing_time' => '21:00',
            'min_number' => '2',
            'max_number' => '15',
            'user_id' => '3',
            'genre_id' => '2',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 3,
            'name' => '民',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/民.jpeg',
            'summary' => '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。',
            'opening_time' => '16:00',
            'closing_time' => '22:00',
            'min_number' => '1',
            'max_number' => '15',
            'user_id' => '4',
            'genre_id' => '3',
            'area_id' => '40',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 4,
            'name' => 'サイゼリアル',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/サイゼリアル.jpeg',
            'summary' => '都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。',
            'opening_time' => '11:00',
            'closing_time' => '21:00',
            'min_number' => '1',
            'max_number' => '10',
            'user_id' => '5',
            'genre_id' => '4',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 5,
            'name' => '天上天下一品',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/天上天下一品.jpeg',
            'summary' => 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。',
            'opening_time' => '12:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '2',
            'genre_id' => '5',
            'area_id' => '40',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 6,
            'name' => 'JJ苑',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/JJ苑.jpeg',
            'summary' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
            'opening_time' => '16:00',
            'closing_time' => '21:00',
            'min_number' => '2',
            'max_number' => '5',
            'user_id' => '3',
            'genre_id' => '2',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 7,
            'name' => 'ZETA PIZZA',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/ZETA PIZZA.jpeg',
            'summary' => 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。',
            'opening_time' => '15:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '4',
            'genre_id' => '4',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 8,
            'name' => '四角源',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/四角源.jpeg',
            'summary' => '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。',
            'opening_time' => '11:00',
            'closing_time' => '21:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '5',
            'genre_id' => '5',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 9,
            'name' => '鳥貧民',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/鳥貧民.jpeg',
            'summary' => '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。',
            'opening_time' => '17:00',
            'closing_time' => '22:00',
            'min_number' => '1',
            'max_number' => '10',
            'user_id' => '2',
            'genre_id' => '3',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 10,
            'name' => 'はまだ寿司',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/はまだ寿司.jpeg',
            'summary' => '鮨好きの方の為の鮨屋として、迫力ある大きさの握りを1貫ずつ提供致します。',
            'opening_time' => '12:00',
            'closing_time' => '21:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '3',
            'genre_id' => '1',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 11,
            'name' => 'しゃんしゃん亭',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/しゃんしゃん亭.jpeg',
            'summary' => '毎年チャンピオン牛を買い付け、仙台市長から表彰されるほどの上質な仕入れをする精肉店オーナーの本当に美味しい国産牛を食べてもらいたいという思いから誕生したお店です。',
            'opening_time' => '18:00',
            'closing_time' => '22:00',
            'min_number' => '2',
            'max_number' => '12',
            'user_id' => '4',
            'genre_id' => '2',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 12,
            'name' => 'はらみ大将',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/はらみ大将.jpeg',
            'summary' => '最高級の美味しいお肉で日々の疲れを軽減していただければと贅沢にサーロインを盛り込んだ御膳をご用意しております。',
            'opening_time' => '16:00',
            'closing_time' => '21:00',
            'min_number' => '2',
            'max_number' => '10',
            'user_id' => '5',
            'genre_id' => '2',
            'area_id' => '40',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 13,
            'name' => '串カツ山田',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/串カツ山田.jpeg',
            'summary' => '当店自慢の鍋や焼き鳥などお好きなだけ堪能できる食べ放題プランをご用意しております。飲み放題は2時間と3時間がございます。',
            'opening_time' => '16:00',
            'closing_time' => '21:00',
            'min_number' => '2',
            'max_number' => '10',
            'user_id' => '2',
            'genre_id' => '3',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 14,
            'name' => '倉庫すし',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/倉庫すし.jpeg',
            'summary' => 'ミシュラン掲載店で磨いた、寿司職人の旨さへのこだわりはもちろん、 食事をゆっくりと楽しんでいただける空間作りも意識し続けております。 接待や大切なお食事にはぜひご利用ください。',
            'opening_time' => '10:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '10',
            'user_id' => '3',
            'genre_id' => '1',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 15,
            'name' => '行行亭',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/行行亭.jpeg',
            'summary' => 'お昼にはランチを求められるサラリーマン、夕方から夜にかけては、学生や会社帰りのサラリーマン、小上がり席もありファミリー層にも大人気です。',
            'opening_time' => '11:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '10',
            'user_id' => '4',
            'genre_id' => '5',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 16,
            'name' => 'さかなや運動場',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/さかなや運動場.jpeg',
            'summary' => '博多出身の店主自ら厳選した新鮮な旬の素材を使ったコース料理をご提供します。一人一人のお客様に目が届くようにしております。',
            'opening_time' => '17:00',
            'closing_time' => '21:00',
            'min_number' => '1',
            'max_number' => '10',
            'user_id' => '5',
            'genre_id' => '3',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 17,
            'name' => 'てんぐ寿司',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/てんぐ寿司.jpeg',
            'summary' => '職人が一つ一つ心を込めて丁寧に仕上げた、江戸前鮨ならではの味をお楽しみ頂けます。鮨に合った希少なお酒も数多くご用意しております。他にはない海鮮太巻き、当店自慢の蒸し鮑、是非ご賞味下さい。',
            'opening_time' => '11:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '8',
            'user_id' => '2',
            'genre_id' => '1',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 18,
            'name' => '灼熱ホルモン',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/灼熱ホルモン.jpeg',
            'summary' => '店内に一歩足を踏み入れると、肉の焼ける音と芳香が猛烈に食欲を掻き立ててくる。そんな漆で味わえるのは至極の焼き肉です。',
            'opening_time' => '17:00',
            'closing_time' => '21:00',
            'min_number' => '2',
            'max_number' => '10',
            'user_id' => '3',
            'genre_id' => '2',
            'area_id' => '15',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 19,
            'name' => 'がぶりぎょーざ',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/がぶりぎょーざ.jpeg',
            'summary' => '非日常的な空間で日頃の疲れを癒し、ゆったりとした上質な時間を過ごせる大人の為のレストラン&バーです。',
            'opening_time' => '11:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '4',
            'genre_id' => '4',
            'area_id' => '40',
        ];
        DB::table('shops')->insert($shop);
        $shop = [
            'id' => 20,
            'name' => 'さかな米',
            'img_pass' => 'https://reseimgbucket.s3.ap-northeast-3.amazonaws.com/さかな米.jpeg',
            'summary' => '毎日店主自ら市場等に出向き、厳選した魚介類が、お鮨をはじめとした繊細な料理に仕立てられます。また、選りすぐりの種類豊富なドリンクもご用意しております。',
            'opening_time' => '10:00',
            'closing_time' => '20:00',
            'min_number' => '1',
            'max_number' => '5',
            'user_id' => '5',
            'genre_id' => '1',
            'area_id' => '27',
        ];
        DB::table('shops')->insert($shop);
    }
}
