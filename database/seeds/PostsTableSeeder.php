<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i<20; $i++) 
        { 
            DB::table('posts')->insert([
                'title' => $faker->text($maxNbchars = 50) ,
                'text' => $faker ->text,
                'price'=> $faker ->randomNumber(4),
                'user_id' => rand(1, 5),
                'category_id' => rand(1, 5),
                'country_id' => rand(1, 6),
            ]);
        }
    }
}
