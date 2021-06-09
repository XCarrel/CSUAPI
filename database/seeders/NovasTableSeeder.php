<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NovasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('novas')->delete();
        
        \DB::table('novas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 31,
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 32,
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 33,
            ),
            3 => 
            array (
                'id' => 4,
                'number' => 35,
            ),
            4 => 
            array (
                'id' => 5,
                'number' => 36,
            ),
            5 => 
            array (
                'id' => 11,
                'number' => 43,
            ),
            6 => 
            array (
                'id' => 6,
                'number' => 57,
            ),
            7 => 
            array (
                'id' => 7,
                'number' => 58,
            ),
            8 => 
            array (
                'id' => 8,
                'number' => 75,
            ),
            9 => 
            array (
                'id' => 9,
                'number' => 76,
            ),
            10 => 
            array (
                'id' => 10,
                'number' => 77,
            ),
        ));
        
        
    }
}