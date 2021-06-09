<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrugsheetUseNovaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drugsheet_use_nova')->delete();
        
        \DB::table('drugsheet_use_nova')->insert(array (
            0 => 
            array (
                'id' => 51,
                'drugsheet_id' => 23,
                'nova_id' => 3,
            ),
            1 => 
            array (
                'id' => 52,
                'drugsheet_id' => 23,
                'nova_id' => 5,
            ),
        ));
        
        
    }
}