<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //默认是注释的 2017 12 8 打开 注释
        $this->call(UsersTableSeeder::class);
    }
}
