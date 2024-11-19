<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(),
            'content' => $this->faker->realText(),
            'user_id' => 1 // 例として1を設定。必要に応じて変更
            // 'user_id' を削除
        ];
    }
}