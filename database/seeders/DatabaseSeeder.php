<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();
        Tag::factory(25)->create();
        Post::factory(50)->make()->each(function ($post) {
            $post->category_id = rand(1, 10);
            $post->save();
        });

        Post::each(function ($post) {
            $post->tags()->attach(Tag::inRandomOrder()->first());
        });
    }
}
