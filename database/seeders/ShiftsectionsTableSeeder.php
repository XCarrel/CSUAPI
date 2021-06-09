<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftsectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftsections')->delete();
        
        \DB::table('shiftsections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Centrale & Tâches',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Ecrans de communication & Trafic',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Matériel & Télécom',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Véhicules & Interventions',
            ),
        ));
        
        
    }
}