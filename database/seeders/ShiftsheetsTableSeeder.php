<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftsheetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shiftsheets')->delete();

        \DB::table('shiftsheets')->insert(array (
            0 =>
            array (
                'id' => 1,
                'date' => '2021-06-08',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 9,
            ),
            1 =>
            array (
                'id' => 2,
                'date' => '2021-06-07',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'date' => '2021-06-06',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 7,
            ),
            3 =>
            array (
                'id' => 4,
                'date' => '2021-06-05',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 6,
            ),
            4 =>
            array (
                'id' => 5,
                'date' => '2021-06-04',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 11,
            ),
            5 =>
            array (
                'id' => 6,
                'date' => '2021-06-03',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 8,
            ),
            6 =>
            array (
                'id' => 7,
                'date' => '2021-06-02',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 3,
                'closeBy' => 7,
            ),
            7 =>
            array (
                'id' => 8,
                'date' => '2021-06-09',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 2,
                'closeBy' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'date' => '2021-06-10',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'date' => '2021-06-11',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'date' => '2021-06-12',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'date' => '2021-06-13',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'date' => '2021-06-14',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'date' => '2021-06-15',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'date' => '2021-06-16',
                'shiftmodel_id' => 2,
                'base_id' => 1,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'date' => '2021-06-08',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 5,
            ),
            16 =>
            array (
                'id' => 17,
                'date' => '2021-06-07',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 4,
            ),
            17 =>
            array (
                'id' => 18,
                'date' => '2021-06-06',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 104,
            ),
            18 =>
            array (
                'id' => 19,
                'date' => '2021-06-05',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 1,
            ),
            19 =>
            array (
                'id' => 20,
                'date' => '2021-06-04',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 1,
            ),
            20 =>
            array (
                'id' => 21,
                'date' => '2021-06-03',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 10,
            ),
            21 =>
            array (
                'id' => 22,
                'date' => '2021-06-02',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 3,
                'closeBy' => 2,
            ),
            22 =>
            array (
                'id' => 23,
                'date' => '2021-06-09',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 2,
                'closeBy' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'date' => '2021-06-10',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'date' => '2021-06-11',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'date' => '2021-06-12',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'date' => '2021-06-13',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'date' => '2021-06-14',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'date' => '2021-06-15',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'date' => '2021-06-16',
                'shiftmodel_id' => 2,
                'base_id' => 2,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'date' => '2021-06-08',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 3,
            ),
            31 =>
            array (
                'id' => 32,
                'date' => '2021-06-07',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 5,
            ),
            32 =>
            array (
                'id' => 33,
                'date' => '2021-06-06',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 10,
            ),
            33 =>
            array (
                'id' => 34,
                'date' => '2021-06-05',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 9,
            ),
            34 =>
            array (
                'id' => 35,
                'date' => '2021-06-04',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 1,
            ),
            35 =>
            array (
                'id' => 36,
                'date' => '2021-06-03',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 11,
            ),
            36 =>
            array (
                'id' => 37,
                'date' => '2021-06-02',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 3,
                'closeBy' => 6,
            ),
            37 =>
            array (
                'id' => 38,
                'date' => '2021-06-09',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 2,
                'closeBy' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'date' => '2021-06-10',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'date' => '2021-06-11',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'date' => '2021-06-12',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'date' => '2021-06-13',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'date' => '2021-06-14',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'date' => '2021-06-15',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'date' => '2021-06-16',
                'shiftmodel_id' => 2,
                'base_id' => 3,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'date' => '2021-06-08',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 2,
            ),
            46 =>
            array (
                'id' => 47,
                'date' => '2021-06-07',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 10,
            ),
            47 =>
            array (
                'id' => 48,
                'date' => '2021-06-06',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 11,
            ),
            48 =>
            array (
                'id' => 49,
                'date' => '2021-06-05',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 2,
            ),
            49 =>
            array (
                'id' => 50,
                'date' => '2021-06-04',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 8,
            ),
            50 =>
            array (
                'id' => 51,
                'date' => '2021-06-03',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 10,
            ),
            51 =>
            array (
                'id' => 52,
                'date' => '2021-06-02',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 3,
                'closeBy' => 5,
            ),
            52 =>
            array (
                'id' => 53,
                'date' => '2021-06-09',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 2,
                'closeBy' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'date' => '2021-06-10',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'date' => '2021-06-11',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'date' => '2021-06-12',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'date' => '2021-06-13',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'date' => '2021-06-14',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'date' => '2021-06-15',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'date' => '2021-06-16',
                'shiftmodel_id' => 2,
                'base_id' => 4,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'date' => '2021-06-08',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 7,
            ),
            61 =>
            array (
                'id' => 62,
                'date' => '2021-06-07',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 9,
            ),
            62 =>
            array (
                'id' => 63,
                'date' => '2021-06-06',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 8,
            ),
            63 =>
            array (
                'id' => 64,
                'date' => '2021-06-05',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 10,
            ),
            64 =>
            array (
                'id' => 65,
                'date' => '2021-06-04',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 9,
            ),
            65 =>
            array (
                'id' => 66,
                'date' => '2021-06-03',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 3,
            ),
            66 =>
            array (
                'id' => 67,
                'date' => '2021-06-02',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 3,
                'closeBy' => 2,
            ),
            67 =>
            array (
                'id' => 68,
                'date' => '2021-06-09',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 2,
                'closeBy' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'date' => '2021-06-10',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'date' => '2021-06-11',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'date' => '2021-06-12',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'date' => '2021-06-13',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'date' => '2021-06-14',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'date' => '2021-06-15',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'date' => '2021-06-16',
                'shiftmodel_id' => 2,
                'base_id' => 5,
                'status_id' => 1,
                'closeBy' => NULL,
            ),
        ));


    }
}
