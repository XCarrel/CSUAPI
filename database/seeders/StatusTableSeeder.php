<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('status')->delete();
        
        \DB::table('status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'blank',
                'displayname' => 'En préparation',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'open',
                'displayname' => 'Actif',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'close',
                'displayname' => 'Clôturé',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'reopen',
                'displayname' => 'En correction',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'archive',
                'displayname' => 'Archivé',
            ),
        ));
        
        
    }
}