<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrugsheetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drugsheets')->delete();
        
        \DB::table('drugsheets')->insert(array (
            0 => 
            array (
                'id' => 22,
                'week' => 2105,
                'status_id' => 2,
                'base_id' => 1,
            ),
            1 => 
            array (
                'id' => 23,
                'week' => 2105,
                'status_id' => 2,
                'base_id' => 2,
            ),
            2 => 
            array (
                'id' => 25,
                'week' => 2105,
                'status_id' => 2,
                'base_id' => 3,
            ),
            3 => 
            array (
                'id' => 26,
                'week' => 2105,
                'status_id' => 2,
                'base_id' => 4,
            ),
            4 => 
            array (
                'id' => 27,
                'week' => 2105,
                'status_id' => 2,
                'base_id' => 5,
            ),
        ));
        
        
    }
}