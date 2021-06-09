<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NovachecksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('novachecks')->delete();

        \DB::table('novachecks')->insert(array (
            0 =>
            array (
                'id' => 673,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 1,
                'nova_id' => 3,
                'user_id' => 11,
                'drugsheet_id' => 23,
            ),
            1 =>
            array (
                'id' => 674,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 1,
                'nova_id' => 5,
                'user_id' => 12,
                'drugsheet_id' => 23,
            ),
            2 =>
            array (
                'id' => 675,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 2,
                'nova_id' => 3,
                'user_id' => 10,
                'drugsheet_id' => 23,
            ),
            3 =>
            array (
                'id' => 676,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 2,
                'nova_id' => 5,
                'user_id' => 9,
                'drugsheet_id' => 23,
            ),
            4 =>
            array (
                'id' => 677,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 3,
                'nova_id' => 3,
                'user_id' => 8,
                'drugsheet_id' => 23,
            ),
            5 =>
            array (
                'id' => 678,
                'date' => '2021-02-01 00:00:00',
                'start' => 5,
                'end' => 5,
                'drug_id' => 3,
                'nova_id' => 5,
                'user_id' => 7,
                'drugsheet_id' => 23,
            ),
            6 =>
            array (
                'id' => 679,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 1,
                'nova_id' => 3,
                'user_id' => 6,
                'drugsheet_id' => 23,
            ),
            7 =>
            array (
                'id' => 680,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 1,
                'nova_id' => 5,
                'user_id' => 5,
                'drugsheet_id' => 23,
            ),
            8 =>
            array (
                'id' => 681,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 2,
                'nova_id' => 3,
                'user_id' => 4,
                'drugsheet_id' => 23,
            ),
            9 =>
            array (
                'id' => 682,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 5,
                'drug_id' => 2,
                'nova_id' => 5,
                'user_id' => 3,
                'drugsheet_id' => 23,
            ),
            10 =>
            array (
                'id' => 683,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 3,
                'nova_id' => 3,
                'user_id' => 2,
                'drugsheet_id' => 23,
            ),
            11 =>
            array (
                'id' => 684,
                'date' => '2021-02-02 00:00:00',
                'start' => 6,
                'end' => 6,
                'drug_id' => 3,
                'nova_id' => 5,
                'user_id' => 1,
                'drugsheet_id' => 23,
            ),
            12 =>
            array (
                'id' => 685,
                'date' => '2021-02-03 00:00:00',
                'start' => 4,
                'end' => NULL,
                'drug_id' => 1,
                'nova_id' => 3,
                'user_id' => 104,
                'drugsheet_id' => 23,
            ),
            13 =>
            array (
                'id' => 686,
                'date' => '2021-02-03 00:00:00',
                'start' => 6,
                'end' => NULL,
                'drug_id' => 1,
                'nova_id' => 5,
                'user_id' => 3,
                'drugsheet_id' => 23,
            ),
            14 =>
            array (
                'id' => 687,
                'date' => '2021-02-03 00:00:00',
                'start' => 6,
                'end' => NULL,
                'drug_id' => 2,
                'nova_id' => 3,
                'user_id' => 2,
                'drugsheet_id' => 23,
            ),
            15 =>
            array (
                'id' => 688,
                'date' => '2021-02-03 00:00:00',
                'start' => 6,
                'end' => NULL,
                'drug_id' => 2,
                'nova_id' => 5,
                'user_id' => 7,
                'drugsheet_id' => 23,
            ),
            16 =>
            array (
                'id' => 689,
                'date' => '2021-02-03 00:00:00',
                'start' => 6,
                'end' => NULL,
                'drug_id' => 3,
                'nova_id' => 3,
                'user_id' => 9,
                'drugsheet_id' => 23,
            ),
            17 =>
            array (
                'id' => 690,
                'date' => '2021-02-03 00:00:00',
                'start' => 6,
                'end' => NULL,
                'drug_id' => 3,
                'nova_id' => 5,
                'user_id' => 12,
                'drugsheet_id' => 23,
            ),
        ));


    }
}
