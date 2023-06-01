<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
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
        // Article::factory(10)->create();

        Article::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quasi amet nam aperiam expedita soluta minus vel illum quaerat dolor.',
        ]);
        Article::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quasi amet nam aperiam expedita soluta minus vel illum quaerat dolor.',
        ]);
    }
}
