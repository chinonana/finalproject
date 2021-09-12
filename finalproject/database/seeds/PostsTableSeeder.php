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
            'title' => '作品',
            'body' => 'URL1',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL2',
            'category_id' => '2',
            ],
            [
            'title' => '作品',
            'body' => 'URL3',
            'category_id' => '3',
            ],
            [
            'title' => '作品',
            'body' => 'URL4',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL5',
            'category_id' => '2',
            ],
            [
            'title' => '作品',
            'body' => 'URL6',
            'category_id' => '4',
            ],
            [
            'title' => '作品',
            'body' => 'URL7',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL8',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL9',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL10',
            'category_id' => '1',
            ],
            [
            'title' => '作品',
            'body' => 'URL11',
            'category_id' => '1',
            ],
            
        ]);
    }
}
