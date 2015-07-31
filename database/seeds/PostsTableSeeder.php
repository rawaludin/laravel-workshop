<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,3) as $i) {
            App\Category::create(['title'=>$faker->word]);
        }

        foreach (range(1,5) as $i) {
            App\Post::create([
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'category_id'=>rand(1,3)
            ]);
        }
    }
}
