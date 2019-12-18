<?php

use Illuminate\Database\Seeder;

class InternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interns')->insert([
            'firstname'=> 'Elisabeth',
            'lastname'=> 'Hoarau',
            'age'=>30,
            'phone_number'=>026200000,
            'email'=>'elisabeth.hoarau@KnDigit.com',
        ]);

        DB::table('interns')->insert([
            'firstname'=> 'Benoît',
            'lastname'=> 'Perus',
            'age'=>32,
            'phone_number'=>004100000,
            'email'=>'benoit.perus@yaute.fr',
        ]);

        DB::table('interns')->insert([
            'firstname'=> 'Océane',
            'lastname'=> 'Belardi',
            'age'=>31,
            'phone_number'=>003300000,
            'email'=>'oceane.belardi@nougat.fr',
        ]);

        DB::table('interns')->insert([
            'firstname'=> 'Selçuk',
            'lastname'=> 'Orkun',
            'age'=>63,
            'phone_number'=>'0090000000',
            'email'=>'orkun.selcuk@kebab.fr',
        ]);
    }
}

