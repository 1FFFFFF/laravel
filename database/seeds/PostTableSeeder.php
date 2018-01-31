<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    //php artisan db:seed --class=PostTableSeeder
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Http\Models\Blog\Post::truncate();
        factory(App\Http\Models\Blog\Post::class, 20)->create();
    }
}
