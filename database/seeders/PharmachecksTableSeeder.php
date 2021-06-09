<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PharmachecksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pharmachecks')->delete();

        \DB::table('pharmachecks')->insert(array (
            0 =>
            array (
                'id' => 5150,
                'date' => '2021-02-01 00:00:00',
                'start' => 12,
                'end' => 11,
                'batch_id' => 4,
                'user_id' => 4,
                'drugsheet_id' => 23,
            ),
            1 =>
            array (
                'id' => 5151,
                'date' => '2021-02-01 00:00:00',
                'start' => 8,
                'end' => 8,
                'batch_id' => 8,
                'user_id' => 8,
                'drugsheet_id' => 23,
            ),
            2 =>
            array (
                'id' => 5152,
                'date' => '2021-02-01 00:00:00',
                'start' => 6,
                'end' => 4,
                'batch_id' => 13,
                'user_id' => 12,
                'drugsheet_id' => 23,
            ),
            3 =>
            array (
                'id' => 5153,
                'date' => '2021-02-02 00:00:00',
                'start' => 11,
                'end' => 11,
                'batch_id' => 4,
                'user_id' => 7,
                'drugsheet_id' => 23,
            ),
            4 =>
            array (
                'id' => 5154,
                'date' => '2021-02-02 00:00:00',
                'start' => 8,
                'end' => 7,
                'batch_id' => 8,
                'user_id' => 8,
                'drugsheet_id' => 23,
            ),
            5 =>
            array (
                'id' => 5155,
                'date' => '2021-02-02 00:00:00',
                'start' => 4,
                'end' => 4,
                'batch_id' => 13,
                'user_id' => 2,
                'drugsheet_id' => 23,
            ),
            6 =>
            array (
                'id' => 5156,
                'date' => '2021-02-03 00:00:00',
                'start' => 11,
                'end' => NULL,
                'batch_id' => 4,
                'user_id' => 7,
                'drugsheet_id' => 23,
            ),
            7 =>
            array (
                'id' => 5157,
                'date' => '2021-02-03 00:00:00',
                'start' => 7,
                'end' => NULL,
                'batch_id' => 8,
                'user_id' => 6,
                'drugsheet_id' => 23,
            ),
            8 =>
            array (
                'id' => 5158,
                'date' => '2021-02-03 00:00:00',
                'start' => 4,
                'end' => NULL,
                'batch_id' => 13,
                'user_id' => 4,
                'drugsheet_id' => 23,
            ),
        ));


    }
}
