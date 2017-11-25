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
        DB::table('tests')->insert([

            'title' => 'Leuke titel',
            'text' => 'random teksts',
            'tag' => 'vuur',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

    }
}
