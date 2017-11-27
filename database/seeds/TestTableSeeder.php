<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([

            'title' => str_random(10),
            'text' => str_random(40),
            'tag' => str_random(5),
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
