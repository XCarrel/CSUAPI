<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrugsheetUseBatchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drugsheet_use_batch')->delete();
        
        \DB::table('drugsheet_use_batch')->insert(array (
            0 => 
            array (
                'id' => 109,
                'drugsheet_id' => 23,
                'batch_id' => 4,
            ),
            1 => 
            array (
                'id' => 110,
                'drugsheet_id' => 23,
                'batch_id' => 8,
            ),
            2 => 
            array (
                'id' => 111,
                'drugsheet_id' => 23,
                'batch_id' => 13,
            ),
        ));
        
        
    }
}