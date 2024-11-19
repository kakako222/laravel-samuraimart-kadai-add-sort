<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory; // Faker をインポート

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        // Fakerの日本語ロケールを指定
        $faker = FakerFactory::create('ja_JP');
        
        return [
            'title' => $faker->realText(20),  // 日本語で20文字程度のタイトルを生成
            'content' => $faker->realText(200), // 日本語で200文字程度の本文を生成
            'user_id' => 1, // 必要に応じて変更（例として1を設定）
        ];
    }
}