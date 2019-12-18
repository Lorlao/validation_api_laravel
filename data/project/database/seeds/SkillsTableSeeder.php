<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name'=>'html',
        ]);

        DB::table('skills')->insert([
            'name'=>'css',
        ]);

        DB::table('skills')->insert([
            'name'=>'javascript',
        ]);

        DB::table('skills')->insert([
            'name'=>'php',
        ]);

    }
}
