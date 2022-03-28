<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $post = new Post();
            $post->title = $faker->text(20);
            $post->description = $faker->paragraphs(2, true);
            $post->image = $faker->imageUrl(250, 250);
            $post->save();
        }
    }
}
