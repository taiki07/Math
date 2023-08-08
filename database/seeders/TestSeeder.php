<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TestSeeder extends Seeder
{
    public function run()
    {
        DB::table('tests')->insert([
            [
                'name' => '1学期中間テスト',
            ],
            [
                'name' => '1学期期末テスト',
            ],
            [
                'name' => '2学期中間テスト',
            ],
            [
                'name' => '2学期期末テスト',
            ],
            [
                'name' => '3学期中間テスト',
            ],
            [
                'name' => '3学期期末テスト',
            ],
            [
                'name' => '前期中間テスト',
            ],
            [
                'name' => '前期期末テスト',
            ],
            [
                'name' => '後期中間テスト',
            ],
            [
                'name' => '後期期末テスト',
            ]]);
    }
}
