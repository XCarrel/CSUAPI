<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkplanningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('workplannings')->delete();

        \DB::table('workplannings')->insert(array(
            0 =>
                array(
                    'id' => 36,
                    'worktime_id' => 10,
                    'user_id' => 1,
                    'date' => '2021-07-01',
                    'confirmation' => 0
                ),
            1 =>
                array(
                    'id' => 37,
                    'worktime_id' => 6,
                    'user_id' => 1,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            2 =>
                array(
                    'id' => 38,
                    'worktime_id' => 18,
                    'user_id' => 1,
                    'date' => '2021-07-04',
                    'confirmation' => 1
                ),
            3 =>
                array(
                    'id' => 39,
                    'worktime_id' => 19,
                    'user_id' => 1,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            4 =>
                array(
                    'id' => 40,
                    'worktime_id' => 12,
                    'user_id' => 1,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            5 =>
                array(
                    'id' => 41,
                    'worktime_id' => 12,
                    'user_id' => 1,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            6 =>
                array(
                    'id' => 42,
                    'worktime_id' => 12,
                    'user_id' => 1,
                    'date' => '2021-07-10',
                    'confirmation' => 0
                ),
            7 =>
                array(
                    'id' => 43,
                    'worktime_id' => 12,
                    'user_id' => 1,
                    'date' => '2021-07-11',
                    'confirmation' => null
                ),
            8 =>
                array(
                    'id' => 44,
                    'worktime_id' => 15,
                    'user_id' => 1,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            9 =>
                array(
                    'id' => 45,
                    'worktime_id' => 18,
                    'user_id' => 1,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            10 =>
                array(
                    'id' => 46,
                    'worktime_id' => 10,
                    'user_id' => 1,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            11 =>
                array(
                    'id' => 47,
                    'worktime_id' => 18,
                    'user_id' => 1,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            12 =>
                array(
                    'id' => 48,
                    'worktime_id' => 16,
                    'user_id' => 1,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            13 =>
                array(
                    'id' => 49,
                    'worktime_id' => 16,
                    'user_id' => 1,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            14 =>
                array(
                    'id' => 50,
                    'worktime_id' => 6,
                    'user_id' => 1,
                    'date' => '2021-07-22',
                    'confirmation' => 0
                ),
            15 =>
                array(
                    'id' => 51,
                    'worktime_id' => 18,
                    'user_id' => 1,
                    'date' => '2021-07-23',
                    'confirmation' => 1
                ),
            16 =>
                array(
                    'id' => 52,
                    'worktime_id' => 20,
                    'user_id' => 1,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            17 =>
                array(
                    'id' => 53,
                    'worktime_id' => 15,
                    'user_id' => 1,
                    'date' => '2021-07-25',
                    'confirmation' => null
                ),
            18 =>
                array(
                    'id' => 54,
                    'worktime_id' => 18,
                    'user_id' => 1,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            19 =>
                array(
                    'id' => 55,
                    'worktime_id' => 14,
                    'user_id' => 1,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            21 =>
                array(
                    'id' => 57,
                    'worktime_id' => 14,
                    'user_id' => 2,
                    'date' => '2021-07-01',
                    'confirmation' => 1
                ),
            22 =>
                array(
                    'id' => 58,
                    'worktime_id' => 4,
                    'user_id' => 2,
                    'date' => '2021-07-04',
                    'confirmation' => 0
                ),
            23 =>
                array(
                    'id' => 59,
                    'worktime_id' => 4,
                    'user_id' => 2,
                    'date' => '2021-07-05',
                    'confirmation' => null
                ),
            24 =>
                array(
                    'id' => 60,
                    'worktime_id' => 4,
                    'user_id' => 2,
                    'date' => '2021-07-06',
                    'confirmation' => null
                ),
            25 =>
                array(
                    'id' => 61,
                    'worktime_id' => 19,
                    'user_id' => 2,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            26 =>
                array(
                    'id' => 62,
                    'worktime_id' => 5,
                    'user_id' => 2,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            27 =>
                array(
                    'id' => 63,
                    'worktime_id' => 6,
                    'user_id' => 2,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            28 =>
                array(
                    'id' => 64,
                    'worktime_id' => 8,
                    'user_id' => 2,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            29 =>
                array(
                    'id' => 65,
                    'worktime_id' => 8,
                    'user_id' => 2,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            30 =>
                array(
                    'id' => 66,
                    'worktime_id' => 2,
                    'user_id' => 2,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            31 =>
                array(
                    'id' => 67,
                    'worktime_id' => 4,
                    'user_id' => 2,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            32 =>
                array(
                    'id' => 68,
                    'worktime_id' => 4,
                    'user_id' => 2,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            33 =>
                array(
                    'id' => 69,
                    'worktime_id' => 5,
                    'user_id' => 2,
                    'date' => '2021-07-28',
                    'confirmation' => 0
                ),
            34 =>
                array(
                    'id' => 70,
                    'worktime_id' => 6,
                    'user_id' => 2,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            36 =>
                array(
                    'id' => 72,
                    'worktime_id' => 6,
                    'user_id' => 3,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            37 =>
                array(
                    'id' => 73,
                    'worktime_id' => 18,
                    'user_id' => 3,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            38 =>
                array(
                    'id' => 74,
                    'worktime_id' => 19,
                    'user_id' => 3,
                    'date' => '2021-07-07',
                    'confirmation' => 1
                ),
            39 =>
                array(
                    'id' => 75,
                    'worktime_id' => 12,
                    'user_id' => 3,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            40 =>
                array(
                    'id' => 76,
                    'worktime_id' => 12,
                    'user_id' => 3,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            41 =>
                array(
                    'id' => 77,
                    'worktime_id' => 12,
                    'user_id' => 3,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            42 =>
                array(
                    'id' => 78,
                    'worktime_id' => 12,
                    'user_id' => 3,
                    'date' => '2021-07-11',
                    'confirmation' => null
                ),
            43 =>
                array(
                    'id' => 79,
                    'worktime_id' => 15,
                    'user_id' => 3,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            44 =>
                array(
                    'id' => 80,
                    'worktime_id' => 18,
                    'user_id' => 3,
                    'date' => '2021-07-15',
                    'confirmation' => 0
                ),
            45 =>
                array(
                    'id' => 81,
                    'worktime_id' => 10,
                    'user_id' => 3,
                    'date' => '2021-07-16',
                    'confirmation' => 1
                ),
            46 =>
                array(
                    'id' => 82,
                    'worktime_id' => 18,
                    'user_id' => 3,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            47 =>
                array(
                    'id' => 83,
                    'worktime_id' => 16,
                    'user_id' => 3,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            48 =>
                array(
                    'id' => 84,
                    'worktime_id' => 16,
                    'user_id' => 3,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            49 =>
                array(
                    'id' => 85,
                    'worktime_id' => 6,
                    'user_id' => 3,
                    'date' => '2021-07-22',
                    'confirmation' => null
                ),
            50 =>
                array(
                    'id' => 86,
                    'worktime_id' => 18,
                    'user_id' => 3,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            51 =>
                array(
                    'id' => 87,
                    'worktime_id' => 20,
                    'user_id' => 3,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            52 =>
                array(
                    'id' => 88,
                    'worktime_id' => 15,
                    'user_id' => 3,
                    'date' => '2021-07-25',
                    'confirmation' => 0
                ),
            53 =>
                array(
                    'id' => 89,
                    'worktime_id' => 18,
                    'user_id' => 3,
                    'date' => '2021-07-28',
                    'confirmation' => 1
                ),
            54 =>
                array(
                    'id' => 90,
                    'worktime_id' => 14,
                    'user_id' => 3,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            55 =>
                array(
                    'id' => 91,
                    'worktime_id' => 7,
                    'user_id' => 3,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            56 =>
                array(
                    'id' => 92,
                    'worktime_id' => 14,
                    'user_id' => 4,
                    'date' => '2021-07-01',
                    'confirmation' => 0
                ),
            57 =>
                array(
                    'id' => 93,
                    'worktime_id' => 4,
                    'user_id' => 4,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            58 =>
                array(
                    'id' => 94,
                    'worktime_id' => 4,
                    'user_id' => 4,
                    'date' => '2021-07-05',
                    'confirmation' => null
                ),
            59 =>
                array(
                    'id' => 95,
                    'worktime_id' => 4,
                    'user_id' => 4,
                    'date' => '2021-07-06',
                    'confirmation' => 0
                ),
            60 =>
                array(
                    'id' => 96,
                    'worktime_id' => 19,
                    'user_id' => 4,
                    'date' => '2021-07-07',
                    'confirmation' => 1
                ),
            61 =>
                array(
                    'id' => 97,
                    'worktime_id' => 5,
                    'user_id' => 4,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            62 =>
                array(
                    'id' => 98,
                    'worktime_id' => 6,
                    'user_id' => 4,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            63 =>
                array(
                    'id' => 99,
                    'worktime_id' => 8,
                    'user_id' => 4,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            64 =>
                array(
                    'id' => 100,
                    'worktime_id' => 8,
                    'user_id' => 4,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            65 =>
                array(
                    'id' => 101,
                    'worktime_id' => 2,
                    'user_id' => 4,
                    'date' => '2021-07-18',
                    'confirmation' => 1
                ),
            66 =>
                array(
                    'id' => 102,
                    'worktime_id' => 4,
                    'user_id' => 4,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            67 =>
                array(
                    'id' => 103,
                    'worktime_id' => 4,
                    'user_id' => 4,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            68 =>
                array(
                    'id' => 104,
                    'worktime_id' => 5,
                    'user_id' => 4,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            69 =>
                array(
                    'id' => 105,
                    'worktime_id' => 6,
                    'user_id' => 4,
                    'date' => '2021-07-29',
                    'confirmation' => 0
                ),
            71 =>
                array(
                    'id' => 107,
                    'worktime_id' => 6,
                    'user_id' => 5,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            72 =>
                array(
                    'id' => 108,
                    'worktime_id' => 18,
                    'user_id' => 5,
                    'date' => '2021-07-04',
                    'confirmation' => 1
                ),
            73 =>
                array(
                    'id' => 109,
                    'worktime_id' => 19,
                    'user_id' => 5,
                    'date' => '2021-07-07',
                    'confirmation' => 0
                ),
            74 =>
                array(
                    'id' => 110,
                    'worktime_id' => 12,
                    'user_id' => 5,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            75 =>
                array(
                    'id' => 111,
                    'worktime_id' => 12,
                    'user_id' => 5,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            76 =>
                array(
                    'id' => 112,
                    'worktime_id' => 12,
                    'user_id' => 5,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            77 =>
                array(
                    'id' => 113,
                    'worktime_id' => 12,
                    'user_id' => 5,
                    'date' => '2021-07-11',
                    'confirmation' => null
                ),
            78 =>
                array(
                    'id' => 114,
                    'worktime_id' => 15,
                    'user_id' => 5,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            79 =>
                array(
                    'id' => 115,
                    'worktime_id' => 18,
                    'user_id' => 5,
                    'date' => '2021-07-15',
                    'confirmation' => 1
                ),
            80 =>
                array(
                    'id' => 116,
                    'worktime_id' => 10,
                    'user_id' => 5,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            81 =>
                array(
                    'id' => 117,
                    'worktime_id' => 18,
                    'user_id' => 5,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            82 =>
                array(
                    'id' => 118,
                    'worktime_id' => 16,
                    'user_id' => 5,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            83 =>
                array(
                    'id' => 119,
                    'worktime_id' => 16,
                    'user_id' => 5,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            84 =>
                array(
                    'id' => 120,
                    'worktime_id' => 6,
                    'user_id' => 5,
                    'date' => '2021-07-22',
                    'confirmation' => null
                ),
            85 =>
                array(
                    'id' => 121,
                    'worktime_id' => 18,
                    'user_id' => 5,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            86 =>
                array(
                    'id' => 122,
                    'worktime_id' => 20,
                    'user_id' => 5,
                    'date' => '2021-07-24',
                    'confirmation' => 1
                ),
            87 =>
                array(
                    'id' => 123,
                    'worktime_id' => 15,
                    'user_id' => 5,
                    'date' => '2021-07-25',
                    'confirmation' => null
                ),
            88 =>
                array(
                    'id' => 124,
                    'worktime_id' => 18,
                    'user_id' => 5,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            89 =>
                array(
                    'id' => 125,
                    'worktime_id' => 14,
                    'user_id' => 5,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            90 =>
                array(
                    'id' => 126,
                    'worktime_id' => 7,
                    'user_id' => 5,
                    'date' => '2021-07-01',
                    'confirmation' => 0
                ),
            91 =>
                array(
                    'id' => 127,
                    'worktime_id' => 14,
                    'user_id' => 6,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            92 =>
                array(
                    'id' => 128,
                    'worktime_id' => 4,
                    'user_id' => 6,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            93 =>
                array(
                    'id' => 129,
                    'worktime_id' => 4,
                    'user_id' => 6,
                    'date' => '2021-07-05',
                    'confirmation' => 0
                ),
            94 =>
                array(
                    'id' => 130,
                    'worktime_id' => 4,
                    'user_id' => 6,
                    'date' => '2021-07-06',
                    'confirmation' => null
                ),
            95 =>
                array(
                    'id' => 131,
                    'worktime_id' => 19,
                    'user_id' => 6,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            96 =>
                array(
                    'id' => 132,
                    'worktime_id' => 5,
                    'user_id' => 6,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            97 =>
                array(
                    'id' => 133,
                    'worktime_id' => 6,
                    'user_id' => 6,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            98 =>
                array(
                    'id' => 134,
                    'worktime_id' => 8,
                    'user_id' => 6,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            99 =>
                array(
                    'id' => 135,
                    'worktime_id' => 8,
                    'user_id' => 6,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            100 =>
                array(
                    'id' => 136,
                    'worktime_id' => 2,
                    'user_id' => 6,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            101 =>
                array(
                    'id' => 137,
                    'worktime_id' => 4,
                    'user_id' => 6,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            102 =>
                array(
                    'id' => 138,
                    'worktime_id' => 4,
                    'user_id' => 6,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            103 =>
                array(
                    'id' => 139,
                    'worktime_id' => 5,
                    'user_id' => 6,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            104 =>
                array(
                    'id' => 140,
                    'worktime_id' => 6,
                    'user_id' => 6,
                    'date' => '2021-07-29',
                    'confirmation' => 0
                ),
            106 =>
                array(
                    'id' => 142,
                    'worktime_id' => 6,
                    'user_id' => 7,
                    'date' => '2021-07-03',
                    'confirmation' => 1
                ),
            107 =>
                array(
                    'id' => 143,
                    'worktime_id' => 18,
                    'user_id' => 7,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            108 =>
                array(
                    'id' => 144,
                    'worktime_id' => 19,
                    'user_id' => 7,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            109 =>
                array(
                    'id' => 145,
                    'worktime_id' => 12,
                    'user_id' => 7,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            110 =>
                array(
                    'id' => 146,
                    'worktime_id' => 12,
                    'user_id' => 7,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            111 =>
                array(
                    'id' => 147,
                    'worktime_id' => 12,
                    'user_id' => 7,
                    'date' => '2021-07-10',
                    'confirmation' => 0
                ),
            112 =>
                array(
                    'id' => 148,
                    'worktime_id' => 12,
                    'user_id' => 7,
                    'date' => '2021-07-11',
                    'confirmation' => null
                ),
            113 =>
                array(
                    'id' => 149,
                    'worktime_id' => 15,
                    'user_id' => 7,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            114 =>
                array(
                    'id' => 150,
                    'worktime_id' => 18,
                    'user_id' => 7,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            115 =>
                array(
                    'id' => 151,
                    'worktime_id' => 10,
                    'user_id' => 7,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            116 =>
                array(
                    'id' => 152,
                    'worktime_id' => 18,
                    'user_id' => 7,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            117 =>
                array(
                    'id' => 153,
                    'worktime_id' => 16,
                    'user_id' => 7,
                    'date' => '2021-07-18',
                    'confirmation' => 0
                ),
            118 =>
                array(
                    'id' => 154,
                    'worktime_id' => 16,
                    'user_id' => 7,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            119 =>
                array(
                    'id' => 155,
                    'worktime_id' => 6,
                    'user_id' => 7,
                    'date' => '2021-07-22',
                    'confirmation' => null
                ),
            120 =>
                array(
                    'id' => 156,
                    'worktime_id' => 18,
                    'user_id' => 7,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            121 =>
                array(
                    'id' => 157,
                    'worktime_id' => 20,
                    'user_id' => 7,
                    'date' => '2021-07-24',
                    'confirmation' => 1
                ),
            122 =>
                array(
                    'id' => 158,
                    'worktime_id' => 15,
                    'user_id' => 7,
                    'date' => '2021-07-25',
                    'confirmation' => 0
                ),
            123 =>
                array(
                    'id' => 159,
                    'worktime_id' => 18,
                    'user_id' => 7,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            124 =>
                array(
                    'id' => 160,
                    'worktime_id' => 14,
                    'user_id' => 7,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            125 =>
                array(
                    'id' => 161,
                    'worktime_id' => 7,
                    'user_id' => 7,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            126 =>
                array(
                    'id' => 162,
                    'worktime_id' => 14,
                    'user_id' => 8,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            127 =>
                array(
                    'id' => 163,
                    'worktime_id' => 4,
                    'user_id' => 8,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            128 =>
                array(
                    'id' => 164,
                    'worktime_id' => 4,
                    'user_id' => 8,
                    'date' => '2021-07-05',
                    'confirmation' => null
                ),
            129 =>
                array(
                    'id' => 165,
                    'worktime_id' => 4,
                    'user_id' => 8,
                    'date' => '2021-07-06',
                    'confirmation' => 0
                ),
            130 =>
                array(
                    'id' => 166,
                    'worktime_id' => 19,
                    'user_id' => 8,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            131 =>
                array(
                    'id' => 167,
                    'worktime_id' => 5,
                    'user_id' => 8,
                    'date' => '2021-07-09',
                    'confirmation' => 1
                ),
            132 =>
                array(
                    'id' => 168,
                    'worktime_id' => 6,
                    'user_id' => 8,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            133 =>
                array(
                    'id' => 169,
                    'worktime_id' => 8,
                    'user_id' => 8,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            134 =>
                array(
                    'id' => 170,
                    'worktime_id' => 8,
                    'user_id' => 8,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            135 =>
                array(
                    'id' => 171,
                    'worktime_id' => 2,
                    'user_id' => 8,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            136 =>
                array(
                    'id' => 172,
                    'worktime_id' => 4,
                    'user_id' => 8,
                    'date' => '2021-07-23',
                    'confirmation' => 0
                ),
            137 =>
                array(
                    'id' => 173,
                    'worktime_id' => 4,
                    'user_id' => 8,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            138 =>
                array(
                    'id' => 174,
                    'worktime_id' => 5,
                    'user_id' => 8,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            139 =>
                array(
                    'id' => 175,
                    'worktime_id' => 6,
                    'user_id' => 8,
                    'date' => '2021-07-29',
                    'confirmation' => 1
                ),
            141 =>
                array(
                    'id' => 177,
                    'worktime_id' => 6,
                    'user_id' => 9,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            142 =>
                array(
                    'id' => 178,
                    'worktime_id' => 18,
                    'user_id' => 9,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            143 =>
                array(
                    'id' => 179,
                    'worktime_id' => 19,
                    'user_id' => 9,
                    'date' => '2021-07-07',
                    'confirmation' => 0
                ),
            144 =>
                array(
                    'id' => 180,
                    'worktime_id' => 12,
                    'user_id' => 9,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            145 =>
                array(
                    'id' => 181,
                    'worktime_id' => 12,
                    'user_id' => 9,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            146 =>
                array(
                    'id' => 182,
                    'worktime_id' => 12,
                    'user_id' => 9,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            147 =>
                array(
                    'id' => 183,
                    'worktime_id' => 12,
                    'user_id' => 9,
                    'date' => '2021-07-11',
                    'confirmation' => null
                ),
            148 =>
                array(
                    'id' => 184,
                    'worktime_id' => 15,
                    'user_id' => 9,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            149 =>
                array(
                    'id' => 185,
                    'worktime_id' => 18,
                    'user_id' => 9,
                    'date' => '2021-07-15',
                    'confirmation' => 0
                ),
            150 =>
                array(
                    'id' => 186,
                    'worktime_id' => 10,
                    'user_id' => 9,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            151 =>
                array(
                    'id' => 187,
                    'worktime_id' => 18,
                    'user_id' => 9,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            152 =>
                array(
                    'id' => 188,
                    'worktime_id' => 16,
                    'user_id' => 9,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            153 =>
                array(
                    'id' => 189,
                    'worktime_id' => 16,
                    'user_id' => 9,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            154 =>
                array(
                    'id' => 190,
                    'worktime_id' => 6,
                    'user_id' => 9,
                    'date' => '2021-07-22',
                    'confirmation' => 1
                ),
            155 =>
                array(
                    'id' => 191,
                    'worktime_id' => 18,
                    'user_id' => 9,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            156 =>
                array(
                    'id' => 192,
                    'worktime_id' => 20,
                    'user_id' => 9,
                    'date' => '2021-07-24',
                    'confirmation' => 0
                ),
            157 =>
                array(
                    'id' => 193,
                    'worktime_id' => 15,
                    'user_id' => 9,
                    'date' => '2021-07-25',
                    'confirmation' => null
                ),
            158 =>
                array(
                    'id' => 194,
                    'worktime_id' => 18,
                    'user_id' => 9,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            159 =>
                array(
                    'id' => 195,
                    'worktime_id' => 14,
                    'user_id' => 9,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            160 =>
                array(
                    'id' => 196,
                    'worktime_id' => 7,
                    'user_id' => 9,
                    'date' => '2021-07-01',
                    'confirmation' => 1
                ),
            161 =>
                array(
                    'id' => 197,
                    'worktime_id' => 14,
                    'user_id' => 10,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            162 =>
                array(
                    'id' => 198,
                    'worktime_id' => 4,
                    'user_id' => 10,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            163 =>
                array(
                    'id' => 199,
                    'worktime_id' => 4,
                    'user_id' => 10,
                    'date' => '2021-07-05',
                    'confirmation' => null
                ),
            164 =>
                array(
                    'id' => 200,
                    'worktime_id' => 4,
                    'user_id' => 10,
                    'date' => '2021-07-06',
                    'confirmation' => 0
                ),
            165 =>
                array(
                    'id' => 201,
                    'worktime_id' => 19,
                    'user_id' => 10,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            166 =>
                array(
                    'id' => 202,
                    'worktime_id' => 5,
                    'user_id' => 10,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            167 =>
                array(
                    'id' => 203,
                    'worktime_id' => 6,
                    'user_id' => 10,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            168 =>
                array(
                    'id' => 204,
                    'worktime_id' => 8,
                    'user_id' => 10,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            169 =>
                array(
                    'id' => 205,
                    'worktime_id' => 8,
                    'user_id' => 10,
                    'date' => '2021-07-15',
                    'confirmation' => 1
                ),
            170 =>
                array(
                    'id' => 206,
                    'worktime_id' => 2,
                    'user_id' => 10,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            171 =>
                array(
                    'id' => 207,
                    'worktime_id' => 4,
                    'user_id' => 10,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            172 =>
                array(
                    'id' => 208,
                    'worktime_id' => 4,
                    'user_id' => 10,
                    'date' => '2021-07-24',
                    'confirmation' => 0
                ),
            173 =>
                array(
                    'id' => 209,
                    'worktime_id' => 5,
                    'user_id' => 10,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            174 =>
                array(
                    'id' => 210,
                    'worktime_id' => 6,
                    'user_id' => 10,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            176 =>
                array(
                    'id' => 212,
                    'worktime_id' => 6,
                    'user_id' => 11,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            177 =>
                array(
                    'id' => 213,
                    'worktime_id' => 18,
                    'user_id' => 11,
                    'date' => '2021-07-04',
                    'confirmation' => 1
                ),
            178 =>
                array(
                    'id' => 214,
                    'worktime_id' => 19,
                    'user_id' => 11,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            179 =>
                array(
                    'id' => 215,
                    'worktime_id' => 12,
                    'user_id' => 11,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            180 =>
                array(
                    'id' => 216,
                    'worktime_id' => 12,
                    'user_id' => 11,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            181 =>
                array(
                    'id' => 217,
                    'worktime_id' => 12,
                    'user_id' => 11,
                    'date' => '2021-07-10',
                    'confirmation' => 0
                ),
            182 =>
                array(
                    'id' => 218,
                    'worktime_id' => 12,
                    'user_id' => 11,
                    'date' => '2021-07-11',
                    'confirmation' => 1
                ),
            183 =>
                array(
                    'id' => 219,
                    'worktime_id' => 15,
                    'user_id' => 11,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            184 =>
                array(
                    'id' => 220,
                    'worktime_id' => 18,
                    'user_id' => 11,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            185 =>
                array(
                    'id' => 221,
                    'worktime_id' => 10,
                    'user_id' => 11,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            186 =>
                array(
                    'id' => 222,
                    'worktime_id' => 18,
                    'user_id' => 11,
                    'date' => '2021-07-17',
                    'confirmation' => 1
                ),
            187 =>
                array(
                    'id' => 223,
                    'worktime_id' => 16,
                    'user_id' => 11,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            188 =>
                array(
                    'id' => 224,
                    'worktime_id' => 16,
                    'user_id' => 11,
                    'date' => '2021-07-21',
                    'confirmation' => null
                ),
            189 =>
                array(
                    'id' => 225,
                    'worktime_id' => 6,
                    'user_id' => 11,
                    'date' => '2021-07-22',
                    'confirmation' => 0
                ),
            190 =>
                array(
                    'id' => 226,
                    'worktime_id' => 18,
                    'user_id' => 11,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            191 =>
                array(
                    'id' => 227,
                    'worktime_id' => 20,
                    'user_id' => 11,
                    'date' => '2021-07-24',
                    'confirmation' => 0
                ),
            192 =>
                array(
                    'id' => 228,
                    'worktime_id' => 15,
                    'user_id' => 11,
                    'date' => '2021-07-25',
                    'confirmation' => null
                ),
            193 =>
                array(
                    'id' => 229,
                    'worktime_id' => 18,
                    'user_id' => 11,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            194 =>
                array(
                    'id' => 230,
                    'worktime_id' => 14,
                    'user_id' => 11,
                    'date' => '2021-07-29',
                    'confirmation' => 1
                ),
            195 =>
                array(
                    'id' => 231,
                    'worktime_id' => 7,
                    'user_id' => 11,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            196 =>
                array(
                    'id' => 232,
                    'worktime_id' => 14,
                    'user_id' => 12,
                    'date' => '2021-07-01',
                    'confirmation' => null
                ),
            197 =>
                array(
                    'id' => 233,
                    'worktime_id' => 4,
                    'user_id' => 12,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            198 =>
                array(
                    'id' => 234,
                    'worktime_id' => 4,
                    'user_id' => 12,
                    'date' => '2021-07-05',
                    'confirmation' => 1
                ),
            199 =>
                array(
                    'id' => 235,
                    'worktime_id' => 4,
                    'user_id' => 12,
                    'date' => '2021-07-06',
                    'confirmation' => 0
                ),
            200 =>
                array(
                    'id' => 236,
                    'worktime_id' => 19,
                    'user_id' => 12,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            201 =>
                array(
                    'id' => 237,
                    'worktime_id' => 5,
                    'user_id' => 12,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            202 =>
                array(
                    'id' => 238,
                    'worktime_id' => 6,
                    'user_id' => 12,
                    'date' => '2021-07-10',
                    'confirmation' => null
                ),
            203 =>
                array(
                    'id' => 239,
                    'worktime_id' => 8,
                    'user_id' => 12,
                    'date' => '2021-07-14',
                    'confirmation' => 1
                ),
            204 =>
                array(
                    'id' => 240,
                    'worktime_id' => 8,
                    'user_id' => 12,
                    'date' => '2021-07-15',
                    'confirmation' => null
                ),
            205 =>
                array(
                    'id' => 241,
                    'worktime_id' => 2,
                    'user_id' => 12,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            206 =>
                array(
                    'id' => 242,
                    'worktime_id' => 4,
                    'user_id' => 12,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            207 =>
                array(
                    'id' => 243,
                    'worktime_id' => 4,
                    'user_id' => 12,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            208 =>
                array(
                    'id' => 244,
                    'worktime_id' => 5,
                    'user_id' => 12,
                    'date' => '2021-07-28',
                    'confirmation' => 0
                ),
            209 =>
                array(
                    'id' => 245,
                    'worktime_id' => 6,
                    'user_id' => 12,
                    'date' => '2021-07-29',
                    'confirmation' => 1
                ),
            211 =>
                array(
                    'id' => 247,
                    'worktime_id' => 6,
                    'user_id' => 104,
                    'date' => '2021-07-03',
                    'confirmation' => null
                ),
            212 =>
                array(
                    'id' => 248,
                    'worktime_id' => 18,
                    'user_id' => 104,
                    'date' => '2021-07-04',
                    'confirmation' => null
                ),
            213 =>
                array(
                    'id' => 249,
                    'worktime_id' => 19,
                    'user_id' => 104,
                    'date' => '2021-07-07',
                    'confirmation' => null
                ),
            214 =>
                array(
                    'id' => 250,
                    'worktime_id' => 12,
                    'user_id' => 104,
                    'date' => '2021-07-08',
                    'confirmation' => null
                ),
            215 =>
                array(
                    'id' => 251,
                    'worktime_id' => 12,
                    'user_id' => 104,
                    'date' => '2021-07-09',
                    'confirmation' => null
                ),
            216 =>
                array(
                    'id' => 252,
                    'worktime_id' => 12,
                    'user_id' => 104,
                    'date' => '2021-07-10',
                    'confirmation' => 1
                ),
            217 =>
                array(
                    'id' => 253,
                    'worktime_id' => 12,
                    'user_id' => 104,
                    'date' => '2021-07-11',
                    'confirmation' => 0
                ),
            218 =>
                array(
                    'id' => 254,
                    'worktime_id' => 15,
                    'user_id' => 104,
                    'date' => '2021-07-14',
                    'confirmation' => null
                ),
            219 =>
                array(
                    'id' => 255,
                    'worktime_id' => 18,
                    'user_id' => 104,
                    'date' => '2021-07-15',
                    'confirmation' => 0
                ),
            220 =>
                array(
                    'id' => 256,
                    'worktime_id' => 10,
                    'user_id' => 104,
                    'date' => '2021-07-16',
                    'confirmation' => null
                ),
            221 =>
                array(
                    'id' => 257,
                    'worktime_id' => 18,
                    'user_id' => 104,
                    'date' => '2021-07-17',
                    'confirmation' => null
                ),
            222 =>
                array(
                    'id' => 258,
                    'worktime_id' => 16,
                    'user_id' => 104,
                    'date' => '2021-07-18',
                    'confirmation' => null
                ),
            223 =>
                array(
                    'id' => 259,
                    'worktime_id' => 16,
                    'user_id' => 104,
                    'date' => '2021-07-21',
                    'confirmation' => 1
                ),
            224 =>
                array(
                    'id' => 260,
                    'worktime_id' => 6,
                    'user_id' => 104,
                    'date' => '2021-07-22',
                    'confirmation' => null
                ),
            225 =>
                array(
                    'id' => 261,
                    'worktime_id' => 18,
                    'user_id' => 104,
                    'date' => '2021-07-23',
                    'confirmation' => null
                ),
            226 =>
                array(
                    'id' => 262,
                    'worktime_id' => 20,
                    'user_id' => 104,
                    'date' => '2021-07-24',
                    'confirmation' => null
                ),
            227 =>
                array(
                    'id' => 263,
                    'worktime_id' => 15,
                    'user_id' => 104,
                    'date' => '2021-07-25',
                    'confirmation' => 0
                ),
            228 =>
                array(
                    'id' => 264,
                    'worktime_id' => 18,
                    'user_id' => 104,
                    'date' => '2021-07-28',
                    'confirmation' => null
                ),
            229 =>
                array(
                    'id' => 265,
                    'worktime_id' => 14,
                    'user_id' => 104,
                    'date' => '2021-07-29',
                    'confirmation' => null
                ),
            230 =>
                array(
                    'id' => 266,
                    'worktime_id' => 7,
                    'user_id' => 104,
                    'date' => '2021-07-01',
                    'confirmation' => 0
                ),
        ));


    }
}
