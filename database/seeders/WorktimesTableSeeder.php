<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorktimesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('worktimes')->delete();

        \DB::table('worktimes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 322,
                'type' => '7',
                'day' => 0,
                'base_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 305,
                'type' => '5',
                'day' => 1,
                'base_id' => 3,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 503,
                'type' => 'Reprise HC',
                'day' => NULL,
                'base_id' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 4057,
                'type' => '8',
                'day' => 0,
                'base_id' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 307,
                'type' => '7',
                'day' => 1,
                'base_id' => 1,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 314,
                'type' => '8',
                'day' => 1,
                'base_id' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 402,
                'type' => 'Formation',
                'day' => NULL,
                'base_id' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 320,
                'type' => '5',
                'day' => 0,
                'base_id' => 3,
            ),
            8 =>
            array (
                'id' => 9,
                'code' => 304,
                'type' => '4',
                'day' => 1,
                'base_id' => 2,
            ),
            9 =>
            array (
                'id' => 10,
                'code' => 306,
                'type' => '6',
                'day' => 1,
                'base_id' => 5,
            ),
            10 =>
            array (
                'id' => 11,
                'code' => 502,
                'type' => 'Désir de congé',
                'day' => NULL,
                'base_id' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'code' => 501,
                'type' => 'Vacances',
                'day' => NULL,
                'base_id' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'code' => 317,
                'type' => '1',
                'day' => 0,
                'base_id' => 4,
            ),
            13 =>
            array (
                'id' => 14,
                'code' => 301,
                'type' => '1',
                'day' => 1,
                'base_id' => 4,
            ),
            14 =>
            array (
                'id' => 15,
                'code' => 302,
                'type' => '2',
                'day' => 1,
                'base_id' => 4,
            ),
            15 =>
            array (
                'id' => 16,
                'code' => 519,
                'type' => 'Absence imprévue',
                'day' => NULL,
                'base_id' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'code' => 319,
                'type' => '4',
                'day' => 0,
                'base_id' => 2,
            ),
            17 =>
            array (
                'id' => 18,
                'code' => 112,
                'type' => 'L',
                'day' => NULL,
                'base_id' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'code' => 400,
                'type' => 'Divers institutionnels',
                'day' => NULL,
                'base_id' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'code' => 324,
                'type' => NULL,
                'day' => NULL,
                'base_id' => 4,
            ),
            20 =>
            array (
                'id' => 21,
                'code' => 600,
                'type' => 'Rendez-vous médicaux',
                'day' => NULL,
                'base_id' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'code' => 505,
                'type' => 'Service militaire',
                'day' => NULL,
                'base_id' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'code' => 321,
                'type' => '6',
                'day' => 0,
                'base_id' => 5,
            ),
            23 =>
            array (
                'id' => 24,
                'code' => 504,
                'type' => 'Absence payée',
                'day' => NULL,
                'base_id' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'code' => 614,
                'type' => 'Télétravail',
                'day' => NULL,
                'base_id' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'code' => 609,
                'type' => 'Désir de congé non prioritaire',
                'day' => NULL,
                'base_id' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'code' => 516,
                'type' => 'Responsabilité familiale',
                'day' => NULL,
                'base_id' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'code' => 405,
                'type' => 'Pompiers St-Loup',
                'day' => NULL,
                'base_id' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'code' => 403,
                'type' => 'Ecole professionnelle',
                'day' => NULL,
                'base_id' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'code' => 506,
                'type' => 'Déménagement',
                'day' => NULL,
                'base_id' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'code' => 509,
                'type' => 'Congé maternité',
                'day' => NULL,
                'base_id' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'code' => 511,
                'type' => 'Congé allaitement',
                'day' => NULL,
                'base_id' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'code' => 604,
                'type' => 'Maladie longue durée',
                'day' => NULL,
                'base_id' => NULL,
            ),
        ));


    }
}
