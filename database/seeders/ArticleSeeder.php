<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $article_count = rand(3, 10);

        for ($i=0; $i < $article_count; $i++) {
            Article::query()->create([
                "title" => fake()->text(32),
                "author" => fake()->userName(),
                "date_published" => fake()->dateTime(),
                "description" => fake()->realText(1024),
                "link" => fake()->url(),
            ]);
        }
    }
}
