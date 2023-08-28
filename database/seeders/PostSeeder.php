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
            'mathuser_id' => '1',
            'school_id' => '1',
            'unit_id' => '1',
            'test_id' => '1',
            'name' => 'note1',
            'text' => '1投稿目',
            'comment' => 'お願いします。',
        ],
        [
            'mathuser_id' => '1',
            'school_id' => '2',
            'unit_id' => '2',
            'test_id' => '2',
            'name' => 'note2',
            'text' => '2投稿目',
            'comment' => 'お願いします。',
        ],
        [
            'mathuser_id' => '2',
            'school_id' => '3',
            'unit_id' => '3',
            'test_id' => '3',
            'name' => 'note3',
            'text' => '3投稿目',
            'comment' => 'お願いします。',
        ]]);
    }
}
