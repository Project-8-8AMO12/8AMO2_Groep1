<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(webpageSeeder::class);
        $this->call(articlesContent::class);
        $this->call(cursusContent::class);
        $this->call(userSeeder::class);
    }

}
