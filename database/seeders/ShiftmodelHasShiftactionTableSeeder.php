<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftmodelHasShiftactionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftmodel_has_shiftaction')->delete();
        
        \DB::table('shiftmodel_has_shiftaction')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shiftaction_id' => 1,
                'shiftmodel_id' => 2,
            ),
            1 => 
            array (
                'id' => 20,
                'shiftaction_id' => 1,
                'shiftmodel_id' => 3,
            ),
            2 => 
            array (
                'id' => 2,
                'shiftaction_id' => 2,
                'shiftmodel_id' => 2,
            ),
            3 => 
            array (
                'id' => 21,
                'shiftaction_id' => 2,
                'shiftmodel_id' => 3,
            ),
            4 => 
            array (
                'id' => 32,
                'shiftaction_id' => 2,
                'shiftmodel_id' => 4,
            ),
            5 => 
            array (
                'id' => 43,
                'shiftaction_id' => 2,
                'shiftmodel_id' => 5,
            ),
            6 => 
            array (
                'id' => 3,
                'shiftaction_id' => 3,
                'shiftmodel_id' => 2,
            ),
            7 => 
            array (
                'id' => 22,
                'shiftaction_id' => 3,
                'shiftmodel_id' => 3,
            ),
            8 => 
            array (
                'id' => 33,
                'shiftaction_id' => 3,
                'shiftmodel_id' => 4,
            ),
            9 => 
            array (
                'id' => 44,
                'shiftaction_id' => 3,
                'shiftmodel_id' => 5,
            ),
            10 => 
            array (
                'id' => 4,
                'shiftaction_id' => 4,
                'shiftmodel_id' => 2,
            ),
            11 => 
            array (
                'id' => 45,
                'shiftaction_id' => 4,
                'shiftmodel_id' => 5,
            ),
            12 => 
            array (
                'id' => 5,
                'shiftaction_id' => 5,
                'shiftmodel_id' => 2,
            ),
            13 => 
            array (
                'id' => 23,
                'shiftaction_id' => 5,
                'shiftmodel_id' => 3,
            ),
            14 => 
            array (
                'id' => 34,
                'shiftaction_id' => 5,
                'shiftmodel_id' => 4,
            ),
            15 => 
            array (
                'id' => 6,
                'shiftaction_id' => 6,
                'shiftmodel_id' => 2,
            ),
            16 => 
            array (
                'id' => 24,
                'shiftaction_id' => 6,
                'shiftmodel_id' => 3,
            ),
            17 => 
            array (
                'id' => 35,
                'shiftaction_id' => 6,
                'shiftmodel_id' => 4,
            ),
            18 => 
            array (
                'id' => 46,
                'shiftaction_id' => 6,
                'shiftmodel_id' => 5,
            ),
            19 => 
            array (
                'id' => 7,
                'shiftaction_id' => 7,
                'shiftmodel_id' => 2,
            ),
            20 => 
            array (
                'id' => 47,
                'shiftaction_id' => 7,
                'shiftmodel_id' => 5,
            ),
            21 => 
            array (
                'id' => 8,
                'shiftaction_id' => 8,
                'shiftmodel_id' => 2,
            ),
            22 => 
            array (
                'id' => 48,
                'shiftaction_id' => 8,
                'shiftmodel_id' => 5,
            ),
            23 => 
            array (
                'id' => 9,
                'shiftaction_id' => 9,
                'shiftmodel_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'shiftaction_id' => 9,
                'shiftmodel_id' => 3,
            ),
            25 => 
            array (
                'id' => 36,
                'shiftaction_id' => 9,
                'shiftmodel_id' => 4,
            ),
            26 => 
            array (
                'id' => 10,
                'shiftaction_id' => 10,
                'shiftmodel_id' => 2,
            ),
            27 => 
            array (
                'id' => 49,
                'shiftaction_id' => 10,
                'shiftmodel_id' => 5,
            ),
            28 => 
            array (
                'id' => 11,
                'shiftaction_id' => 11,
                'shiftmodel_id' => 2,
            ),
            29 => 
            array (
                'id' => 50,
                'shiftaction_id' => 11,
                'shiftmodel_id' => 5,
            ),
            30 => 
            array (
                'id' => 12,
                'shiftaction_id' => 12,
                'shiftmodel_id' => 2,
            ),
            31 => 
            array (
                'id' => 26,
                'shiftaction_id' => 12,
                'shiftmodel_id' => 3,
            ),
            32 => 
            array (
                'id' => 37,
                'shiftaction_id' => 12,
                'shiftmodel_id' => 4,
            ),
            33 => 
            array (
                'id' => 51,
                'shiftaction_id' => 12,
                'shiftmodel_id' => 5,
            ),
            34 => 
            array (
                'id' => 13,
                'shiftaction_id' => 13,
                'shiftmodel_id' => 2,
            ),
            35 => 
            array (
                'id' => 27,
                'shiftaction_id' => 13,
                'shiftmodel_id' => 3,
            ),
            36 => 
            array (
                'id' => 52,
                'shiftaction_id' => 13,
                'shiftmodel_id' => 5,
            ),
            37 => 
            array (
                'id' => 14,
                'shiftaction_id' => 14,
                'shiftmodel_id' => 2,
            ),
            38 => 
            array (
                'id' => 53,
                'shiftaction_id' => 14,
                'shiftmodel_id' => 5,
            ),
            39 => 
            array (
                'id' => 15,
                'shiftaction_id' => 15,
                'shiftmodel_id' => 2,
            ),
            40 => 
            array (
                'id' => 28,
                'shiftaction_id' => 15,
                'shiftmodel_id' => 3,
            ),
            41 => 
            array (
                'id' => 38,
                'shiftaction_id' => 15,
                'shiftmodel_id' => 4,
            ),
            42 => 
            array (
                'id' => 54,
                'shiftaction_id' => 15,
                'shiftmodel_id' => 5,
            ),
            43 => 
            array (
                'id' => 16,
                'shiftaction_id' => 16,
                'shiftmodel_id' => 2,
            ),
            44 => 
            array (
                'id' => 29,
                'shiftaction_id' => 16,
                'shiftmodel_id' => 3,
            ),
            45 => 
            array (
                'id' => 39,
                'shiftaction_id' => 16,
                'shiftmodel_id' => 4,
            ),
            46 => 
            array (
                'id' => 55,
                'shiftaction_id' => 16,
                'shiftmodel_id' => 5,
            ),
            47 => 
            array (
                'id' => 17,
                'shiftaction_id' => 17,
                'shiftmodel_id' => 2,
            ),
            48 => 
            array (
                'id' => 30,
                'shiftaction_id' => 17,
                'shiftmodel_id' => 3,
            ),
            49 => 
            array (
                'id' => 40,
                'shiftaction_id' => 17,
                'shiftmodel_id' => 4,
            ),
            50 => 
            array (
                'id' => 56,
                'shiftaction_id' => 17,
                'shiftmodel_id' => 5,
            ),
            51 => 
            array (
                'id' => 18,
                'shiftaction_id' => 18,
                'shiftmodel_id' => 2,
            ),
            52 => 
            array (
                'id' => 31,
                'shiftaction_id' => 18,
                'shiftmodel_id' => 3,
            ),
            53 => 
            array (
                'id' => 41,
                'shiftaction_id' => 18,
                'shiftmodel_id' => 4,
            ),
            54 => 
            array (
                'id' => 57,
                'shiftaction_id' => 18,
                'shiftmodel_id' => 5,
            ),
            55 => 
            array (
                'id' => 19,
                'shiftaction_id' => 19,
                'shiftmodel_id' => 2,
            ),
            56 => 
            array (
                'id' => 42,
                'shiftaction_id' => 19,
                'shiftmodel_id' => 4,
            ),
            57 => 
            array (
                'id' => 58,
                'shiftaction_id' => 19,
                'shiftmodel_id' => 5,
            ),
        ));
        
        
    }
}