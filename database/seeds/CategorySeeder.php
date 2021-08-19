<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '文学・評論',
            'sort_no' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'ノンフィクション',
            'sort_no' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'ビジネス書・経済',
            'sort_no' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '歴史・地理',
            'sort_no' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '政治・経済',
            'sort_no' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '芸能・エンターテイメント',
            'sort_no' => 6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'アート・建築・デザイン',
            'sort_no' => 7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '人文・思想・宗教',
            'sort_no' => 8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '暮らし・健康・料理',
            'sort_no' => 9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'サイエンス・テクノロジー',
            'sort_no' => 10,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '趣味・実用',
            'sort_no' => 11,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '教育・自己啓発',
            'sort_no' => 12,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'スポーツ・アウトドア',
            'sort_no' => 13,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '辞典・年鑑',
            'sort_no' => 14,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '音楽・楽譜',
            'sort_no' => 15,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '旅行・紀行',
            'sort_no' => 16,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => '絵本・児童書',
            'sort_no' => 17,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'コミックス',
            'sort_no' => 18,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

