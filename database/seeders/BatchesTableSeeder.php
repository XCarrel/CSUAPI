<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('batches')->delete();
        
        \DB::table('batches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 'F1us',
                'state' => 'used',
                'drug_id' => 1,
                'base_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 'F1ne',
                'state' => 'new',
                'drug_id' => 1,
                'base_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 'F1in',
                'state' => 'inuse',
                'drug_id' => 1,
                'base_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'number' => 'M1us',
                'state' => 'used',
                'drug_id' => 2,
                'base_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'number' => 'M1ne',
                'state' => 'new',
                'drug_id' => 2,
                'base_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'number' => 'M1in',
                'state' => 'inuse',
                'drug_id' => 2,
                'base_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'number' => 'T1us',
                'state' => 'used',
                'drug_id' => 3,
                'base_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'number' => 'T1ne',
                'state' => 'new',
                'drug_id' => 3,
                'base_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'number' => 'T1in',
                'state' => 'inuse',
                'drug_id' => 3,
                'base_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'number' => 'F2us',
                'state' => 'used',
                'drug_id' => 1,
                'base_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'number' => 'F2ne',
                'state' => 'new',
                'drug_id' => 1,
                'base_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'number' => 'F2in',
                'state' => 'inuse',
                'drug_id' => 1,
                'base_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'number' => 'M2us',
                'state' => 'used',
                'drug_id' => 2,
                'base_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'number' => 'M2ne',
                'state' => 'new',
                'drug_id' => 2,
                'base_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'number' => 'M2in',
                'state' => 'inuse',
                'drug_id' => 2,
                'base_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'number' => 'T2us',
                'state' => 'used',
                'drug_id' => 3,
                'base_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'number' => 'T2ne',
                'state' => 'new',
                'drug_id' => 3,
                'base_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'number' => 'T2in',
                'state' => 'inuse',
                'drug_id' => 3,
                'base_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'number' => 'F3us',
                'state' => 'used',
                'drug_id' => 1,
                'base_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'number' => 'F3ne',
                'state' => 'new',
                'drug_id' => 1,
                'base_id' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'number' => 'F3in',
                'state' => 'inuse',
                'drug_id' => 1,
                'base_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'number' => 'M3us',
                'state' => 'used',
                'drug_id' => 2,
                'base_id' => 3,
            ),
            22 => 
            array (
                'id' => 23,
                'number' => 'M3ne',
                'state' => 'new',
                'drug_id' => 2,
                'base_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'number' => 'M3in',
                'state' => 'inuse',
                'drug_id' => 2,
                'base_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'number' => 'T3us',
                'state' => 'used',
                'drug_id' => 3,
                'base_id' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'number' => 'T3ne',
                'state' => 'new',
                'drug_id' => 3,
                'base_id' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'number' => 'T3in',
                'state' => 'inuse',
                'drug_id' => 3,
                'base_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'number' => 'F4us',
                'state' => 'used',
                'drug_id' => 1,
                'base_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'number' => 'F4ne',
                'state' => 'new',
                'drug_id' => 1,
                'base_id' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'number' => 'F4in',
                'state' => 'inuse',
                'drug_id' => 1,
                'base_id' => 4,
            ),
            30 => 
            array (
                'id' => 31,
                'number' => 'M4us',
                'state' => 'used',
                'drug_id' => 2,
                'base_id' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'number' => 'M4ne',
                'state' => 'new',
                'drug_id' => 2,
                'base_id' => 4,
            ),
            32 => 
            array (
                'id' => 33,
                'number' => 'M4in',
                'state' => 'inuse',
                'drug_id' => 2,
                'base_id' => 4,
            ),
            33 => 
            array (
                'id' => 34,
                'number' => 'T4us',
                'state' => 'used',
                'drug_id' => 3,
                'base_id' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'number' => 'T4ne',
                'state' => 'new',
                'drug_id' => 3,
                'base_id' => 4,
            ),
            35 => 
            array (
                'id' => 36,
                'number' => 'T4in',
                'state' => 'inuse',
                'drug_id' => 3,
                'base_id' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'number' => 'F5us',
                'state' => 'used',
                'drug_id' => 1,
                'base_id' => 5,
            ),
            37 => 
            array (
                'id' => 38,
                'number' => 'F5ne',
                'state' => 'new',
                'drug_id' => 1,
                'base_id' => 5,
            ),
            38 => 
            array (
                'id' => 39,
                'number' => 'F5in',
                'state' => 'inuse',
                'drug_id' => 1,
                'base_id' => 5,
            ),
            39 => 
            array (
                'id' => 40,
                'number' => 'M5us',
                'state' => 'used',
                'drug_id' => 2,
                'base_id' => 5,
            ),
            40 => 
            array (
                'id' => 41,
                'number' => 'M5ne',
                'state' => 'new',
                'drug_id' => 2,
                'base_id' => 5,
            ),
            41 => 
            array (
                'id' => 42,
                'number' => 'M5in',
                'state' => 'inuse',
                'drug_id' => 2,
                'base_id' => 5,
            ),
            42 => 
            array (
                'id' => 43,
                'number' => 'T5us',
                'state' => 'used',
                'drug_id' => 3,
                'base_id' => 5,
            ),
            43 => 
            array (
                'id' => 44,
                'number' => 'T5ne',
                'state' => 'new',
                'drug_id' => 3,
                'base_id' => 5,
            ),
            44 => 
            array (
                'id' => 45,
                'number' => 'T5in',
                'state' => 'inuse',
                'drug_id' => 3,
                'base_id' => 5,
            ),
        ));
        
        
    }
}