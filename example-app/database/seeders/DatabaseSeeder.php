<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(9)->create();
        $this->call(PostSeeder::class);

        \App\Models\Post::factory(9)->create();
        $this->call(PostSeeder::class);   

        \App\Models\Category::factory(5)->create();
        $this->call(PostSeeder::class);   
    }
}
