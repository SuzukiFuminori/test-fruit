<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '春',
        ];
        DB::table('Seasons')->insert($param);
        $param = [
            'name' => '夏',
        ];
        DB::table('Seasons')->insert($param);
        $param = [
            'name' => '秋   ',
        ];
        DB::table('Seasons')->insert($param);
        $param = [
            'name' => '冬',
        ];
        DB::table('Seasons')->insert($param);
    }
}
