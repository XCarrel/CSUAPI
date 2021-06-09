<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftmodelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftmodels')->delete();
        
        \DB::table('shiftmodels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Vide',
                'nbTeamD' => 1,
                'nbTeamN' => 1,
                'suggested' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Classique',
                'nbTeamD' => 1,
                'nbTeamN' => 1,
                'suggested' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Modèle de Test 1',
                'nbTeamD' => 1,
                'nbTeamN' => 1,
                'suggested' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Modèle de Test 2',
                'nbTeamD' => 1,
                'nbTeamN' => 1,
                'suggested' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Modèle de Test 3',
                'nbTeamD' => 1,
                'nbTeamN' => 1,
                'suggested' => 1,
            ),
        ));
        
        
    }
}