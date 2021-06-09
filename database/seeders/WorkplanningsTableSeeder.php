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
        
        \DB::table('workplannings')->insert(array (
            0 => 
            array (
                'id' => 36,
                'worktime_id' => 10,
                'user_id' => 1,
                'date' => '2021-06-01',
            ),
            1 => 
            array (
                'id' => 37,
                'worktime_id' => 6,
                'user_id' => 1,
                'date' => '2021-06-03',
            ),
            2 => 
            array (
                'id' => 38,
                'worktime_id' => 18,
                'user_id' => 1,
                'date' => '2021-06-04',
            ),
            3 => 
            array (
                'id' => 39,
                'worktime_id' => 19,
                'user_id' => 1,
                'date' => '2021-06-07',
            ),
            4 => 
            array (
                'id' => 40,
                'worktime_id' => 12,
                'user_id' => 1,
                'date' => '2021-06-08',
            ),
            5 => 
            array (
                'id' => 41,
                'worktime_id' => 12,
                'user_id' => 1,
                'date' => '2021-06-09',
            ),
            6 => 
            array (
                'id' => 42,
                'worktime_id' => 12,
                'user_id' => 1,
                'date' => '2021-06-10',
            ),
            7 => 
            array (
                'id' => 43,
                'worktime_id' => 12,
                'user_id' => 1,
                'date' => '2021-06-11',
            ),
            8 => 
            array (
                'id' => 44,
                'worktime_id' => 15,
                'user_id' => 1,
                'date' => '2021-06-14',
            ),
            9 => 
            array (
                'id' => 45,
                'worktime_id' => 18,
                'user_id' => 1,
                'date' => '2021-06-15',
            ),
            10 => 
            array (
                'id' => 46,
                'worktime_id' => 10,
                'user_id' => 1,
                'date' => '2021-06-16',
            ),
            11 => 
            array (
                'id' => 47,
                'worktime_id' => 18,
                'user_id' => 1,
                'date' => '2021-06-17',
            ),
            12 => 
            array (
                'id' => 48,
                'worktime_id' => 16,
                'user_id' => 1,
                'date' => '2021-06-18',
            ),
            13 => 
            array (
                'id' => 49,
                'worktime_id' => 16,
                'user_id' => 1,
                'date' => '2021-06-21',
            ),
            14 => 
            array (
                'id' => 50,
                'worktime_id' => 6,
                'user_id' => 1,
                'date' => '2021-06-22',
            ),
            15 => 
            array (
                'id' => 51,
                'worktime_id' => 18,
                'user_id' => 1,
                'date' => '2021-06-23',
            ),
            16 => 
            array (
                'id' => 52,
                'worktime_id' => 20,
                'user_id' => 1,
                'date' => '2021-06-24',
            ),
            17 => 
            array (
                'id' => 53,
                'worktime_id' => 15,
                'user_id' => 1,
                'date' => '2021-06-25',
            ),
            18 => 
            array (
                'id' => 54,
                'worktime_id' => 18,
                'user_id' => 1,
                'date' => '2021-06-28',
            ),
            19 => 
            array (
                'id' => 55,
                'worktime_id' => 14,
                'user_id' => 1,
                'date' => '2021-06-29',
            ),
            20 => 
            array (
                'id' => 56,
                'worktime_id' => 7,
                'user_id' => 1,
                'date' => '2021-07-01',
            ),
            21 => 
            array (
                'id' => 57,
                'worktime_id' => 14,
                'user_id' => 2,
                'date' => '2021-06-01',
            ),
            22 => 
            array (
                'id' => 58,
                'worktime_id' => 4,
                'user_id' => 2,
                'date' => '2021-06-04',
            ),
            23 => 
            array (
                'id' => 59,
                'worktime_id' => 4,
                'user_id' => 2,
                'date' => '2021-06-05',
            ),
            24 => 
            array (
                'id' => 60,
                'worktime_id' => 4,
                'user_id' => 2,
                'date' => '2021-06-06',
            ),
            25 => 
            array (
                'id' => 61,
                'worktime_id' => 19,
                'user_id' => 2,
                'date' => '2021-06-07',
            ),
            26 => 
            array (
                'id' => 62,
                'worktime_id' => 5,
                'user_id' => 2,
                'date' => '2021-06-09',
            ),
            27 => 
            array (
                'id' => 63,
                'worktime_id' => 6,
                'user_id' => 2,
                'date' => '2021-06-10',
            ),
            28 => 
            array (
                'id' => 64,
                'worktime_id' => 8,
                'user_id' => 2,
                'date' => '2021-06-14',
            ),
            29 => 
            array (
                'id' => 65,
                'worktime_id' => 8,
                'user_id' => 2,
                'date' => '2021-06-15',
            ),
            30 => 
            array (
                'id' => 66,
                'worktime_id' => 2,
                'user_id' => 2,
                'date' => '2021-06-18',
            ),
            31 => 
            array (
                'id' => 67,
                'worktime_id' => 4,
                'user_id' => 2,
                'date' => '2021-06-23',
            ),
            32 => 
            array (
                'id' => 68,
                'worktime_id' => 4,
                'user_id' => 2,
                'date' => '2021-06-24',
            ),
            33 => 
            array (
                'id' => 69,
                'worktime_id' => 5,
                'user_id' => 2,
                'date' => '2021-06-28',
            ),
            34 => 
            array (
                'id' => 70,
                'worktime_id' => 6,
                'user_id' => 2,
                'date' => '2021-06-29',
            ),
            35 => 
            array (
                'id' => 71,
                'worktime_id' => 10,
                'user_id' => 3,
                'date' => '2021-06-01',
            ),
            36 => 
            array (
                'id' => 72,
                'worktime_id' => 6,
                'user_id' => 3,
                'date' => '2021-06-03',
            ),
            37 => 
            array (
                'id' => 73,
                'worktime_id' => 18,
                'user_id' => 3,
                'date' => '2021-06-04',
            ),
            38 => 
            array (
                'id' => 74,
                'worktime_id' => 19,
                'user_id' => 3,
                'date' => '2021-06-07',
            ),
            39 => 
            array (
                'id' => 75,
                'worktime_id' => 12,
                'user_id' => 3,
                'date' => '2021-06-08',
            ),
            40 => 
            array (
                'id' => 76,
                'worktime_id' => 12,
                'user_id' => 3,
                'date' => '2021-06-09',
            ),
            41 => 
            array (
                'id' => 77,
                'worktime_id' => 12,
                'user_id' => 3,
                'date' => '2021-06-10',
            ),
            42 => 
            array (
                'id' => 78,
                'worktime_id' => 12,
                'user_id' => 3,
                'date' => '2021-06-11',
            ),
            43 => 
            array (
                'id' => 79,
                'worktime_id' => 15,
                'user_id' => 3,
                'date' => '2021-06-14',
            ),
            44 => 
            array (
                'id' => 80,
                'worktime_id' => 18,
                'user_id' => 3,
                'date' => '2021-06-15',
            ),
            45 => 
            array (
                'id' => 81,
                'worktime_id' => 10,
                'user_id' => 3,
                'date' => '2021-06-16',
            ),
            46 => 
            array (
                'id' => 82,
                'worktime_id' => 18,
                'user_id' => 3,
                'date' => '2021-06-17',
            ),
            47 => 
            array (
                'id' => 83,
                'worktime_id' => 16,
                'user_id' => 3,
                'date' => '2021-06-18',
            ),
            48 => 
            array (
                'id' => 84,
                'worktime_id' => 16,
                'user_id' => 3,
                'date' => '2021-06-21',
            ),
            49 => 
            array (
                'id' => 85,
                'worktime_id' => 6,
                'user_id' => 3,
                'date' => '2021-06-22',
            ),
            50 => 
            array (
                'id' => 86,
                'worktime_id' => 18,
                'user_id' => 3,
                'date' => '2021-06-23',
            ),
            51 => 
            array (
                'id' => 87,
                'worktime_id' => 20,
                'user_id' => 3,
                'date' => '2021-06-24',
            ),
            52 => 
            array (
                'id' => 88,
                'worktime_id' => 15,
                'user_id' => 3,
                'date' => '2021-06-25',
            ),
            53 => 
            array (
                'id' => 89,
                'worktime_id' => 18,
                'user_id' => 3,
                'date' => '2021-06-28',
            ),
            54 => 
            array (
                'id' => 90,
                'worktime_id' => 14,
                'user_id' => 3,
                'date' => '2021-06-29',
            ),
            55 => 
            array (
                'id' => 91,
                'worktime_id' => 7,
                'user_id' => 3,
                'date' => '2021-07-01',
            ),
            56 => 
            array (
                'id' => 92,
                'worktime_id' => 14,
                'user_id' => 4,
                'date' => '2021-06-01',
            ),
            57 => 
            array (
                'id' => 93,
                'worktime_id' => 4,
                'user_id' => 4,
                'date' => '2021-06-04',
            ),
            58 => 
            array (
                'id' => 94,
                'worktime_id' => 4,
                'user_id' => 4,
                'date' => '2021-06-05',
            ),
            59 => 
            array (
                'id' => 95,
                'worktime_id' => 4,
                'user_id' => 4,
                'date' => '2021-06-06',
            ),
            60 => 
            array (
                'id' => 96,
                'worktime_id' => 19,
                'user_id' => 4,
                'date' => '2021-06-07',
            ),
            61 => 
            array (
                'id' => 97,
                'worktime_id' => 5,
                'user_id' => 4,
                'date' => '2021-06-09',
            ),
            62 => 
            array (
                'id' => 98,
                'worktime_id' => 6,
                'user_id' => 4,
                'date' => '2021-06-10',
            ),
            63 => 
            array (
                'id' => 99,
                'worktime_id' => 8,
                'user_id' => 4,
                'date' => '2021-06-14',
            ),
            64 => 
            array (
                'id' => 100,
                'worktime_id' => 8,
                'user_id' => 4,
                'date' => '2021-06-15',
            ),
            65 => 
            array (
                'id' => 101,
                'worktime_id' => 2,
                'user_id' => 4,
                'date' => '2021-06-18',
            ),
            66 => 
            array (
                'id' => 102,
                'worktime_id' => 4,
                'user_id' => 4,
                'date' => '2021-06-23',
            ),
            67 => 
            array (
                'id' => 103,
                'worktime_id' => 4,
                'user_id' => 4,
                'date' => '2021-06-24',
            ),
            68 => 
            array (
                'id' => 104,
                'worktime_id' => 5,
                'user_id' => 4,
                'date' => '2021-06-28',
            ),
            69 => 
            array (
                'id' => 105,
                'worktime_id' => 6,
                'user_id' => 4,
                'date' => '2021-06-29',
            ),
            70 => 
            array (
                'id' => 106,
                'worktime_id' => 10,
                'user_id' => 5,
                'date' => '2021-06-01',
            ),
            71 => 
            array (
                'id' => 107,
                'worktime_id' => 6,
                'user_id' => 5,
                'date' => '2021-06-03',
            ),
            72 => 
            array (
                'id' => 108,
                'worktime_id' => 18,
                'user_id' => 5,
                'date' => '2021-06-04',
            ),
            73 => 
            array (
                'id' => 109,
                'worktime_id' => 19,
                'user_id' => 5,
                'date' => '2021-06-07',
            ),
            74 => 
            array (
                'id' => 110,
                'worktime_id' => 12,
                'user_id' => 5,
                'date' => '2021-06-08',
            ),
            75 => 
            array (
                'id' => 111,
                'worktime_id' => 12,
                'user_id' => 5,
                'date' => '2021-06-09',
            ),
            76 => 
            array (
                'id' => 112,
                'worktime_id' => 12,
                'user_id' => 5,
                'date' => '2021-06-10',
            ),
            77 => 
            array (
                'id' => 113,
                'worktime_id' => 12,
                'user_id' => 5,
                'date' => '2021-06-11',
            ),
            78 => 
            array (
                'id' => 114,
                'worktime_id' => 15,
                'user_id' => 5,
                'date' => '2021-06-14',
            ),
            79 => 
            array (
                'id' => 115,
                'worktime_id' => 18,
                'user_id' => 5,
                'date' => '2021-06-15',
            ),
            80 => 
            array (
                'id' => 116,
                'worktime_id' => 10,
                'user_id' => 5,
                'date' => '2021-06-16',
            ),
            81 => 
            array (
                'id' => 117,
                'worktime_id' => 18,
                'user_id' => 5,
                'date' => '2021-06-17',
            ),
            82 => 
            array (
                'id' => 118,
                'worktime_id' => 16,
                'user_id' => 5,
                'date' => '2021-06-18',
            ),
            83 => 
            array (
                'id' => 119,
                'worktime_id' => 16,
                'user_id' => 5,
                'date' => '2021-06-21',
            ),
            84 => 
            array (
                'id' => 120,
                'worktime_id' => 6,
                'user_id' => 5,
                'date' => '2021-06-22',
            ),
            85 => 
            array (
                'id' => 121,
                'worktime_id' => 18,
                'user_id' => 5,
                'date' => '2021-06-23',
            ),
            86 => 
            array (
                'id' => 122,
                'worktime_id' => 20,
                'user_id' => 5,
                'date' => '2021-06-24',
            ),
            87 => 
            array (
                'id' => 123,
                'worktime_id' => 15,
                'user_id' => 5,
                'date' => '2021-06-25',
            ),
            88 => 
            array (
                'id' => 124,
                'worktime_id' => 18,
                'user_id' => 5,
                'date' => '2021-06-28',
            ),
            89 => 
            array (
                'id' => 125,
                'worktime_id' => 14,
                'user_id' => 5,
                'date' => '2021-06-29',
            ),
            90 => 
            array (
                'id' => 126,
                'worktime_id' => 7,
                'user_id' => 5,
                'date' => '2021-07-01',
            ),
            91 => 
            array (
                'id' => 127,
                'worktime_id' => 14,
                'user_id' => 6,
                'date' => '2021-06-01',
            ),
            92 => 
            array (
                'id' => 128,
                'worktime_id' => 4,
                'user_id' => 6,
                'date' => '2021-06-04',
            ),
            93 => 
            array (
                'id' => 129,
                'worktime_id' => 4,
                'user_id' => 6,
                'date' => '2021-06-05',
            ),
            94 => 
            array (
                'id' => 130,
                'worktime_id' => 4,
                'user_id' => 6,
                'date' => '2021-06-06',
            ),
            95 => 
            array (
                'id' => 131,
                'worktime_id' => 19,
                'user_id' => 6,
                'date' => '2021-06-07',
            ),
            96 => 
            array (
                'id' => 132,
                'worktime_id' => 5,
                'user_id' => 6,
                'date' => '2021-06-09',
            ),
            97 => 
            array (
                'id' => 133,
                'worktime_id' => 6,
                'user_id' => 6,
                'date' => '2021-06-10',
            ),
            98 => 
            array (
                'id' => 134,
                'worktime_id' => 8,
                'user_id' => 6,
                'date' => '2021-06-14',
            ),
            99 => 
            array (
                'id' => 135,
                'worktime_id' => 8,
                'user_id' => 6,
                'date' => '2021-06-15',
            ),
            100 => 
            array (
                'id' => 136,
                'worktime_id' => 2,
                'user_id' => 6,
                'date' => '2021-06-18',
            ),
            101 => 
            array (
                'id' => 137,
                'worktime_id' => 4,
                'user_id' => 6,
                'date' => '2021-06-23',
            ),
            102 => 
            array (
                'id' => 138,
                'worktime_id' => 4,
                'user_id' => 6,
                'date' => '2021-06-24',
            ),
            103 => 
            array (
                'id' => 139,
                'worktime_id' => 5,
                'user_id' => 6,
                'date' => '2021-06-28',
            ),
            104 => 
            array (
                'id' => 140,
                'worktime_id' => 6,
                'user_id' => 6,
                'date' => '2021-06-29',
            ),
            105 => 
            array (
                'id' => 141,
                'worktime_id' => 10,
                'user_id' => 7,
                'date' => '2021-06-01',
            ),
            106 => 
            array (
                'id' => 142,
                'worktime_id' => 6,
                'user_id' => 7,
                'date' => '2021-06-03',
            ),
            107 => 
            array (
                'id' => 143,
                'worktime_id' => 18,
                'user_id' => 7,
                'date' => '2021-06-04',
            ),
            108 => 
            array (
                'id' => 144,
                'worktime_id' => 19,
                'user_id' => 7,
                'date' => '2021-06-07',
            ),
            109 => 
            array (
                'id' => 145,
                'worktime_id' => 12,
                'user_id' => 7,
                'date' => '2021-06-08',
            ),
            110 => 
            array (
                'id' => 146,
                'worktime_id' => 12,
                'user_id' => 7,
                'date' => '2021-06-09',
            ),
            111 => 
            array (
                'id' => 147,
                'worktime_id' => 12,
                'user_id' => 7,
                'date' => '2021-06-10',
            ),
            112 => 
            array (
                'id' => 148,
                'worktime_id' => 12,
                'user_id' => 7,
                'date' => '2021-06-11',
            ),
            113 => 
            array (
                'id' => 149,
                'worktime_id' => 15,
                'user_id' => 7,
                'date' => '2021-06-14',
            ),
            114 => 
            array (
                'id' => 150,
                'worktime_id' => 18,
                'user_id' => 7,
                'date' => '2021-06-15',
            ),
            115 => 
            array (
                'id' => 151,
                'worktime_id' => 10,
                'user_id' => 7,
                'date' => '2021-06-16',
            ),
            116 => 
            array (
                'id' => 152,
                'worktime_id' => 18,
                'user_id' => 7,
                'date' => '2021-06-17',
            ),
            117 => 
            array (
                'id' => 153,
                'worktime_id' => 16,
                'user_id' => 7,
                'date' => '2021-06-18',
            ),
            118 => 
            array (
                'id' => 154,
                'worktime_id' => 16,
                'user_id' => 7,
                'date' => '2021-06-21',
            ),
            119 => 
            array (
                'id' => 155,
                'worktime_id' => 6,
                'user_id' => 7,
                'date' => '2021-06-22',
            ),
            120 => 
            array (
                'id' => 156,
                'worktime_id' => 18,
                'user_id' => 7,
                'date' => '2021-06-23',
            ),
            121 => 
            array (
                'id' => 157,
                'worktime_id' => 20,
                'user_id' => 7,
                'date' => '2021-06-24',
            ),
            122 => 
            array (
                'id' => 158,
                'worktime_id' => 15,
                'user_id' => 7,
                'date' => '2021-06-25',
            ),
            123 => 
            array (
                'id' => 159,
                'worktime_id' => 18,
                'user_id' => 7,
                'date' => '2021-06-28',
            ),
            124 => 
            array (
                'id' => 160,
                'worktime_id' => 14,
                'user_id' => 7,
                'date' => '2021-06-29',
            ),
            125 => 
            array (
                'id' => 161,
                'worktime_id' => 7,
                'user_id' => 7,
                'date' => '2021-07-01',
            ),
            126 => 
            array (
                'id' => 162,
                'worktime_id' => 14,
                'user_id' => 8,
                'date' => '2021-06-01',
            ),
            127 => 
            array (
                'id' => 163,
                'worktime_id' => 4,
                'user_id' => 8,
                'date' => '2021-06-04',
            ),
            128 => 
            array (
                'id' => 164,
                'worktime_id' => 4,
                'user_id' => 8,
                'date' => '2021-06-05',
            ),
            129 => 
            array (
                'id' => 165,
                'worktime_id' => 4,
                'user_id' => 8,
                'date' => '2021-06-06',
            ),
            130 => 
            array (
                'id' => 166,
                'worktime_id' => 19,
                'user_id' => 8,
                'date' => '2021-06-07',
            ),
            131 => 
            array (
                'id' => 167,
                'worktime_id' => 5,
                'user_id' => 8,
                'date' => '2021-06-09',
            ),
            132 => 
            array (
                'id' => 168,
                'worktime_id' => 6,
                'user_id' => 8,
                'date' => '2021-06-10',
            ),
            133 => 
            array (
                'id' => 169,
                'worktime_id' => 8,
                'user_id' => 8,
                'date' => '2021-06-14',
            ),
            134 => 
            array (
                'id' => 170,
                'worktime_id' => 8,
                'user_id' => 8,
                'date' => '2021-06-15',
            ),
            135 => 
            array (
                'id' => 171,
                'worktime_id' => 2,
                'user_id' => 8,
                'date' => '2021-06-18',
            ),
            136 => 
            array (
                'id' => 172,
                'worktime_id' => 4,
                'user_id' => 8,
                'date' => '2021-06-23',
            ),
            137 => 
            array (
                'id' => 173,
                'worktime_id' => 4,
                'user_id' => 8,
                'date' => '2021-06-24',
            ),
            138 => 
            array (
                'id' => 174,
                'worktime_id' => 5,
                'user_id' => 8,
                'date' => '2021-06-28',
            ),
            139 => 
            array (
                'id' => 175,
                'worktime_id' => 6,
                'user_id' => 8,
                'date' => '2021-06-29',
            ),
            140 => 
            array (
                'id' => 176,
                'worktime_id' => 10,
                'user_id' => 9,
                'date' => '2021-06-01',
            ),
            141 => 
            array (
                'id' => 177,
                'worktime_id' => 6,
                'user_id' => 9,
                'date' => '2021-06-03',
            ),
            142 => 
            array (
                'id' => 178,
                'worktime_id' => 18,
                'user_id' => 9,
                'date' => '2021-06-04',
            ),
            143 => 
            array (
                'id' => 179,
                'worktime_id' => 19,
                'user_id' => 9,
                'date' => '2021-06-07',
            ),
            144 => 
            array (
                'id' => 180,
                'worktime_id' => 12,
                'user_id' => 9,
                'date' => '2021-06-08',
            ),
            145 => 
            array (
                'id' => 181,
                'worktime_id' => 12,
                'user_id' => 9,
                'date' => '2021-06-09',
            ),
            146 => 
            array (
                'id' => 182,
                'worktime_id' => 12,
                'user_id' => 9,
                'date' => '2021-06-10',
            ),
            147 => 
            array (
                'id' => 183,
                'worktime_id' => 12,
                'user_id' => 9,
                'date' => '2021-06-11',
            ),
            148 => 
            array (
                'id' => 184,
                'worktime_id' => 15,
                'user_id' => 9,
                'date' => '2021-06-14',
            ),
            149 => 
            array (
                'id' => 185,
                'worktime_id' => 18,
                'user_id' => 9,
                'date' => '2021-06-15',
            ),
            150 => 
            array (
                'id' => 186,
                'worktime_id' => 10,
                'user_id' => 9,
                'date' => '2021-06-16',
            ),
            151 => 
            array (
                'id' => 187,
                'worktime_id' => 18,
                'user_id' => 9,
                'date' => '2021-06-17',
            ),
            152 => 
            array (
                'id' => 188,
                'worktime_id' => 16,
                'user_id' => 9,
                'date' => '2021-06-18',
            ),
            153 => 
            array (
                'id' => 189,
                'worktime_id' => 16,
                'user_id' => 9,
                'date' => '2021-06-21',
            ),
            154 => 
            array (
                'id' => 190,
                'worktime_id' => 6,
                'user_id' => 9,
                'date' => '2021-06-22',
            ),
            155 => 
            array (
                'id' => 191,
                'worktime_id' => 18,
                'user_id' => 9,
                'date' => '2021-06-23',
            ),
            156 => 
            array (
                'id' => 192,
                'worktime_id' => 20,
                'user_id' => 9,
                'date' => '2021-06-24',
            ),
            157 => 
            array (
                'id' => 193,
                'worktime_id' => 15,
                'user_id' => 9,
                'date' => '2021-06-25',
            ),
            158 => 
            array (
                'id' => 194,
                'worktime_id' => 18,
                'user_id' => 9,
                'date' => '2021-06-28',
            ),
            159 => 
            array (
                'id' => 195,
                'worktime_id' => 14,
                'user_id' => 9,
                'date' => '2021-06-29',
            ),
            160 => 
            array (
                'id' => 196,
                'worktime_id' => 7,
                'user_id' => 9,
                'date' => '2021-07-01',
            ),
            161 => 
            array (
                'id' => 197,
                'worktime_id' => 14,
                'user_id' => 10,
                'date' => '2021-06-01',
            ),
            162 => 
            array (
                'id' => 198,
                'worktime_id' => 4,
                'user_id' => 10,
                'date' => '2021-06-04',
            ),
            163 => 
            array (
                'id' => 199,
                'worktime_id' => 4,
                'user_id' => 10,
                'date' => '2021-06-05',
            ),
            164 => 
            array (
                'id' => 200,
                'worktime_id' => 4,
                'user_id' => 10,
                'date' => '2021-06-06',
            ),
            165 => 
            array (
                'id' => 201,
                'worktime_id' => 19,
                'user_id' => 10,
                'date' => '2021-06-07',
            ),
            166 => 
            array (
                'id' => 202,
                'worktime_id' => 5,
                'user_id' => 10,
                'date' => '2021-06-09',
            ),
            167 => 
            array (
                'id' => 203,
                'worktime_id' => 6,
                'user_id' => 10,
                'date' => '2021-06-10',
            ),
            168 => 
            array (
                'id' => 204,
                'worktime_id' => 8,
                'user_id' => 10,
                'date' => '2021-06-14',
            ),
            169 => 
            array (
                'id' => 205,
                'worktime_id' => 8,
                'user_id' => 10,
                'date' => '2021-06-15',
            ),
            170 => 
            array (
                'id' => 206,
                'worktime_id' => 2,
                'user_id' => 10,
                'date' => '2021-06-18',
            ),
            171 => 
            array (
                'id' => 207,
                'worktime_id' => 4,
                'user_id' => 10,
                'date' => '2021-06-23',
            ),
            172 => 
            array (
                'id' => 208,
                'worktime_id' => 4,
                'user_id' => 10,
                'date' => '2021-06-24',
            ),
            173 => 
            array (
                'id' => 209,
                'worktime_id' => 5,
                'user_id' => 10,
                'date' => '2021-06-28',
            ),
            174 => 
            array (
                'id' => 210,
                'worktime_id' => 6,
                'user_id' => 10,
                'date' => '2021-06-29',
            ),
            175 => 
            array (
                'id' => 211,
                'worktime_id' => 10,
                'user_id' => 11,
                'date' => '2021-06-01',
            ),
            176 => 
            array (
                'id' => 212,
                'worktime_id' => 6,
                'user_id' => 11,
                'date' => '2021-06-03',
            ),
            177 => 
            array (
                'id' => 213,
                'worktime_id' => 18,
                'user_id' => 11,
                'date' => '2021-06-04',
            ),
            178 => 
            array (
                'id' => 214,
                'worktime_id' => 19,
                'user_id' => 11,
                'date' => '2021-06-07',
            ),
            179 => 
            array (
                'id' => 215,
                'worktime_id' => 12,
                'user_id' => 11,
                'date' => '2021-06-08',
            ),
            180 => 
            array (
                'id' => 216,
                'worktime_id' => 12,
                'user_id' => 11,
                'date' => '2021-06-09',
            ),
            181 => 
            array (
                'id' => 217,
                'worktime_id' => 12,
                'user_id' => 11,
                'date' => '2021-06-10',
            ),
            182 => 
            array (
                'id' => 218,
                'worktime_id' => 12,
                'user_id' => 11,
                'date' => '2021-06-11',
            ),
            183 => 
            array (
                'id' => 219,
                'worktime_id' => 15,
                'user_id' => 11,
                'date' => '2021-06-14',
            ),
            184 => 
            array (
                'id' => 220,
                'worktime_id' => 18,
                'user_id' => 11,
                'date' => '2021-06-15',
            ),
            185 => 
            array (
                'id' => 221,
                'worktime_id' => 10,
                'user_id' => 11,
                'date' => '2021-06-16',
            ),
            186 => 
            array (
                'id' => 222,
                'worktime_id' => 18,
                'user_id' => 11,
                'date' => '2021-06-17',
            ),
            187 => 
            array (
                'id' => 223,
                'worktime_id' => 16,
                'user_id' => 11,
                'date' => '2021-06-18',
            ),
            188 => 
            array (
                'id' => 224,
                'worktime_id' => 16,
                'user_id' => 11,
                'date' => '2021-06-21',
            ),
            189 => 
            array (
                'id' => 225,
                'worktime_id' => 6,
                'user_id' => 11,
                'date' => '2021-06-22',
            ),
            190 => 
            array (
                'id' => 226,
                'worktime_id' => 18,
                'user_id' => 11,
                'date' => '2021-06-23',
            ),
            191 => 
            array (
                'id' => 227,
                'worktime_id' => 20,
                'user_id' => 11,
                'date' => '2021-06-24',
            ),
            192 => 
            array (
                'id' => 228,
                'worktime_id' => 15,
                'user_id' => 11,
                'date' => '2021-06-25',
            ),
            193 => 
            array (
                'id' => 229,
                'worktime_id' => 18,
                'user_id' => 11,
                'date' => '2021-06-28',
            ),
            194 => 
            array (
                'id' => 230,
                'worktime_id' => 14,
                'user_id' => 11,
                'date' => '2021-06-29',
            ),
            195 => 
            array (
                'id' => 231,
                'worktime_id' => 7,
                'user_id' => 11,
                'date' => '2021-07-01',
            ),
            196 => 
            array (
                'id' => 232,
                'worktime_id' => 14,
                'user_id' => 12,
                'date' => '2021-06-01',
            ),
            197 => 
            array (
                'id' => 233,
                'worktime_id' => 4,
                'user_id' => 12,
                'date' => '2021-06-04',
            ),
            198 => 
            array (
                'id' => 234,
                'worktime_id' => 4,
                'user_id' => 12,
                'date' => '2021-06-05',
            ),
            199 => 
            array (
                'id' => 235,
                'worktime_id' => 4,
                'user_id' => 12,
                'date' => '2021-06-06',
            ),
            200 => 
            array (
                'id' => 236,
                'worktime_id' => 19,
                'user_id' => 12,
                'date' => '2021-06-07',
            ),
            201 => 
            array (
                'id' => 237,
                'worktime_id' => 5,
                'user_id' => 12,
                'date' => '2021-06-09',
            ),
            202 => 
            array (
                'id' => 238,
                'worktime_id' => 6,
                'user_id' => 12,
                'date' => '2021-06-10',
            ),
            203 => 
            array (
                'id' => 239,
                'worktime_id' => 8,
                'user_id' => 12,
                'date' => '2021-06-14',
            ),
            204 => 
            array (
                'id' => 240,
                'worktime_id' => 8,
                'user_id' => 12,
                'date' => '2021-06-15',
            ),
            205 => 
            array (
                'id' => 241,
                'worktime_id' => 2,
                'user_id' => 12,
                'date' => '2021-06-18',
            ),
            206 => 
            array (
                'id' => 242,
                'worktime_id' => 4,
                'user_id' => 12,
                'date' => '2021-06-23',
            ),
            207 => 
            array (
                'id' => 243,
                'worktime_id' => 4,
                'user_id' => 12,
                'date' => '2021-06-24',
            ),
            208 => 
            array (
                'id' => 244,
                'worktime_id' => 5,
                'user_id' => 12,
                'date' => '2021-06-28',
            ),
            209 => 
            array (
                'id' => 245,
                'worktime_id' => 6,
                'user_id' => 12,
                'date' => '2021-06-29',
            ),
            210 => 
            array (
                'id' => 246,
                'worktime_id' => 10,
                'user_id' => 104,
                'date' => '2021-06-01',
            ),
            211 => 
            array (
                'id' => 247,
                'worktime_id' => 6,
                'user_id' => 104,
                'date' => '2021-06-03',
            ),
            212 => 
            array (
                'id' => 248,
                'worktime_id' => 18,
                'user_id' => 104,
                'date' => '2021-06-04',
            ),
            213 => 
            array (
                'id' => 249,
                'worktime_id' => 19,
                'user_id' => 104,
                'date' => '2021-06-07',
            ),
            214 => 
            array (
                'id' => 250,
                'worktime_id' => 12,
                'user_id' => 104,
                'date' => '2021-06-08',
            ),
            215 => 
            array (
                'id' => 251,
                'worktime_id' => 12,
                'user_id' => 104,
                'date' => '2021-06-09',
            ),
            216 => 
            array (
                'id' => 252,
                'worktime_id' => 12,
                'user_id' => 104,
                'date' => '2021-06-10',
            ),
            217 => 
            array (
                'id' => 253,
                'worktime_id' => 12,
                'user_id' => 104,
                'date' => '2021-06-11',
            ),
            218 => 
            array (
                'id' => 254,
                'worktime_id' => 15,
                'user_id' => 104,
                'date' => '2021-06-14',
            ),
            219 => 
            array (
                'id' => 255,
                'worktime_id' => 18,
                'user_id' => 104,
                'date' => '2021-06-15',
            ),
            220 => 
            array (
                'id' => 256,
                'worktime_id' => 10,
                'user_id' => 104,
                'date' => '2021-06-16',
            ),
            221 => 
            array (
                'id' => 257,
                'worktime_id' => 18,
                'user_id' => 104,
                'date' => '2021-06-17',
            ),
            222 => 
            array (
                'id' => 258,
                'worktime_id' => 16,
                'user_id' => 104,
                'date' => '2021-06-18',
            ),
            223 => 
            array (
                'id' => 259,
                'worktime_id' => 16,
                'user_id' => 104,
                'date' => '2021-06-21',
            ),
            224 => 
            array (
                'id' => 260,
                'worktime_id' => 6,
                'user_id' => 104,
                'date' => '2021-06-22',
            ),
            225 => 
            array (
                'id' => 261,
                'worktime_id' => 18,
                'user_id' => 104,
                'date' => '2021-06-23',
            ),
            226 => 
            array (
                'id' => 262,
                'worktime_id' => 20,
                'user_id' => 104,
                'date' => '2021-06-24',
            ),
            227 => 
            array (
                'id' => 263,
                'worktime_id' => 15,
                'user_id' => 104,
                'date' => '2021-06-25',
            ),
            228 => 
            array (
                'id' => 264,
                'worktime_id' => 18,
                'user_id' => 104,
                'date' => '2021-06-28',
            ),
            229 => 
            array (
                'id' => 265,
                'worktime_id' => 14,
                'user_id' => 104,
                'date' => '2021-06-29',
            ),
            230 => 
            array (
                'id' => 266,
                'worktime_id' => 7,
                'user_id' => 104,
                'date' => '2021-07-01',
            ),
        ));
        
        
    }
}