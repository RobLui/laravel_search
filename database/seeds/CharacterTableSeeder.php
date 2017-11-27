<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('characters')->insert([
//
//            'title' => 'King',
//            'name' => 'Robbert',
//            'text' => 'text that belongs to King Robbert :)',
//            'created_at' => NOW(),
//            'updated_at' => NOW()
//        ]);

        DB::table('characters')->insert([

            'title' => str_random(10),
            'name' => str_random(10),
            'text' => str_random(40),
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
