<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
        [
            'name' => 'note1',
            'text' => '1投稿目',
            'comment' => 'お願いします。',
        ],
        [
            'name' => 'note2',
            'text' => '2投稿目',
            'comment' => 'お願いします。',
        ],
        [
            'name' => 'note3',
            'text' => '3投稿目',
            'comment' => 'お願いします。',
        ]]);
    }
}
