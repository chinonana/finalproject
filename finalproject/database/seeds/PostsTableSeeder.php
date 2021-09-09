<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
            'title' => 'url',
            'body' => '感想1',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想2',
            'category_id' => '2',
            ],
            [
            'title' => 'url',
            'body' => '感想3',
            'category_id' => '3',
            ],
            [
            'title' => 'url',
            'body' => '感想4',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想5',
            'category_id' => '2',
            ],
            [
            'title' => 'url',
            'body' => '感想6',
            'category_id' => '4',
            ],
            [
            'title' => 'url',
            'body' => '感想7',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想8',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想9',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想10',
            'category_id' => '1',
            ],
            [
            'title' => 'url',
            'body' => '感想11',
            'category_id' => '1',
            ],
            
        ]);
    }
}
