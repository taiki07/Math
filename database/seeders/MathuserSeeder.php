<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MathuserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('mathusers')->insert([
        [
            'school_id' => '1',
            'unit_id' => '1',
            'test_id' => '1',
            'name' => '田中',
        ],
        [
            'school_id' => '2',
            'unit_id' => '2',
            'test_id' => '2',
            'name' => '佐藤',
        ],
        [
            'school_id' => '3',
            'unit_id' => '3',
            'test_id' => '3',
            'name' => '木村',
        ]]);
    }
    
}
