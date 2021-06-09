<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tokens')->delete();
        
        
        
    }
}