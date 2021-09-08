<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
            'category'=>'パロディ',
            ],
            [
            'category'=>'夢（女）',
            ],
            [
            'category'=>'夢（男）',
            ],
            [
            'category'=>'原作のみ',
            ],
        ]);
    }
}
