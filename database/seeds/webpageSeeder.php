<?php

use Illuminate\Database\Seeder;

class webpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('webpages')->insert([
            'page_id' => 1,
            'type' => Str::random(10),
            'editable' => 1,
            'title' => Str::random(10),
            'subtitle' => Str::random(10)
        ]);
    }
}
