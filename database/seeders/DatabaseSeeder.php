<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run() :void
    {
        $categories = Category::factory(5)->create();

        User::factory(10)->create()->each(function ($user) use ($categories) {
            Post::factory(rand(3, 1))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id
                ]);
        });
    }
}
