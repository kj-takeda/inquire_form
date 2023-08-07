<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//←追加

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $types = ['男性','女性',];

        for($i=1;$i <= 2;$i++) {
            DB::table('genders')->insert([
                'id'   => $i,
                'type' => $types[$i - 1],
            ]);
        }
    }
}
