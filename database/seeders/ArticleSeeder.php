<?php
namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Categories::all();

        Article::create([
            'content' => 'This is a sample article.',
            'category_id' => 
        ]);
    }
}
