<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tagseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_name' => 'learn',
            'is_active' => true,
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'career',
            'is_active' => true,
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'gg',
            'is_active' => true,
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'learn',
            'is_active' => true,
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'career',
            'is_active' => true,
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'gg',
            'is_active' => true,
        ]);
    }
}
