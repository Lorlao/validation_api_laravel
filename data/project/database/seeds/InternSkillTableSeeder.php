<?php

use Illuminate\Database\Seeder;

class InternSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        for($i=1;$i<4;$i++){
            for($j=1;$j<4;$j++){  
                DB::table('intern_skill')->insert([
                    'intern_id' =>$i,
                    'skill_id' =>$j,
                ]);
            }
        }
    }
    */

    public function run()
    {
        for ($i=1; $i <= 4; $i++) { 
            for ($j=1; $j <= 4; $j++) { 
                DB::table('intern_skills')->insert([
                    'intern_id' => $i,
                    'skill_id' => $j
                ]);
            }
        }
    }
}
