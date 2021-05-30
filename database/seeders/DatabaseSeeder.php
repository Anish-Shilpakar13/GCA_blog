<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // ?for seeding categories
        // Category::factory(5)->create();
        //? for seeding posts 
        Post::factory(3)->create([
            'category_id' => 5
        ]);
    }
}
