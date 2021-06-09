<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RestocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('restocks')->delete();
        
        \DB::table('restocks')->insert(array (
            0 => 
            array (
                'id' => 5,
                'date' => '2021-02-01 00:00:00',
                'quantity' => 1,
                'batch_id' => 4,
                'nova_id' => 5,
                'user_id' => 2,
                'drugsheet_id' => 23,
            ),
            1 => 
            array (
                'id' => 6,
                'date' => '2021-02-01 00:00:00',
                'quantity' => 2,
                'batch_id' => 13,
                'nova_id' => 3,
                'user_id' => 3,
                'drugsheet_id' => 23,
            ),
        ));
        
        
    }
}