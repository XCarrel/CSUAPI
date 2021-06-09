<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosheetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('todosheets')->delete();
        
        \DB::table('todosheets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'week' => 2113,
                'status_id' => 3,
                'base_id' => 1,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'week' => 2114,
                'status_id' => 3,
                'base_id' => 1,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'week' => 2115,
                'status_id' => 3,
                'base_id' => 1,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'week' => 2116,
                'status_id' => 2,
                'base_id' => 1,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'week' => 2117,
                'status_id' => 1,
                'base_id' => 1,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'week' => 2113,
                'status_id' => 3,
                'base_id' => 2,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'week' => 2114,
                'status_id' => 3,
                'base_id' => 2,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'week' => 2115,
                'status_id' => 3,
                'base_id' => 2,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'week' => 2116,
                'status_id' => 2,
                'base_id' => 2,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'week' => 2117,
                'status_id' => 1,
                'base_id' => 2,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'week' => 2113,
                'status_id' => 3,
                'base_id' => 3,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'week' => 2114,
                'status_id' => 3,
                'base_id' => 3,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'week' => 2115,
                'status_id' => 3,
                'base_id' => 3,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'week' => 2116,
                'status_id' => 2,
                'base_id' => 3,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'week' => 2117,
                'status_id' => 1,
                'base_id' => 3,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'week' => 2113,
                'status_id' => 3,
                'base_id' => 4,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'week' => 2114,
                'status_id' => 3,
                'base_id' => 4,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'week' => 2115,
                'status_id' => 3,
                'base_id' => 4,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'week' => 2116,
                'status_id' => 2,
                'base_id' => 4,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'week' => 2117,
                'status_id' => 1,
                'base_id' => 4,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'week' => 2113,
                'status_id' => 3,
                'base_id' => 5,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'week' => 2114,
                'status_id' => 3,
                'base_id' => 5,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'week' => 2115,
                'status_id' => 3,
                'base_id' => 5,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'week' => 2116,
                'status_id' => 2,
                'base_id' => 5,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'week' => 2117,
                'status_id' => 1,
                'base_id' => 5,
                'closeBy' => NULL,
                'template_name' => NULL,
            ),
        ));
        
        
    }
}