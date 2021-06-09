<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bases')->delete();
        
        \DB::table('bases')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'La Vallée-de-Joux',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Payerne',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Saint-Loup',
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Ste-Croix',
            ),
            4 => 
            array (
                'id' => 1,
                'name' => 'Yverdon',
            ),
        ));
        
        
    }
}