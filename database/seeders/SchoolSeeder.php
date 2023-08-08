<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        DB::table('schools')->insert([
        [
            'name' => '高校',
        ],
        [
            'name' => '大学',
        ],
        [
            'name' => '専門学校',
        ]]);
    }
}
