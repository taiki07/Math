<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UnitSeeder extends Seeder
{
    public function run()
    {
        DB::table('units')->insert([
            [
                'name' => '解析学',
            ],
            [
                'name' => '代数学',
            ],
            [
                'name' => '位相数学',
            ],
            [
                'name' => '統計学',
            ],
            [
                'name' => '複素解析学',
            ],
            [
                'name' => '数列',
            ],
            [
                'name' => 'ベクトル',
            ],
            [
                'name' => '確率',
            ],
            [
                'name' => 'データの分析',
            ],
            [
                'name' => '整数',
            ]]);
    }
}
