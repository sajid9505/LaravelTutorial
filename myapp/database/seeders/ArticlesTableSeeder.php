<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Facrtory::create();

        //creating dummy articles
        for ($i=0; $i<50; $i++){
            Article::create([
                'title'=> $faker->sentence,
                'body'=> $faker->paragraph,
            ]);
        }
    }
}
