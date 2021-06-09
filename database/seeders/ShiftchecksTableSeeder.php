<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftchecksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftchecks')->delete();
        
        \DB::table('shiftchecks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 1,
                'shiftaction_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            4 => 
            array (
                'id' => 5,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 7,
            ),
            6 => 
            array (
                'id' => 7,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 7,
                'shiftaction_id' => 8,
            ),
            7 => 
            array (
                'id' => 8,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            8 => 
            array (
                'id' => 9,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            9 => 
            array (
                'id' => 10,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            10 => 
            array (
                'id' => 11,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            11 => 
            array (
                'id' => 12,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 16,
            ),
            12 => 
            array (
                'id' => 13,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            13 => 
            array (
                'id' => 14,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            14 => 
            array (
                'id' => 15,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 11,
                'shiftaction_id' => 17,
            ),
            15 => 
            array (
                'id' => 16,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            16 => 
            array (
                'id' => 17,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            17 => 
            array (
                'id' => 18,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 6,
            ),
            21 => 
            array (
                'id' => 22,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            22 => 
            array (
                'id' => 23,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 6,
                'shiftaction_id' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            24 => 
            array (
                'id' => 25,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 11,
            ),
            25 => 
            array (
                'id' => 26,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            26 => 
            array (
                'id' => 27,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            27 => 
            array (
                'id' => 28,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            28 => 
            array (
                'id' => 29,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 11,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            29 => 
            array (
                'id' => 30,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            30 => 
            array (
                'id' => 31,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            31 => 
            array (
                'id' => 32,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            32 => 
            array (
                'id' => 33,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            33 => 
            array (
                'id' => 34,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 12,
                'shiftaction_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            37 => 
            array (
                'id' => 38,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            38 => 
            array (
                'id' => 39,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            39 => 
            array (
                'id' => 40,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            40 => 
            array (
                'id' => 41,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            41 => 
            array (
                'id' => 42,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            42 => 
            array (
                'id' => 43,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            43 => 
            array (
                'id' => 44,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 104,
                'shiftaction_id' => 15,
            ),
            44 => 
            array (
                'id' => 45,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            45 => 
            array (
                'id' => 46,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            46 => 
            array (
                'id' => 47,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            47 => 
            array (
                'id' => 48,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 1,
                'shiftaction_id' => 19,
            ),
            48 => 
            array (
                'id' => 49,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 38,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            49 => 
            array (
                'id' => 50,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 5,
                'shiftaction_id' => 2,
            ),
            51 => 
            array (
                'id' => 52,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            52 => 
            array (
                'id' => 53,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            53 => 
            array (
                'id' => 54,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 7,
                'shiftaction_id' => 4,
            ),
            54 => 
            array (
                'id' => 55,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 2,
                'shiftaction_id' => 8,
            ),
            55 => 
            array (
                'id' => 56,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            56 => 
            array (
                'id' => 57,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 8,
                'shiftaction_id' => 9,
            ),
            57 => 
            array (
                'id' => 58,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 1,
                'shiftaction_id' => 10,
            ),
            58 => 
            array (
                'id' => 59,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            59 => 
            array (
                'id' => 60,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 6,
                'shiftaction_id' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            62 => 
            array (
                'id' => 63,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            63 => 
            array (
                'id' => 64,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 104,
                'shiftaction_id' => 17,
            ),
            64 => 
            array (
                'id' => 65,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 53,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            65 => 
            array (
                'id' => 66,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 10,
                'shiftaction_id' => 6,
            ),
            69 => 
            array (
                'id' => 70,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            70 => 
            array (
                'id' => 71,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            71 => 
            array (
                'id' => 72,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            72 => 
            array (
                'id' => 73,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 5,
                'shiftaction_id' => 9,
            ),
            73 => 
            array (
                'id' => 74,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 4,
                'shiftaction_id' => 10,
            ),
            74 => 
            array (
                'id' => 75,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            75 => 
            array (
                'id' => 76,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            76 => 
            array (
                'id' => 77,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            77 => 
            array (
                'id' => 78,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 3,
                'shiftaction_id' => 13,
            ),
            78 => 
            array (
                'id' => 79,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 1,
                'shiftaction_id' => 14,
            ),
            79 => 
            array (
                'id' => 80,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            80 => 
            array (
                'id' => 81,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 2,
                'shiftaction_id' => 16,
            ),
            81 => 
            array (
                'id' => 82,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            82 => 
            array (
                'id' => 83,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            83 => 
            array (
                'id' => 84,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            84 => 
            array (
                'id' => 85,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 68,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            85 => 
            array (
                'id' => 86,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            90 => 
            array (
                'id' => 91,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            91 => 
            array (
                'id' => 92,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            92 => 
            array (
                'id' => 93,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 4,
            ),
            93 => 
            array (
                'id' => 94,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 5,
            ),
            94 => 
            array (
                'id' => 95,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            95 => 
            array (
                'id' => 96,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 6,
            ),
            96 => 
            array (
                'id' => 97,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 7,
                'shiftaction_id' => 6,
            ),
            97 => 
            array (
                'id' => 98,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            98 => 
            array (
                'id' => 99,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            99 => 
            array (
                'id' => 100,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            100 => 
            array (
                'id' => 101,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            101 => 
            array (
                'id' => 102,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 8,
                'shiftaction_id' => 9,
            ),
            102 => 
            array (
                'id' => 103,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 5,
                'shiftaction_id' => 9,
            ),
            103 => 
            array (
                'id' => 104,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            104 => 
            array (
                'id' => 105,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            105 => 
            array (
                'id' => 106,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            106 => 
            array (
                'id' => 107,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            107 => 
            array (
                'id' => 108,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 12,
            ),
            108 => 
            array (
                'id' => 109,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 12,
            ),
            109 => 
            array (
                'id' => 110,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            110 => 
            array (
                'id' => 111,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            111 => 
            array (
                'id' => 112,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 14,
            ),
            112 => 
            array (
                'id' => 113,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            113 => 
            array (
                'id' => 114,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            114 => 
            array (
                'id' => 115,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 4,
                'shiftaction_id' => 15,
            ),
            115 => 
            array (
                'id' => 116,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            116 => 
            array (
                'id' => 117,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            117 => 
            array (
                'id' => 118,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 8,
                'shiftaction_id' => 17,
            ),
            118 => 
            array (
                'id' => 119,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            119 => 
            array (
                'id' => 120,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            120 => 
            array (
                'id' => 121,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 12,
                'shiftaction_id' => 18,
            ),
            121 => 
            array (
                'id' => 122,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 9,
                'shiftaction_id' => 19,
            ),
            122 => 
            array (
                'id' => 123,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 1,
                'user_id' => 2,
                'shiftaction_id' => 19,
            ),
            123 => 
            array (
                'id' => 124,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 12,
                'shiftaction_id' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            127 => 
            array (
                'id' => 128,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 1,
                'shiftaction_id' => 3,
            ),
            128 => 
            array (
                'id' => 129,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            129 => 
            array (
                'id' => 130,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            130 => 
            array (
                'id' => 131,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 10,
                'shiftaction_id' => 4,
            ),
            131 => 
            array (
                'id' => 132,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            132 => 
            array (
                'id' => 133,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            133 => 
            array (
                'id' => 134,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            134 => 
            array (
                'id' => 135,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 6,
                'shiftaction_id' => 6,
            ),
            135 => 
            array (
                'id' => 136,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 7,
            ),
            136 => 
            array (
                'id' => 137,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            137 => 
            array (
                'id' => 138,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 8,
            ),
            138 => 
            array (
                'id' => 139,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            139 => 
            array (
                'id' => 140,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            140 => 
            array (
                'id' => 141,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 6,
                'shiftaction_id' => 9,
            ),
            141 => 
            array (
                'id' => 142,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            142 => 
            array (
                'id' => 143,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            143 => 
            array (
                'id' => 144,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            144 => 
            array (
                'id' => 145,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 2,
                'shiftaction_id' => 11,
            ),
            145 => 
            array (
                'id' => 146,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 1,
                'shiftaction_id' => 12,
            ),
            146 => 
            array (
                'id' => 147,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            147 => 
            array (
                'id' => 148,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 8,
                'shiftaction_id' => 13,
            ),
            148 => 
            array (
                'id' => 149,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            149 => 
            array (
                'id' => 150,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 10,
                'shiftaction_id' => 14,
            ),
            150 => 
            array (
                'id' => 151,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 9,
                'shiftaction_id' => 14,
            ),
            151 => 
            array (
                'id' => 152,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            152 => 
            array (
                'id' => 153,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            153 => 
            array (
                'id' => 154,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            154 => 
            array (
                'id' => 155,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            155 => 
            array (
                'id' => 156,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            156 => 
            array (
                'id' => 157,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 8,
                'shiftaction_id' => 17,
            ),
            157 => 
            array (
                'id' => 158,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 8,
                'shiftaction_id' => 18,
            ),
            158 => 
            array (
                'id' => 159,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            159 => 
            array (
                'id' => 160,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            160 => 
            array (
                'id' => 161,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 2,
                'user_id' => 4,
                'shiftaction_id' => 19,
            ),
            161 => 
            array (
                'id' => 162,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 2,
            ),
            164 => 
            array (
                'id' => 165,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            165 => 
            array (
                'id' => 166,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 1,
                'shiftaction_id' => 3,
            ),
            166 => 
            array (
                'id' => 167,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 12,
                'shiftaction_id' => 3,
            ),
            167 => 
            array (
                'id' => 168,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 10,
                'shiftaction_id' => 4,
            ),
            168 => 
            array (
                'id' => 169,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            169 => 
            array (
                'id' => 170,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 8,
                'shiftaction_id' => 5,
            ),
            170 => 
            array (
                'id' => 171,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 104,
                'shiftaction_id' => 5,
            ),
            171 => 
            array (
                'id' => 172,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            172 => 
            array (
                'id' => 173,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 3,
                'shiftaction_id' => 6,
            ),
            173 => 
            array (
                'id' => 174,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 11,
                'shiftaction_id' => 7,
            ),
            174 => 
            array (
                'id' => 175,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 3,
                'shiftaction_id' => 7,
            ),
            175 => 
            array (
                'id' => 176,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 8,
            ),
            176 => 
            array (
                'id' => 177,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            177 => 
            array (
                'id' => 178,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            178 => 
            array (
                'id' => 179,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            179 => 
            array (
                'id' => 180,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 4,
                'shiftaction_id' => 10,
            ),
            180 => 
            array (
                'id' => 181,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 2,
                'shiftaction_id' => 10,
            ),
            181 => 
            array (
                'id' => 182,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            182 => 
            array (
                'id' => 183,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            183 => 
            array (
                'id' => 184,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            184 => 
            array (
                'id' => 185,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            185 => 
            array (
                'id' => 186,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            186 => 
            array (
                'id' => 187,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            187 => 
            array (
                'id' => 188,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            188 => 
            array (
                'id' => 189,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 3,
                'shiftaction_id' => 14,
            ),
            189 => 
            array (
                'id' => 190,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            190 => 
            array (
                'id' => 191,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 1,
                'shiftaction_id' => 15,
            ),
            191 => 
            array (
                'id' => 192,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 9,
                'shiftaction_id' => 16,
            ),
            192 => 
            array (
                'id' => 193,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            193 => 
            array (
                'id' => 194,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            194 => 
            array (
                'id' => 195,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 7,
                'shiftaction_id' => 17,
            ),
            195 => 
            array (
                'id' => 196,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            196 => 
            array (
                'id' => 197,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 5,
                'shiftaction_id' => 18,
            ),
            197 => 
            array (
                'id' => 198,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 4,
                'shiftaction_id' => 19,
            ),
            198 => 
            array (
                'id' => 199,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 3,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            199 => 
            array (
                'id' => 200,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            201 => 
            array (
                'id' => 202,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            202 => 
            array (
                'id' => 203,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 4,
                'shiftaction_id' => 2,
            ),
            203 => 
            array (
                'id' => 204,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 7,
                'shiftaction_id' => 3,
            ),
            204 => 
            array (
                'id' => 205,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 5,
                'shiftaction_id' => 3,
            ),
            205 => 
            array (
                'id' => 206,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            206 => 
            array (
                'id' => 207,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            207 => 
            array (
                'id' => 208,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            208 => 
            array (
                'id' => 209,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            209 => 
            array (
                'id' => 210,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 10,
                'shiftaction_id' => 6,
            ),
            210 => 
            array (
                'id' => 211,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            211 => 
            array (
                'id' => 212,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            212 => 
            array (
                'id' => 213,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            213 => 
            array (
                'id' => 214,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 9,
                'shiftaction_id' => 8,
            ),
            214 => 
            array (
                'id' => 215,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            215 => 
            array (
                'id' => 216,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            216 => 
            array (
                'id' => 217,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 4,
                'shiftaction_id' => 9,
            ),
            217 => 
            array (
                'id' => 218,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            218 => 
            array (
                'id' => 219,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            219 => 
            array (
                'id' => 220,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            220 => 
            array (
                'id' => 221,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            221 => 
            array (
                'id' => 222,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            222 => 
            array (
                'id' => 223,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            223 => 
            array (
                'id' => 224,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            224 => 
            array (
                'id' => 225,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            225 => 
            array (
                'id' => 226,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 7,
                'shiftaction_id' => 14,
            ),
            226 => 
            array (
                'id' => 227,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            227 => 
            array (
                'id' => 228,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            228 => 
            array (
                'id' => 229,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 1,
                'shiftaction_id' => 16,
            ),
            229 => 
            array (
                'id' => 230,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 11,
                'shiftaction_id' => 16,
            ),
            230 => 
            array (
                'id' => 231,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            231 => 
            array (
                'id' => 232,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            232 => 
            array (
                'id' => 233,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 4,
                'shiftaction_id' => 18,
            ),
            233 => 
            array (
                'id' => 234,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            234 => 
            array (
                'id' => 235,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            235 => 
            array (
                'id' => 236,
                'day' => 1,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 4,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
            236 => 
            array (
                'id' => 237,
                'day' => 0,
                'time' => '2021-06-09 16:47:44',
                'shiftsheet_id' => 5,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            237 => 
            array (
                'id' => 238,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            238 => 
            array (
                'id' => 239,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            239 => 
            array (
                'id' => 240,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            240 => 
            array (
                'id' => 241,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            241 => 
            array (
                'id' => 242,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            242 => 
            array (
                'id' => 243,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 11,
                'shiftaction_id' => 4,
            ),
            243 => 
            array (
                'id' => 244,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            244 => 
            array (
                'id' => 245,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            245 => 
            array (
                'id' => 246,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            246 => 
            array (
                'id' => 247,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 10,
                'shiftaction_id' => 6,
            ),
            247 => 
            array (
                'id' => 248,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            248 => 
            array (
                'id' => 249,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            249 => 
            array (
                'id' => 250,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 6,
                'shiftaction_id' => 7,
            ),
            250 => 
            array (
                'id' => 251,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            251 => 
            array (
                'id' => 252,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 1,
                'shiftaction_id' => 8,
            ),
            252 => 
            array (
                'id' => 253,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 7,
                'shiftaction_id' => 9,
            ),
            253 => 
            array (
                'id' => 254,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 9,
            ),
            254 => 
            array (
                'id' => 255,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            255 => 
            array (
                'id' => 256,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 10,
            ),
            256 => 
            array (
                'id' => 257,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 11,
            ),
            257 => 
            array (
                'id' => 258,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 11,
            ),
            258 => 
            array (
                'id' => 259,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            259 => 
            array (
                'id' => 260,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            260 => 
            array (
                'id' => 261,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 4,
                'shiftaction_id' => 13,
            ),
            261 => 
            array (
                'id' => 262,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            262 => 
            array (
                'id' => 263,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            263 => 
            array (
                'id' => 264,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 10,
                'shiftaction_id' => 14,
            ),
            264 => 
            array (
                'id' => 265,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            265 => 
            array (
                'id' => 266,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 5,
                'shiftaction_id' => 15,
            ),
            266 => 
            array (
                'id' => 267,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            267 => 
            array (
                'id' => 268,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            268 => 
            array (
                'id' => 269,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            269 => 
            array (
                'id' => 270,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            270 => 
            array (
                'id' => 271,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 9,
                'shiftaction_id' => 18,
            ),
            271 => 
            array (
                'id' => 272,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            272 => 
            array (
                'id' => 273,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 1,
                'shiftaction_id' => 19,
            ),
            273 => 
            array (
                'id' => 274,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 5,
                'user_id' => 10,
                'shiftaction_id' => 19,
            ),
            274 => 
            array (
                'id' => 275,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 1,
                'shiftaction_id' => 1,
            ),
            275 => 
            array (
                'id' => 276,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            276 => 
            array (
                'id' => 277,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            277 => 
            array (
                'id' => 278,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            278 => 
            array (
                'id' => 279,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            279 => 
            array (
                'id' => 280,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            280 => 
            array (
                'id' => 281,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            281 => 
            array (
                'id' => 282,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            282 => 
            array (
                'id' => 283,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            283 => 
            array (
                'id' => 284,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 11,
                'shiftaction_id' => 5,
            ),
            284 => 
            array (
                'id' => 285,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 7,
                'shiftaction_id' => 6,
            ),
            285 => 
            array (
                'id' => 286,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            286 => 
            array (
                'id' => 287,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 9,
                'shiftaction_id' => 7,
            ),
            287 => 
            array (
                'id' => 288,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            288 => 
            array (
                'id' => 289,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            289 => 
            array (
                'id' => 290,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 1,
                'shiftaction_id' => 8,
            ),
            290 => 
            array (
                'id' => 291,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 6,
                'shiftaction_id' => 9,
            ),
            291 => 
            array (
                'id' => 292,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            292 => 
            array (
                'id' => 293,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            293 => 
            array (
                'id' => 294,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            294 => 
            array (
                'id' => 295,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 6,
                'shiftaction_id' => 11,
            ),
            295 => 
            array (
                'id' => 296,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 11,
            ),
            296 => 
            array (
                'id' => 297,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            297 => 
            array (
                'id' => 298,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            298 => 
            array (
                'id' => 299,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            299 => 
            array (
                'id' => 300,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            300 => 
            array (
                'id' => 301,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            301 => 
            array (
                'id' => 302,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            302 => 
            array (
                'id' => 303,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            303 => 
            array (
                'id' => 304,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 15,
            ),
            304 => 
            array (
                'id' => 305,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            305 => 
            array (
                'id' => 306,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            306 => 
            array (
                'id' => 307,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            307 => 
            array (
                'id' => 308,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            308 => 
            array (
                'id' => 309,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            309 => 
            array (
                'id' => 310,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            310 => 
            array (
                'id' => 311,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            311 => 
            array (
                'id' => 312,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 6,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            312 => 
            array (
                'id' => 313,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            313 => 
            array (
                'id' => 314,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            314 => 
            array (
                'id' => 315,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            315 => 
            array (
                'id' => 316,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            316 => 
            array (
                'id' => 317,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 8,
                'shiftaction_id' => 3,
            ),
            317 => 
            array (
                'id' => 318,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 12,
                'shiftaction_id' => 3,
            ),
            318 => 
            array (
                'id' => 319,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 12,
                'shiftaction_id' => 4,
            ),
            319 => 
            array (
                'id' => 320,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            320 => 
            array (
                'id' => 321,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            321 => 
            array (
                'id' => 322,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            322 => 
            array (
                'id' => 323,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            323 => 
            array (
                'id' => 324,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 2,
                'shiftaction_id' => 6,
            ),
            324 => 
            array (
                'id' => 325,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 7,
            ),
            325 => 
            array (
                'id' => 326,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            326 => 
            array (
                'id' => 327,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            327 => 
            array (
                'id' => 328,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 10,
                'shiftaction_id' => 8,
            ),
            328 => 
            array (
                'id' => 329,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 9,
            ),
            329 => 
            array (
                'id' => 330,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 11,
                'shiftaction_id' => 9,
            ),
            330 => 
            array (
                'id' => 331,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 10,
            ),
            331 => 
            array (
                'id' => 332,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 10,
            ),
            332 => 
            array (
                'id' => 333,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            333 => 
            array (
                'id' => 334,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 104,
                'shiftaction_id' => 11,
            ),
            334 => 
            array (
                'id' => 335,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 1,
                'shiftaction_id' => 12,
            ),
            335 => 
            array (
                'id' => 336,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            336 => 
            array (
                'id' => 337,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            337 => 
            array (
                'id' => 338,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            338 => 
            array (
                'id' => 339,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            339 => 
            array (
                'id' => 340,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 14,
            ),
            340 => 
            array (
                'id' => 341,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            341 => 
            array (
                'id' => 342,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            342 => 
            array (
                'id' => 343,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            343 => 
            array (
                'id' => 344,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            344 => 
            array (
                'id' => 345,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            345 => 
            array (
                'id' => 346,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            346 => 
            array (
                'id' => 347,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            347 => 
            array (
                'id' => 348,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 5,
                'shiftaction_id' => 18,
            ),
            348 => 
            array (
                'id' => 349,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            349 => 
            array (
                'id' => 350,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 7,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            350 => 
            array (
                'id' => 351,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 1,
                'shiftaction_id' => 1,
            ),
            351 => 
            array (
                'id' => 352,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 104,
                'shiftaction_id' => 1,
            ),
            352 => 
            array (
                'id' => 353,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 7,
                'shiftaction_id' => 2,
            ),
            353 => 
            array (
                'id' => 354,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            354 => 
            array (
                'id' => 355,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 3,
                'shiftaction_id' => 3,
            ),
            355 => 
            array (
                'id' => 356,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            356 => 
            array (
                'id' => 357,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            357 => 
            array (
                'id' => 358,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            358 => 
            array (
                'id' => 359,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 3,
                'shiftaction_id' => 5,
            ),
            359 => 
            array (
                'id' => 360,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 104,
                'shiftaction_id' => 5,
            ),
            360 => 
            array (
                'id' => 361,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 2,
                'shiftaction_id' => 6,
            ),
            361 => 
            array (
                'id' => 362,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 6,
            ),
            362 => 
            array (
                'id' => 363,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            363 => 
            array (
                'id' => 364,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            364 => 
            array (
                'id' => 365,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 8,
                'shiftaction_id' => 8,
            ),
            365 => 
            array (
                'id' => 366,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 2,
                'shiftaction_id' => 8,
            ),
            366 => 
            array (
                'id' => 367,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            367 => 
            array (
                'id' => 368,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            368 => 
            array (
                'id' => 369,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 10,
            ),
            369 => 
            array (
                'id' => 370,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 1,
                'shiftaction_id' => 10,
            ),
            370 => 
            array (
                'id' => 371,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            371 => 
            array (
                'id' => 372,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            372 => 
            array (
                'id' => 373,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            373 => 
            array (
                'id' => 374,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            374 => 
            array (
                'id' => 375,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            375 => 
            array (
                'id' => 376,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            376 => 
            array (
                'id' => 377,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 11,
                'shiftaction_id' => 14,
            ),
            377 => 
            array (
                'id' => 378,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 1,
                'shiftaction_id' => 14,
            ),
            378 => 
            array (
                'id' => 379,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            379 => 
            array (
                'id' => 380,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 3,
                'shiftaction_id' => 15,
            ),
            380 => 
            array (
                'id' => 381,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            381 => 
            array (
                'id' => 382,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            382 => 
            array (
                'id' => 383,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            383 => 
            array (
                'id' => 384,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            384 => 
            array (
                'id' => 385,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            385 => 
            array (
                'id' => 386,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 9,
                'shiftaction_id' => 18,
            ),
            386 => 
            array (
                'id' => 387,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 9,
                'shiftaction_id' => 19,
            ),
            387 => 
            array (
                'id' => 388,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 16,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            388 => 
            array (
                'id' => 389,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            389 => 
            array (
                'id' => 390,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            390 => 
            array (
                'id' => 391,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 5,
                'shiftaction_id' => 2,
            ),
            391 => 
            array (
                'id' => 392,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 7,
                'shiftaction_id' => 2,
            ),
            392 => 
            array (
                'id' => 393,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 7,
                'shiftaction_id' => 3,
            ),
            393 => 
            array (
                'id' => 394,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 6,
                'shiftaction_id' => 3,
            ),
            394 => 
            array (
                'id' => 395,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            395 => 
            array (
                'id' => 396,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            396 => 
            array (
                'id' => 397,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 11,
                'shiftaction_id' => 5,
            ),
            397 => 
            array (
                'id' => 398,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 5,
            ),
            398 => 
            array (
                'id' => 399,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            399 => 
            array (
                'id' => 400,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            400 => 
            array (
                'id' => 401,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 6,
                'shiftaction_id' => 7,
            ),
            401 => 
            array (
                'id' => 402,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 104,
                'shiftaction_id' => 7,
            ),
            402 => 
            array (
                'id' => 403,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 9,
                'shiftaction_id' => 8,
            ),
            403 => 
            array (
                'id' => 404,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 10,
                'shiftaction_id' => 8,
            ),
            404 => 
            array (
                'id' => 405,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 9,
                'shiftaction_id' => 9,
            ),
            405 => 
            array (
                'id' => 406,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 9,
            ),
            406 => 
            array (
                'id' => 407,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            407 => 
            array (
                'id' => 408,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            408 => 
            array (
                'id' => 409,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            409 => 
            array (
                'id' => 410,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            410 => 
            array (
                'id' => 411,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            411 => 
            array (
                'id' => 412,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            412 => 
            array (
                'id' => 413,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            413 => 
            array (
                'id' => 414,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 2,
                'shiftaction_id' => 13,
            ),
            414 => 
            array (
                'id' => 415,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            415 => 
            array (
                'id' => 416,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 10,
                'shiftaction_id' => 14,
            ),
            416 => 
            array (
                'id' => 417,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            417 => 
            array (
                'id' => 418,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 4,
                'shiftaction_id' => 15,
            ),
            418 => 
            array (
                'id' => 419,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            419 => 
            array (
                'id' => 420,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            420 => 
            array (
                'id' => 421,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            421 => 
            array (
                'id' => 422,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            422 => 
            array (
                'id' => 423,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            423 => 
            array (
                'id' => 424,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            424 => 
            array (
                'id' => 425,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            425 => 
            array (
                'id' => 426,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 17,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            426 => 
            array (
                'id' => 427,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            427 => 
            array (
                'id' => 428,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 104,
                'shiftaction_id' => 1,
            ),
            428 => 
            array (
                'id' => 429,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            429 => 
            array (
                'id' => 430,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            430 => 
            array (
                'id' => 431,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            431 => 
            array (
                'id' => 432,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 10,
                'shiftaction_id' => 3,
            ),
            432 => 
            array (
                'id' => 433,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 4,
            ),
            433 => 
            array (
                'id' => 434,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 4,
            ),
            434 => 
            array (
                'id' => 435,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 3,
                'shiftaction_id' => 5,
            ),
            435 => 
            array (
                'id' => 436,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            436 => 
            array (
                'id' => 437,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 11,
                'shiftaction_id' => 6,
            ),
            437 => 
            array (
                'id' => 438,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 6,
            ),
            438 => 
            array (
                'id' => 439,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 7,
                'shiftaction_id' => 7,
            ),
            439 => 
            array (
                'id' => 440,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            440 => 
            array (
                'id' => 441,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 11,
                'shiftaction_id' => 8,
            ),
            441 => 
            array (
                'id' => 442,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            442 => 
            array (
                'id' => 443,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            443 => 
            array (
                'id' => 444,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            444 => 
            array (
                'id' => 445,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            445 => 
            array (
                'id' => 446,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 3,
                'shiftaction_id' => 10,
            ),
            446 => 
            array (
                'id' => 447,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            447 => 
            array (
                'id' => 448,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            448 => 
            array (
                'id' => 449,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            449 => 
            array (
                'id' => 450,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            450 => 
            array (
                'id' => 451,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            451 => 
            array (
                'id' => 452,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 8,
                'shiftaction_id' => 13,
            ),
            452 => 
            array (
                'id' => 453,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            453 => 
            array (
                'id' => 454,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            454 => 
            array (
                'id' => 455,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            455 => 
            array (
                'id' => 456,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            456 => 
            array (
                'id' => 457,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            457 => 
            array (
                'id' => 458,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 16,
            ),
            458 => 
            array (
                'id' => 459,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            459 => 
            array (
                'id' => 460,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            460 => 
            array (
                'id' => 461,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 9,
                'shiftaction_id' => 18,
            ),
            461 => 
            array (
                'id' => 462,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 12,
                'shiftaction_id' => 18,
            ),
            462 => 
            array (
                'id' => 463,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            463 => 
            array (
                'id' => 464,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 18,
                'user_id' => 2,
                'shiftaction_id' => 19,
            ),
            464 => 
            array (
                'id' => 465,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            465 => 
            array (
                'id' => 466,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            466 => 
            array (
                'id' => 467,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 1,
                'shiftaction_id' => 2,
            ),
            467 => 
            array (
                'id' => 468,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            468 => 
            array (
                'id' => 469,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 6,
                'shiftaction_id' => 3,
            ),
            469 => 
            array (
                'id' => 470,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 104,
                'shiftaction_id' => 3,
            ),
            470 => 
            array (
                'id' => 471,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 4,
                'shiftaction_id' => 4,
            ),
            471 => 
            array (
                'id' => 472,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            472 => 
            array (
                'id' => 473,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            473 => 
            array (
                'id' => 474,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 8,
                'shiftaction_id' => 5,
            ),
            474 => 
            array (
                'id' => 475,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            475 => 
            array (
                'id' => 476,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 6,
            ),
            476 => 
            array (
                'id' => 477,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            477 => 
            array (
                'id' => 478,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            478 => 
            array (
                'id' => 479,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            479 => 
            array (
                'id' => 480,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 8,
            ),
            480 => 
            array (
                'id' => 481,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 11,
                'shiftaction_id' => 9,
            ),
            481 => 
            array (
                'id' => 482,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 3,
                'shiftaction_id' => 9,
            ),
            482 => 
            array (
                'id' => 483,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 1,
                'shiftaction_id' => 10,
            ),
            483 => 
            array (
                'id' => 484,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            484 => 
            array (
                'id' => 485,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            485 => 
            array (
                'id' => 486,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            486 => 
            array (
                'id' => 487,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            487 => 
            array (
                'id' => 488,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 12,
                'shiftaction_id' => 12,
            ),
            488 => 
            array (
                'id' => 489,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            489 => 
            array (
                'id' => 490,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            490 => 
            array (
                'id' => 491,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            491 => 
            array (
                'id' => 492,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            492 => 
            array (
                'id' => 493,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            493 => 
            array (
                'id' => 494,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 7,
                'shiftaction_id' => 15,
            ),
            494 => 
            array (
                'id' => 495,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            495 => 
            array (
                'id' => 496,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 11,
                'shiftaction_id' => 16,
            ),
            496 => 
            array (
                'id' => 497,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            497 => 
            array (
                'id' => 498,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            498 => 
            array (
                'id' => 499,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 5,
                'shiftaction_id' => 18,
            ),
            499 => 
            array (
                'id' => 500,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
        ));
        \DB::table('shiftchecks')->insert(array (
            0 => 
            array (
                'id' => 501,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            1 => 
            array (
                'id' => 502,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 19,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            2 => 
            array (
                'id' => 503,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 3,
                'shiftaction_id' => 1,
            ),
            3 => 
            array (
                'id' => 504,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            4 => 
            array (
                'id' => 505,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            5 => 
            array (
                'id' => 506,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            6 => 
            array (
                'id' => 507,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 5,
                'shiftaction_id' => 3,
            ),
            7 => 
            array (
                'id' => 508,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 1,
                'shiftaction_id' => 3,
            ),
            8 => 
            array (
                'id' => 509,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            9 => 
            array (
                'id' => 510,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            10 => 
            array (
                'id' => 511,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            11 => 
            array (
                'id' => 512,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            12 => 
            array (
                'id' => 513,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            13 => 
            array (
                'id' => 514,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 6,
                'shiftaction_id' => 6,
            ),
            14 => 
            array (
                'id' => 515,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 11,
                'shiftaction_id' => 7,
            ),
            15 => 
            array (
                'id' => 516,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            16 => 
            array (
                'id' => 517,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 2,
                'shiftaction_id' => 8,
            ),
            17 => 
            array (
                'id' => 518,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 10,
                'shiftaction_id' => 8,
            ),
            18 => 
            array (
                'id' => 519,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            19 => 
            array (
                'id' => 520,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            20 => 
            array (
                'id' => 521,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 5,
                'shiftaction_id' => 10,
            ),
            21 => 
            array (
                'id' => 522,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            22 => 
            array (
                'id' => 523,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            23 => 
            array (
                'id' => 524,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 11,
            ),
            24 => 
            array (
                'id' => 525,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            25 => 
            array (
                'id' => 526,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            26 => 
            array (
                'id' => 527,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            27 => 
            array (
                'id' => 528,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            28 => 
            array (
                'id' => 529,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 3,
                'shiftaction_id' => 14,
            ),
            29 => 
            array (
                'id' => 530,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 9,
                'shiftaction_id' => 14,
            ),
            30 => 
            array (
                'id' => 531,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            31 => 
            array (
                'id' => 532,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            32 => 
            array (
                'id' => 533,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            33 => 
            array (
                'id' => 534,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            34 => 
            array (
                'id' => 535,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            35 => 
            array (
                'id' => 536,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            36 => 
            array (
                'id' => 537,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            37 => 
            array (
                'id' => 538,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 2,
                'shiftaction_id' => 19,
            ),
            38 => 
            array (
                'id' => 539,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 20,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            39 => 
            array (
                'id' => 540,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            40 => 
            array (
                'id' => 541,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            41 => 
            array (
                'id' => 542,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 2,
            ),
            42 => 
            array (
                'id' => 543,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            43 => 
            array (
                'id' => 544,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 6,
                'shiftaction_id' => 3,
            ),
            44 => 
            array (
                'id' => 545,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            45 => 
            array (
                'id' => 546,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            46 => 
            array (
                'id' => 547,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 9,
                'shiftaction_id' => 4,
            ),
            47 => 
            array (
                'id' => 548,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            48 => 
            array (
                'id' => 549,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            49 => 
            array (
                'id' => 550,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 12,
                'shiftaction_id' => 6,
            ),
            50 => 
            array (
                'id' => 551,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 6,
            ),
            51 => 
            array (
                'id' => 552,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            52 => 
            array (
                'id' => 553,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            53 => 
            array (
                'id' => 554,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 6,
                'shiftaction_id' => 8,
            ),
            54 => 
            array (
                'id' => 555,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 5,
                'shiftaction_id' => 8,
            ),
            55 => 
            array (
                'id' => 556,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            56 => 
            array (
                'id' => 557,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            57 => 
            array (
                'id' => 558,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            58 => 
            array (
                'id' => 559,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            59 => 
            array (
                'id' => 560,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 5,
                'shiftaction_id' => 11,
            ),
            60 => 
            array (
                'id' => 561,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            61 => 
            array (
                'id' => 562,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            62 => 
            array (
                'id' => 563,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            63 => 
            array (
                'id' => 564,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            64 => 
            array (
                'id' => 565,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 3,
                'shiftaction_id' => 13,
            ),
            65 => 
            array (
                'id' => 566,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 9,
                'shiftaction_id' => 14,
            ),
            66 => 
            array (
                'id' => 567,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            67 => 
            array (
                'id' => 568,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 15,
            ),
            68 => 
            array (
                'id' => 569,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 15,
            ),
            69 => 
            array (
                'id' => 570,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            70 => 
            array (
                'id' => 571,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            71 => 
            array (
                'id' => 572,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 17,
            ),
            72 => 
            array (
                'id' => 573,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            73 => 
            array (
                'id' => 574,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            74 => 
            array (
                'id' => 575,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            75 => 
            array (
                'id' => 576,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
            76 => 
            array (
                'id' => 577,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 21,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            77 => 
            array (
                'id' => 578,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            78 => 
            array (
                'id' => 579,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 10,
                'shiftaction_id' => 1,
            ),
            79 => 
            array (
                'id' => 580,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            80 => 
            array (
                'id' => 581,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 4,
                'shiftaction_id' => 2,
            ),
            81 => 
            array (
                'id' => 582,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 8,
                'shiftaction_id' => 3,
            ),
            82 => 
            array (
                'id' => 583,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 7,
                'shiftaction_id' => 4,
            ),
            83 => 
            array (
                'id' => 584,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            84 => 
            array (
                'id' => 585,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            85 => 
            array (
                'id' => 586,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            86 => 
            array (
                'id' => 587,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            87 => 
            array (
                'id' => 588,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            88 => 
            array (
                'id' => 589,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            89 => 
            array (
                'id' => 590,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            90 => 
            array (
                'id' => 591,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 11,
                'shiftaction_id' => 8,
            ),
            91 => 
            array (
                'id' => 592,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 9,
                'shiftaction_id' => 8,
            ),
            92 => 
            array (
                'id' => 593,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 3,
                'shiftaction_id' => 9,
            ),
            93 => 
            array (
                'id' => 594,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            94 => 
            array (
                'id' => 595,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            95 => 
            array (
                'id' => 596,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 12,
                'shiftaction_id' => 10,
            ),
            96 => 
            array (
                'id' => 597,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 104,
                'shiftaction_id' => 11,
            ),
            97 => 
            array (
                'id' => 598,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 4,
                'shiftaction_id' => 11,
            ),
            98 => 
            array (
                'id' => 599,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            99 => 
            array (
                'id' => 600,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            100 => 
            array (
                'id' => 601,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            101 => 
            array (
                'id' => 602,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            102 => 
            array (
                'id' => 603,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 10,
                'shiftaction_id' => 14,
            ),
            103 => 
            array (
                'id' => 604,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            104 => 
            array (
                'id' => 605,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 7,
                'shiftaction_id' => 15,
            ),
            105 => 
            array (
                'id' => 606,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            106 => 
            array (
                'id' => 607,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            107 => 
            array (
                'id' => 608,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 11,
                'shiftaction_id' => 16,
            ),
            108 => 
            array (
                'id' => 609,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            109 => 
            array (
                'id' => 610,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            110 => 
            array (
                'id' => 611,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            111 => 
            array (
                'id' => 612,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 2,
                'shiftaction_id' => 18,
            ),
            112 => 
            array (
                'id' => 613,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
            113 => 
            array (
                'id' => 614,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 22,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            114 => 
            array (
                'id' => 615,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            115 => 
            array (
                'id' => 616,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            116 => 
            array (
                'id' => 617,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 5,
                'shiftaction_id' => 2,
            ),
            117 => 
            array (
                'id' => 618,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            118 => 
            array (
                'id' => 619,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 12,
                'shiftaction_id' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            120 => 
            array (
                'id' => 621,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 1,
                'shiftaction_id' => 4,
            ),
            121 => 
            array (
                'id' => 622,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 9,
                'shiftaction_id' => 4,
            ),
            122 => 
            array (
                'id' => 623,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            123 => 
            array (
                'id' => 624,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            124 => 
            array (
                'id' => 625,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 12,
                'shiftaction_id' => 6,
            ),
            125 => 
            array (
                'id' => 626,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 11,
                'shiftaction_id' => 6,
            ),
            126 => 
            array (
                'id' => 627,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            127 => 
            array (
                'id' => 628,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            128 => 
            array (
                'id' => 629,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 6,
                'shiftaction_id' => 8,
            ),
            129 => 
            array (
                'id' => 630,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            130 => 
            array (
                'id' => 631,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            131 => 
            array (
                'id' => 632,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            132 => 
            array (
                'id' => 633,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            133 => 
            array (
                'id' => 634,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 12,
                'shiftaction_id' => 10,
            ),
            134 => 
            array (
                'id' => 635,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 8,
                'shiftaction_id' => 11,
            ),
            135 => 
            array (
                'id' => 636,
                'day' => 1,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 5,
                'shiftaction_id' => 11,
            ),
            136 => 
            array (
                'id' => 637,
                'day' => 0,
                'time' => '2021-06-09 16:47:45',
                'shiftsheet_id' => 31,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            137 => 
            array (
                'id' => 638,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            138 => 
            array (
                'id' => 639,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            139 => 
            array (
                'id' => 640,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            140 => 
            array (
                'id' => 641,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 11,
                'shiftaction_id' => 14,
            ),
            141 => 
            array (
                'id' => 642,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            142 => 
            array (
                'id' => 643,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            143 => 
            array (
                'id' => 644,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            144 => 
            array (
                'id' => 645,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            145 => 
            array (
                'id' => 646,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            146 => 
            array (
                'id' => 647,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            147 => 
            array (
                'id' => 648,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            148 => 
            array (
                'id' => 649,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            149 => 
            array (
                'id' => 650,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            150 => 
            array (
                'id' => 651,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
            151 => 
            array (
                'id' => 652,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 31,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            152 => 
            array (
                'id' => 653,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 10,
                'shiftaction_id' => 1,
            ),
            153 => 
            array (
                'id' => 654,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 10,
                'shiftaction_id' => 1,
            ),
            154 => 
            array (
                'id' => 655,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            155 => 
            array (
                'id' => 656,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            156 => 
            array (
                'id' => 657,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 6,
                'shiftaction_id' => 3,
            ),
            157 => 
            array (
                'id' => 658,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            158 => 
            array (
                'id' => 659,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            159 => 
            array (
                'id' => 660,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 12,
                'shiftaction_id' => 4,
            ),
            160 => 
            array (
                'id' => 661,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 11,
                'shiftaction_id' => 5,
            ),
            161 => 
            array (
                'id' => 662,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 104,
                'shiftaction_id' => 5,
            ),
            162 => 
            array (
                'id' => 663,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            163 => 
            array (
                'id' => 664,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            164 => 
            array (
                'id' => 665,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 9,
                'shiftaction_id' => 7,
            ),
            165 => 
            array (
                'id' => 666,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            166 => 
            array (
                'id' => 667,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            167 => 
            array (
                'id' => 668,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 9,
                'shiftaction_id' => 8,
            ),
            168 => 
            array (
                'id' => 669,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 5,
                'shiftaction_id' => 9,
            ),
            169 => 
            array (
                'id' => 670,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 3,
                'shiftaction_id' => 9,
            ),
            170 => 
            array (
                'id' => 671,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            171 => 
            array (
                'id' => 672,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 2,
                'shiftaction_id' => 10,
            ),
            172 => 
            array (
                'id' => 673,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            173 => 
            array (
                'id' => 674,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 5,
                'shiftaction_id' => 11,
            ),
            174 => 
            array (
                'id' => 675,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 6,
                'shiftaction_id' => 12,
            ),
            175 => 
            array (
                'id' => 676,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            176 => 
            array (
                'id' => 677,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            177 => 
            array (
                'id' => 678,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            178 => 
            array (
                'id' => 679,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            179 => 
            array (
                'id' => 680,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 6,
                'shiftaction_id' => 14,
            ),
            180 => 
            array (
                'id' => 681,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            181 => 
            array (
                'id' => 682,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 15,
            ),
            182 => 
            array (
                'id' => 683,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            183 => 
            array (
                'id' => 684,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            184 => 
            array (
                'id' => 685,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            185 => 
            array (
                'id' => 686,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            186 => 
            array (
                'id' => 687,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            187 => 
            array (
                'id' => 688,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            188 => 
            array (
                'id' => 689,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 9,
                'shiftaction_id' => 19,
            ),
            189 => 
            array (
                'id' => 690,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 32,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            190 => 
            array (
                'id' => 691,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 9,
                'shiftaction_id' => 1,
            ),
            191 => 
            array (
                'id' => 692,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            192 => 
            array (
                'id' => 693,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            193 => 
            array (
                'id' => 694,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            194 => 
            array (
                'id' => 695,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            195 => 
            array (
                'id' => 696,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            196 => 
            array (
                'id' => 697,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 11,
                'shiftaction_id' => 4,
            ),
            197 => 
            array (
                'id' => 698,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            198 => 
            array (
                'id' => 699,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            199 => 
            array (
                'id' => 700,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            200 => 
            array (
                'id' => 701,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            201 => 
            array (
                'id' => 702,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            202 => 
            array (
                'id' => 703,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 6,
                'shiftaction_id' => 7,
            ),
            203 => 
            array (
                'id' => 704,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 7,
            ),
            204 => 
            array (
                'id' => 705,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            205 => 
            array (
                'id' => 706,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            206 => 
            array (
                'id' => 707,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            207 => 
            array (
                'id' => 708,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            208 => 
            array (
                'id' => 709,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            209 => 
            array (
                'id' => 710,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            210 => 
            array (
                'id' => 711,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 8,
                'shiftaction_id' => 11,
            ),
            211 => 
            array (
                'id' => 712,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            212 => 
            array (
                'id' => 713,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            213 => 
            array (
                'id' => 714,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            214 => 
            array (
                'id' => 715,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            215 => 
            array (
                'id' => 716,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            216 => 
            array (
                'id' => 717,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 7,
                'shiftaction_id' => 14,
            ),
            217 => 
            array (
                'id' => 718,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            218 => 
            array (
                'id' => 719,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            219 => 
            array (
                'id' => 720,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 1,
                'shiftaction_id' => 15,
            ),
            220 => 
            array (
                'id' => 721,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 1,
                'shiftaction_id' => 16,
            ),
            221 => 
            array (
                'id' => 722,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            222 => 
            array (
                'id' => 723,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            223 => 
            array (
                'id' => 724,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            224 => 
            array (
                'id' => 725,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 9,
                'shiftaction_id' => 18,
            ),
            225 => 
            array (
                'id' => 726,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            226 => 
            array (
                'id' => 727,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            227 => 
            array (
                'id' => 728,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 33,
                'user_id' => 10,
                'shiftaction_id' => 19,
            ),
            228 => 
            array (
                'id' => 729,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            229 => 
            array (
                'id' => 730,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 10,
                'shiftaction_id' => 1,
            ),
            230 => 
            array (
                'id' => 731,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 2,
            ),
            231 => 
            array (
                'id' => 732,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 4,
                'shiftaction_id' => 2,
            ),
            232 => 
            array (
                'id' => 733,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 10,
                'shiftaction_id' => 3,
            ),
            233 => 
            array (
                'id' => 734,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 3,
                'shiftaction_id' => 3,
            ),
            234 => 
            array (
                'id' => 735,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 4,
            ),
            235 => 
            array (
                'id' => 736,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            236 => 
            array (
                'id' => 737,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            237 => 
            array (
                'id' => 738,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            238 => 
            array (
                'id' => 739,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            239 => 
            array (
                'id' => 740,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            240 => 
            array (
                'id' => 741,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 7,
                'shiftaction_id' => 7,
            ),
            241 => 
            array (
                'id' => 742,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            242 => 
            array (
                'id' => 743,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            243 => 
            array (
                'id' => 744,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            244 => 
            array (
                'id' => 745,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            245 => 
            array (
                'id' => 746,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            246 => 
            array (
                'id' => 747,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            247 => 
            array (
                'id' => 748,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            248 => 
            array (
                'id' => 749,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 6,
                'shiftaction_id' => 11,
            ),
            249 => 
            array (
                'id' => 750,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 9,
                'shiftaction_id' => 11,
            ),
            250 => 
            array (
                'id' => 751,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            251 => 
            array (
                'id' => 752,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            252 => 
            array (
                'id' => 753,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            253 => 
            array (
                'id' => 754,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            254 => 
            array (
                'id' => 755,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            255 => 
            array (
                'id' => 756,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            256 => 
            array (
                'id' => 757,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            257 => 
            array (
                'id' => 758,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 15,
            ),
            258 => 
            array (
                'id' => 759,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            259 => 
            array (
                'id' => 760,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            260 => 
            array (
                'id' => 761,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            261 => 
            array (
                'id' => 762,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            262 => 
            array (
                'id' => 763,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 7,
                'shiftaction_id' => 18,
            ),
            263 => 
            array (
                'id' => 764,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            264 => 
            array (
                'id' => 765,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            265 => 
            array (
                'id' => 766,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 34,
                'user_id' => 5,
                'shiftaction_id' => 19,
            ),
            266 => 
            array (
                'id' => 767,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 104,
                'shiftaction_id' => 1,
            ),
            267 => 
            array (
                'id' => 768,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            268 => 
            array (
                'id' => 769,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            269 => 
            array (
                'id' => 770,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            270 => 
            array (
                'id' => 771,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            271 => 
            array (
                'id' => 772,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 8,
                'shiftaction_id' => 3,
            ),
            272 => 
            array (
                'id' => 773,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            273 => 
            array (
                'id' => 774,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 4,
            ),
            274 => 
            array (
                'id' => 775,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            275 => 
            array (
                'id' => 776,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            276 => 
            array (
                'id' => 777,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            277 => 
            array (
                'id' => 778,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            278 => 
            array (
                'id' => 779,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 9,
                'shiftaction_id' => 7,
            ),
            279 => 
            array (
                'id' => 780,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            280 => 
            array (
                'id' => 781,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            281 => 
            array (
                'id' => 782,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 11,
                'shiftaction_id' => 8,
            ),
            282 => 
            array (
                'id' => 783,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            283 => 
            array (
                'id' => 784,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 7,
                'shiftaction_id' => 9,
            ),
            284 => 
            array (
                'id' => 785,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            285 => 
            array (
                'id' => 786,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 3,
                'shiftaction_id' => 10,
            ),
            286 => 
            array (
                'id' => 787,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            287 => 
            array (
                'id' => 788,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            288 => 
            array (
                'id' => 789,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 12,
                'shiftaction_id' => 12,
            ),
            289 => 
            array (
                'id' => 790,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            290 => 
            array (
                'id' => 791,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 4,
                'shiftaction_id' => 13,
            ),
            291 => 
            array (
                'id' => 792,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            292 => 
            array (
                'id' => 793,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            293 => 
            array (
                'id' => 794,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 15,
            ),
            294 => 
            array (
                'id' => 795,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            295 => 
            array (
                'id' => 796,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            296 => 
            array (
                'id' => 797,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            297 => 
            array (
                'id' => 798,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            298 => 
            array (
                'id' => 799,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            299 => 
            array (
                'id' => 800,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            300 => 
            array (
                'id' => 801,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            301 => 
            array (
                'id' => 802,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 4,
                'shiftaction_id' => 19,
            ),
            302 => 
            array (
                'id' => 803,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 35,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            303 => 
            array (
                'id' => 804,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 12,
                'shiftaction_id' => 1,
            ),
            304 => 
            array (
                'id' => 805,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            305 => 
            array (
                'id' => 806,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 11,
                'shiftaction_id' => 2,
            ),
            306 => 
            array (
                'id' => 807,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            307 => 
            array (
                'id' => 808,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 7,
                'shiftaction_id' => 3,
            ),
            308 => 
            array (
                'id' => 809,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 3,
            ),
            309 => 
            array (
                'id' => 810,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 4,
            ),
            310 => 
            array (
                'id' => 811,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 4,
            ),
            311 => 
            array (
                'id' => 812,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            312 => 
            array (
                'id' => 813,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            313 => 
            array (
                'id' => 814,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            314 => 
            array (
                'id' => 815,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            315 => 
            array (
                'id' => 816,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            316 => 
            array (
                'id' => 817,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            317 => 
            array (
                'id' => 818,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            318 => 
            array (
                'id' => 819,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 8,
                'shiftaction_id' => 8,
            ),
            319 => 
            array (
                'id' => 820,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 6,
                'shiftaction_id' => 9,
            ),
            320 => 
            array (
                'id' => 821,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 9,
            ),
            321 => 
            array (
                'id' => 822,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            322 => 
            array (
                'id' => 823,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 10,
            ),
            323 => 
            array (
                'id' => 824,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            324 => 
            array (
                'id' => 825,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            325 => 
            array (
                'id' => 826,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            326 => 
            array (
                'id' => 827,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            327 => 
            array (
                'id' => 828,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 13,
            ),
            328 => 
            array (
                'id' => 829,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            329 => 
            array (
                'id' => 830,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            330 => 
            array (
                'id' => 831,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 6,
                'shiftaction_id' => 14,
            ),
            331 => 
            array (
                'id' => 832,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 104,
                'shiftaction_id' => 15,
            ),
            332 => 
            array (
                'id' => 833,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            333 => 
            array (
                'id' => 834,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            334 => 
            array (
                'id' => 835,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            335 => 
            array (
                'id' => 836,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            336 => 
            array (
                'id' => 837,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            337 => 
            array (
                'id' => 838,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            338 => 
            array (
                'id' => 839,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            339 => 
            array (
                'id' => 840,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 4,
                'shiftaction_id' => 19,
            ),
            340 => 
            array (
                'id' => 841,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 36,
                'user_id' => 10,
                'shiftaction_id' => 19,
            ),
            341 => 
            array (
                'id' => 842,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 4,
                'shiftaction_id' => 1,
            ),
            342 => 
            array (
                'id' => 843,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 4,
                'shiftaction_id' => 1,
            ),
            343 => 
            array (
                'id' => 844,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            344 => 
            array (
                'id' => 845,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            345 => 
            array (
                'id' => 846,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 7,
                'shiftaction_id' => 3,
            ),
            346 => 
            array (
                'id' => 847,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            347 => 
            array (
                'id' => 848,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            348 => 
            array (
                'id' => 849,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 7,
                'shiftaction_id' => 4,
            ),
            349 => 
            array (
                'id' => 850,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            350 => 
            array (
                'id' => 851,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 5,
                'shiftaction_id' => 5,
            ),
            351 => 
            array (
                'id' => 852,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            352 => 
            array (
                'id' => 853,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            353 => 
            array (
                'id' => 854,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            354 => 
            array (
                'id' => 855,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            355 => 
            array (
                'id' => 856,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            356 => 
            array (
                'id' => 857,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 1,
                'shiftaction_id' => 8,
            ),
            357 => 
            array (
                'id' => 858,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            358 => 
            array (
                'id' => 859,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            359 => 
            array (
                'id' => 860,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            360 => 
            array (
                'id' => 861,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            361 => 
            array (
                'id' => 862,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            362 => 
            array (
                'id' => 863,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 12,
                'shiftaction_id' => 12,
            ),
            363 => 
            array (
                'id' => 864,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 10,
                'shiftaction_id' => 12,
            ),
            364 => 
            array (
                'id' => 865,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            365 => 
            array (
                'id' => 866,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            366 => 
            array (
                'id' => 867,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            367 => 
            array (
                'id' => 868,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            368 => 
            array (
                'id' => 869,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 4,
                'shiftaction_id' => 15,
            ),
            369 => 
            array (
                'id' => 870,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 5,
                'shiftaction_id' => 15,
            ),
            370 => 
            array (
                'id' => 871,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            371 => 
            array (
                'id' => 872,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            372 => 
            array (
                'id' => 873,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 104,
                'shiftaction_id' => 17,
            ),
            373 => 
            array (
                'id' => 874,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 8,
                'shiftaction_id' => 17,
            ),
            374 => 
            array (
                'id' => 875,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 12,
                'shiftaction_id' => 18,
            ),
            375 => 
            array (
                'id' => 876,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 9,
                'shiftaction_id' => 18,
            ),
            376 => 
            array (
                'id' => 877,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 1,
                'shiftaction_id' => 19,
            ),
            377 => 
            array (
                'id' => 878,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 37,
                'user_id' => 5,
                'shiftaction_id' => 19,
            ),
            378 => 
            array (
                'id' => 879,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            379 => 
            array (
                'id' => 880,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 104,
                'shiftaction_id' => 1,
            ),
            380 => 
            array (
                'id' => 881,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            381 => 
            array (
                'id' => 882,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 4,
                'shiftaction_id' => 2,
            ),
            382 => 
            array (
                'id' => 883,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 5,
                'shiftaction_id' => 3,
            ),
            383 => 
            array (
                'id' => 884,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            384 => 
            array (
                'id' => 885,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 9,
                'shiftaction_id' => 4,
            ),
            385 => 
            array (
                'id' => 886,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            386 => 
            array (
                'id' => 887,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 8,
                'shiftaction_id' => 5,
            ),
            387 => 
            array (
                'id' => 888,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            388 => 
            array (
                'id' => 889,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 12,
                'shiftaction_id' => 6,
            ),
            389 => 
            array (
                'id' => 890,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 12,
                'shiftaction_id' => 6,
            ),
            390 => 
            array (
                'id' => 891,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            391 => 
            array (
                'id' => 892,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            392 => 
            array (
                'id' => 893,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            393 => 
            array (
                'id' => 894,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 2,
                'shiftaction_id' => 8,
            ),
            394 => 
            array (
                'id' => 895,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            395 => 
            array (
                'id' => 896,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            396 => 
            array (
                'id' => 897,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            397 => 
            array (
                'id' => 898,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            398 => 
            array (
                'id' => 899,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            399 => 
            array (
                'id' => 900,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 1,
                'shiftaction_id' => 11,
            ),
            400 => 
            array (
                'id' => 901,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 11,
                'shiftaction_id' => 12,
            ),
            401 => 
            array (
                'id' => 902,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 8,
                'shiftaction_id' => 12,
            ),
            402 => 
            array (
                'id' => 903,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            403 => 
            array (
                'id' => 904,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 8,
                'shiftaction_id' => 13,
            ),
            404 => 
            array (
                'id' => 905,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            405 => 
            array (
                'id' => 906,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 11,
                'shiftaction_id' => 14,
            ),
            406 => 
            array (
                'id' => 907,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 5,
                'shiftaction_id' => 15,
            ),
            407 => 
            array (
                'id' => 908,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 6,
                'shiftaction_id' => 15,
            ),
            408 => 
            array (
                'id' => 909,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            409 => 
            array (
                'id' => 910,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            410 => 
            array (
                'id' => 911,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            411 => 
            array (
                'id' => 912,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 7,
                'shiftaction_id' => 17,
            ),
            412 => 
            array (
                'id' => 913,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            413 => 
            array (
                'id' => 914,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 3,
                'shiftaction_id' => 18,
            ),
            414 => 
            array (
                'id' => 915,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            415 => 
            array (
                'id' => 916,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 46,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            416 => 
            array (
                'id' => 917,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 1,
            ),
            417 => 
            array (
                'id' => 918,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            418 => 
            array (
                'id' => 919,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            419 => 
            array (
                'id' => 920,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 12,
                'shiftaction_id' => 2,
            ),
            420 => 
            array (
                'id' => 921,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            421 => 
            array (
                'id' => 922,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 12,
                'shiftaction_id' => 3,
            ),
            422 => 
            array (
                'id' => 923,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 4,
            ),
            423 => 
            array (
                'id' => 924,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 12,
                'shiftaction_id' => 4,
            ),
            424 => 
            array (
                'id' => 925,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            425 => 
            array (
                'id' => 926,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            426 => 
            array (
                'id' => 927,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            427 => 
            array (
                'id' => 928,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 9,
                'shiftaction_id' => 6,
            ),
            428 => 
            array (
                'id' => 929,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 7,
                'shiftaction_id' => 7,
            ),
            429 => 
            array (
                'id' => 930,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            430 => 
            array (
                'id' => 931,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            431 => 
            array (
                'id' => 932,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 10,
                'shiftaction_id' => 8,
            ),
            432 => 
            array (
                'id' => 933,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            433 => 
            array (
                'id' => 934,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            434 => 
            array (
                'id' => 935,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            435 => 
            array (
                'id' => 936,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 10,
            ),
            436 => 
            array (
                'id' => 937,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 6,
                'shiftaction_id' => 11,
            ),
            437 => 
            array (
                'id' => 938,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 9,
                'shiftaction_id' => 11,
            ),
            438 => 
            array (
                'id' => 939,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            439 => 
            array (
                'id' => 940,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            440 => 
            array (
                'id' => 941,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            441 => 
            array (
                'id' => 942,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            442 => 
            array (
                'id' => 943,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            443 => 
            array (
                'id' => 944,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            444 => 
            array (
                'id' => 945,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 104,
                'shiftaction_id' => 15,
            ),
            445 => 
            array (
                'id' => 946,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            446 => 
            array (
                'id' => 947,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 16,
            ),
            447 => 
            array (
                'id' => 948,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            448 => 
            array (
                'id' => 949,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 8,
                'shiftaction_id' => 17,
            ),
            449 => 
            array (
                'id' => 950,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            450 => 
            array (
                'id' => 951,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 4,
                'shiftaction_id' => 18,
            ),
            451 => 
            array (
                'id' => 952,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            452 => 
            array (
                'id' => 953,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 47,
                'user_id' => 8,
                'shiftaction_id' => 19,
            ),
            453 => 
            array (
                'id' => 954,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 12,
                'shiftaction_id' => 1,
            ),
            454 => 
            array (
                'id' => 955,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            455 => 
            array (
                'id' => 956,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            456 => 
            array (
                'id' => 957,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            457 => 
            array (
                'id' => 958,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 3,
                'shiftaction_id' => 3,
            ),
            458 => 
            array (
                'id' => 959,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            459 => 
            array (
                'id' => 960,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            460 => 
            array (
                'id' => 961,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            461 => 
            array (
                'id' => 962,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            462 => 
            array (
                'id' => 963,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 3,
                'shiftaction_id' => 5,
            ),
            463 => 
            array (
                'id' => 964,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            464 => 
            array (
                'id' => 965,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            465 => 
            array (
                'id' => 966,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            466 => 
            array (
                'id' => 967,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 11,
                'shiftaction_id' => 7,
            ),
            467 => 
            array (
                'id' => 968,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 11,
                'shiftaction_id' => 8,
            ),
            468 => 
            array (
                'id' => 969,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 6,
                'shiftaction_id' => 8,
            ),
            469 => 
            array (
                'id' => 970,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            470 => 
            array (
                'id' => 971,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 9,
                'shiftaction_id' => 9,
            ),
            471 => 
            array (
                'id' => 972,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 10,
            ),
            472 => 
            array (
                'id' => 973,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 10,
            ),
            473 => 
            array (
                'id' => 974,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 9,
                'shiftaction_id' => 11,
            ),
            474 => 
            array (
                'id' => 975,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            475 => 
            array (
                'id' => 976,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            476 => 
            array (
                'id' => 977,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 4,
                'shiftaction_id' => 12,
            ),
            477 => 
            array (
                'id' => 978,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            478 => 
            array (
                'id' => 979,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            479 => 
            array (
                'id' => 980,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            480 => 
            array (
                'id' => 981,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 14,
            ),
            481 => 
            array (
                'id' => 982,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            482 => 
            array (
                'id' => 983,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 5,
                'shiftaction_id' => 15,
            ),
            483 => 
            array (
                'id' => 984,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            484 => 
            array (
                'id' => 985,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 1,
                'shiftaction_id' => 16,
            ),
            485 => 
            array (
                'id' => 986,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            486 => 
            array (
                'id' => 987,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 5,
                'shiftaction_id' => 18,
            ),
            487 => 
            array (
                'id' => 988,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            488 => 
            array (
                'id' => 989,
                'day' => 1,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 48,
                'user_id' => 10,
                'shiftaction_id' => 19,
            ),
            489 => 
            array (
                'id' => 990,
                'day' => 0,
                'time' => '2021-06-09 16:47:46',
                'shiftsheet_id' => 49,
                'user_id' => 7,
                'shiftaction_id' => 1,
            ),
            490 => 
            array (
                'id' => 991,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            491 => 
            array (
                'id' => 992,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 5,
                'shiftaction_id' => 2,
            ),
            492 => 
            array (
                'id' => 993,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            493 => 
            array (
                'id' => 994,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            494 => 
            array (
                'id' => 995,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            495 => 
            array (
                'id' => 996,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 4,
            ),
            496 => 
            array (
                'id' => 997,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 9,
                'shiftaction_id' => 4,
            ),
            497 => 
            array (
                'id' => 998,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            498 => 
            array (
                'id' => 999,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 12,
                'shiftaction_id' => 5,
            ),
            499 => 
            array (
                'id' => 1000,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
        ));
        \DB::table('shiftchecks')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            1 => 
            array (
                'id' => 1002,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 8,
                'shiftaction_id' => 7,
            ),
            2 => 
            array (
                'id' => 1003,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 8,
                'shiftaction_id' => 8,
            ),
            3 => 
            array (
                'id' => 1004,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 8,
                'shiftaction_id' => 8,
            ),
            4 => 
            array (
                'id' => 1005,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            5 => 
            array (
                'id' => 1006,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 104,
                'shiftaction_id' => 9,
            ),
            6 => 
            array (
                'id' => 1007,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            7 => 
            array (
                'id' => 1008,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 10,
            ),
            8 => 
            array (
                'id' => 1009,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            9 => 
            array (
                'id' => 1010,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            10 => 
            array (
                'id' => 1011,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 6,
                'shiftaction_id' => 12,
            ),
            11 => 
            array (
                'id' => 1012,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 12,
            ),
            12 => 
            array (
                'id' => 1013,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            13 => 
            array (
                'id' => 1014,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            14 => 
            array (
                'id' => 1015,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            15 => 
            array (
                'id' => 1016,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            16 => 
            array (
                'id' => 1017,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            17 => 
            array (
                'id' => 1018,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            18 => 
            array (
                'id' => 1019,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            19 => 
            array (
                'id' => 1020,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            20 => 
            array (
                'id' => 1021,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            21 => 
            array (
                'id' => 1022,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 9,
                'shiftaction_id' => 17,
            ),
            22 => 
            array (
                'id' => 1023,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 4,
                'shiftaction_id' => 18,
            ),
            23 => 
            array (
                'id' => 1024,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 2,
                'shiftaction_id' => 18,
            ),
            24 => 
            array (
                'id' => 1025,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 1,
                'shiftaction_id' => 19,
            ),
            25 => 
            array (
                'id' => 1026,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 49,
                'user_id' => 5,
                'shiftaction_id' => 19,
            ),
            26 => 
            array (
                'id' => 1027,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 3,
                'shiftaction_id' => 1,
            ),
            27 => 
            array (
                'id' => 1028,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 1,
            ),
            28 => 
            array (
                'id' => 1029,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 12,
                'shiftaction_id' => 2,
            ),
            29 => 
            array (
                'id' => 1030,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 2,
            ),
            30 => 
            array (
                'id' => 1031,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            31 => 
            array (
                'id' => 1032,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 3,
            ),
            32 => 
            array (
                'id' => 1033,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            33 => 
            array (
                'id' => 1034,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 4,
            ),
            34 => 
            array (
                'id' => 1035,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 11,
                'shiftaction_id' => 5,
            ),
            35 => 
            array (
                'id' => 1036,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            36 => 
            array (
                'id' => 1037,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            37 => 
            array (
                'id' => 1038,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 6,
            ),
            38 => 
            array (
                'id' => 1039,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 3,
                'shiftaction_id' => 7,
            ),
            39 => 
            array (
                'id' => 1040,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            40 => 
            array (
                'id' => 1041,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            41 => 
            array (
                'id' => 1042,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 7,
                'shiftaction_id' => 8,
            ),
            42 => 
            array (
                'id' => 1043,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            43 => 
            array (
                'id' => 1044,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            44 => 
            array (
                'id' => 1045,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 10,
            ),
            45 => 
            array (
                'id' => 1046,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 3,
                'shiftaction_id' => 10,
            ),
            46 => 
            array (
                'id' => 1047,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 11,
            ),
            47 => 
            array (
                'id' => 1048,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 12,
                'shiftaction_id' => 12,
            ),
            48 => 
            array (
                'id' => 1049,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 4,
                'shiftaction_id' => 12,
            ),
            49 => 
            array (
                'id' => 1050,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 3,
                'shiftaction_id' => 13,
            ),
            50 => 
            array (
                'id' => 1051,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 9,
                'shiftaction_id' => 13,
            ),
            51 => 
            array (
                'id' => 1052,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 4,
                'shiftaction_id' => 14,
            ),
            52 => 
            array (
                'id' => 1053,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            53 => 
            array (
                'id' => 1054,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            54 => 
            array (
                'id' => 1055,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 15,
            ),
            55 => 
            array (
                'id' => 1056,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 8,
                'shiftaction_id' => 16,
            ),
            56 => 
            array (
                'id' => 1057,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 16,
            ),
            57 => 
            array (
                'id' => 1058,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            58 => 
            array (
                'id' => 1059,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 4,
                'shiftaction_id' => 17,
            ),
            59 => 
            array (
                'id' => 1060,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            60 => 
            array (
                'id' => 1061,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            61 => 
            array (
                'id' => 1062,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            62 => 
            array (
                'id' => 1063,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 50,
                'user_id' => 10,
                'shiftaction_id' => 19,
            ),
            63 => 
            array (
                'id' => 1064,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            64 => 
            array (
                'id' => 1065,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            65 => 
            array (
                'id' => 1066,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            66 => 
            array (
                'id' => 1067,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 1,
                'shiftaction_id' => 2,
            ),
            67 => 
            array (
                'id' => 1068,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 8,
                'shiftaction_id' => 3,
            ),
            68 => 
            array (
                'id' => 1069,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            69 => 
            array (
                'id' => 1070,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            70 => 
            array (
                'id' => 1071,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            71 => 
            array (
                'id' => 1072,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            72 => 
            array (
                'id' => 1073,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            73 => 
            array (
                'id' => 1074,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 6,
                'shiftaction_id' => 6,
            ),
            74 => 
            array (
                'id' => 1075,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            75 => 
            array (
                'id' => 1076,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            76 => 
            array (
                'id' => 1077,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            77 => 
            array (
                'id' => 1078,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            78 => 
            array (
                'id' => 1079,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            79 => 
            array (
                'id' => 1080,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            80 => 
            array (
                'id' => 1081,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            81 => 
            array (
                'id' => 1082,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            82 => 
            array (
                'id' => 1083,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            83 => 
            array (
                'id' => 1084,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 10,
                'shiftaction_id' => 11,
            ),
            84 => 
            array (
                'id' => 1085,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            85 => 
            array (
                'id' => 1086,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 7,
                'shiftaction_id' => 12,
            ),
            86 => 
            array (
                'id' => 1087,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            87 => 
            array (
                'id' => 1088,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            88 => 
            array (
                'id' => 1089,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            89 => 
            array (
                'id' => 1090,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 3,
                'shiftaction_id' => 14,
            ),
            90 => 
            array (
                'id' => 1091,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            91 => 
            array (
                'id' => 1092,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 104,
                'shiftaction_id' => 15,
            ),
            92 => 
            array (
                'id' => 1093,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 9,
                'shiftaction_id' => 15,
            ),
            93 => 
            array (
                'id' => 1094,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            94 => 
            array (
                'id' => 1095,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 7,
                'shiftaction_id' => 16,
            ),
            95 => 
            array (
                'id' => 1096,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 11,
                'shiftaction_id' => 17,
            ),
            96 => 
            array (
                'id' => 1097,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            97 => 
            array (
                'id' => 1098,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            98 => 
            array (
                'id' => 1099,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            99 => 
            array (
                'id' => 1100,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            100 => 
            array (
                'id' => 1101,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 51,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            101 => 
            array (
                'id' => 1102,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            102 => 
            array (
                'id' => 1103,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            103 => 
            array (
                'id' => 1104,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 104,
                'shiftaction_id' => 2,
            ),
            104 => 
            array (
                'id' => 1105,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            105 => 
            array (
                'id' => 1106,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            106 => 
            array (
                'id' => 1107,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 3,
            ),
            107 => 
            array (
                'id' => 1108,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            108 => 
            array (
                'id' => 1109,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 1,
                'shiftaction_id' => 4,
            ),
            109 => 
            array (
                'id' => 1110,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            110 => 
            array (
                'id' => 1111,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 9,
                'shiftaction_id' => 5,
            ),
            111 => 
            array (
                'id' => 1112,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            112 => 
            array (
                'id' => 1113,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            113 => 
            array (
                'id' => 1114,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            114 => 
            array (
                'id' => 1115,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            115 => 
            array (
                'id' => 1116,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 6,
                'shiftaction_id' => 8,
            ),
            116 => 
            array (
                'id' => 1117,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 2,
                'shiftaction_id' => 8,
            ),
            117 => 
            array (
                'id' => 1118,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            118 => 
            array (
                'id' => 1119,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 9,
            ),
            119 => 
            array (
                'id' => 1120,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            120 => 
            array (
                'id' => 1121,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 7,
                'shiftaction_id' => 10,
            ),
            121 => 
            array (
                'id' => 1122,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 11,
            ),
            122 => 
            array (
                'id' => 1123,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 8,
                'shiftaction_id' => 11,
            ),
            123 => 
            array (
                'id' => 1124,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            124 => 
            array (
                'id' => 1125,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            125 => 
            array (
                'id' => 1126,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 13,
            ),
            126 => 
            array (
                'id' => 1127,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            127 => 
            array (
                'id' => 1128,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            128 => 
            array (
                'id' => 1129,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 9,
                'shiftaction_id' => 14,
            ),
            129 => 
            array (
                'id' => 1130,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 3,
                'shiftaction_id' => 15,
            ),
            130 => 
            array (
                'id' => 1131,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 4,
                'shiftaction_id' => 15,
            ),
            131 => 
            array (
                'id' => 1132,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            132 => 
            array (
                'id' => 1133,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            133 => 
            array (
                'id' => 1134,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 3,
                'shiftaction_id' => 17,
            ),
            134 => 
            array (
                'id' => 1135,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            135 => 
            array (
                'id' => 1136,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            136 => 
            array (
                'id' => 1137,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            137 => 
            array (
                'id' => 1138,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            138 => 
            array (
                'id' => 1139,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 52,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            139 => 
            array (
                'id' => 1140,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 1,
            ),
            140 => 
            array (
                'id' => 1141,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            141 => 
            array (
                'id' => 1142,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            142 => 
            array (
                'id' => 1143,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            143 => 
            array (
                'id' => 1144,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 9,
                'shiftaction_id' => 3,
            ),
            144 => 
            array (
                'id' => 1145,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 12,
                'shiftaction_id' => 4,
            ),
            145 => 
            array (
                'id' => 1146,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 10,
                'shiftaction_id' => 4,
            ),
            146 => 
            array (
                'id' => 1147,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            147 => 
            array (
                'id' => 1148,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            148 => 
            array (
                'id' => 1149,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            149 => 
            array (
                'id' => 1150,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            150 => 
            array (
                'id' => 1151,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            151 => 
            array (
                'id' => 1152,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 7,
                'shiftaction_id' => 8,
            ),
            152 => 
            array (
                'id' => 1153,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            153 => 
            array (
                'id' => 1154,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 6,
                'shiftaction_id' => 9,
            ),
            154 => 
            array (
                'id' => 1155,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 9,
                'shiftaction_id' => 9,
            ),
            155 => 
            array (
                'id' => 1156,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            156 => 
            array (
                'id' => 1157,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            157 => 
            array (
                'id' => 1158,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            158 => 
            array (
                'id' => 1159,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 4,
                'shiftaction_id' => 11,
            ),
            159 => 
            array (
                'id' => 1160,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 12,
            ),
            160 => 
            array (
                'id' => 1161,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 12,
            ),
            161 => 
            array (
                'id' => 1162,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            162 => 
            array (
                'id' => 1163,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 2,
                'shiftaction_id' => 13,
            ),
            163 => 
            array (
                'id' => 1164,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 8,
                'shiftaction_id' => 14,
            ),
            164 => 
            array (
                'id' => 1165,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            165 => 
            array (
                'id' => 1166,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            166 => 
            array (
                'id' => 1167,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 11,
                'shiftaction_id' => 15,
            ),
            167 => 
            array (
                'id' => 1168,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 16,
            ),
            168 => 
            array (
                'id' => 1169,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            169 => 
            array (
                'id' => 1170,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 1,
                'shiftaction_id' => 17,
            ),
            170 => 
            array (
                'id' => 1171,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 6,
                'shiftaction_id' => 18,
            ),
            171 => 
            array (
                'id' => 1172,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 7,
                'shiftaction_id' => 18,
            ),
            172 => 
            array (
                'id' => 1173,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 9,
                'shiftaction_id' => 19,
            ),
            173 => 
            array (
                'id' => 1174,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 61,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
            174 => 
            array (
                'id' => 1175,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 11,
                'shiftaction_id' => 1,
            ),
            175 => 
            array (
                'id' => 1176,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 1,
            ),
            176 => 
            array (
                'id' => 1177,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            177 => 
            array (
                'id' => 1178,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            178 => 
            array (
                'id' => 1179,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            179 => 
            array (
                'id' => 1180,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 8,
                'shiftaction_id' => 3,
            ),
            180 => 
            array (
                'id' => 1181,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 8,
                'shiftaction_id' => 4,
            ),
            181 => 
            array (
                'id' => 1182,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            182 => 
            array (
                'id' => 1183,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            183 => 
            array (
                'id' => 1184,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 1,
                'shiftaction_id' => 5,
            ),
            184 => 
            array (
                'id' => 1185,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            185 => 
            array (
                'id' => 1186,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            186 => 
            array (
                'id' => 1187,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            187 => 
            array (
                'id' => 1188,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 1,
                'shiftaction_id' => 7,
            ),
            188 => 
            array (
                'id' => 1189,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 7,
                'shiftaction_id' => 8,
            ),
            189 => 
            array (
                'id' => 1190,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 4,
                'shiftaction_id' => 8,
            ),
            190 => 
            array (
                'id' => 1191,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            191 => 
            array (
                'id' => 1192,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 2,
                'shiftaction_id' => 9,
            ),
            192 => 
            array (
                'id' => 1193,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 12,
                'shiftaction_id' => 10,
            ),
            193 => 
            array (
                'id' => 1194,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 104,
                'shiftaction_id' => 10,
            ),
            194 => 
            array (
                'id' => 1195,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 9,
                'shiftaction_id' => 11,
            ),
            195 => 
            array (
                'id' => 1196,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 3,
                'shiftaction_id' => 11,
            ),
            196 => 
            array (
                'id' => 1197,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 6,
                'shiftaction_id' => 12,
            ),
            197 => 
            array (
                'id' => 1198,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            198 => 
            array (
                'id' => 1199,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 2,
                'shiftaction_id' => 13,
            ),
            199 => 
            array (
                'id' => 1200,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 12,
                'shiftaction_id' => 13,
            ),
            200 => 
            array (
                'id' => 1201,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            201 => 
            array (
                'id' => 1202,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 6,
                'shiftaction_id' => 14,
            ),
            202 => 
            array (
                'id' => 1203,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            203 => 
            array (
                'id' => 1204,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 15,
            ),
            204 => 
            array (
                'id' => 1205,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 9,
                'shiftaction_id' => 16,
            ),
            205 => 
            array (
                'id' => 1206,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 9,
                'shiftaction_id' => 16,
            ),
            206 => 
            array (
                'id' => 1207,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            207 => 
            array (
                'id' => 1208,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 10,
                'shiftaction_id' => 17,
            ),
            208 => 
            array (
                'id' => 1209,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 7,
                'shiftaction_id' => 18,
            ),
            209 => 
            array (
                'id' => 1210,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 2,
                'shiftaction_id' => 18,
            ),
            210 => 
            array (
                'id' => 1211,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            211 => 
            array (
                'id' => 1212,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 62,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            212 => 
            array (
                'id' => 1213,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 6,
                'shiftaction_id' => 1,
            ),
            213 => 
            array (
                'id' => 1214,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 9,
                'shiftaction_id' => 1,
            ),
            214 => 
            array (
                'id' => 1215,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 7,
                'shiftaction_id' => 2,
            ),
            215 => 
            array (
                'id' => 1216,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 2,
            ),
            216 => 
            array (
                'id' => 1217,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 10,
                'shiftaction_id' => 3,
            ),
            217 => 
            array (
                'id' => 1218,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 4,
                'shiftaction_id' => 3,
            ),
            218 => 
            array (
                'id' => 1219,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 104,
                'shiftaction_id' => 4,
            ),
            219 => 
            array (
                'id' => 1220,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            220 => 
            array (
                'id' => 1221,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 3,
                'shiftaction_id' => 5,
            ),
            221 => 
            array (
                'id' => 1222,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 8,
                'shiftaction_id' => 5,
            ),
            222 => 
            array (
                'id' => 1223,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            223 => 
            array (
                'id' => 1224,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 10,
                'shiftaction_id' => 6,
            ),
            224 => 
            array (
                'id' => 1225,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 9,
                'shiftaction_id' => 7,
            ),
            225 => 
            array (
                'id' => 1226,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            226 => 
            array (
                'id' => 1227,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            227 => 
            array (
                'id' => 1228,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 12,
                'shiftaction_id' => 8,
            ),
            228 => 
            array (
                'id' => 1229,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 10,
                'shiftaction_id' => 9,
            ),
            229 => 
            array (
                'id' => 1230,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            230 => 
            array (
                'id' => 1231,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 8,
                'shiftaction_id' => 10,
            ),
            231 => 
            array (
                'id' => 1232,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            232 => 
            array (
                'id' => 1233,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 11,
            ),
            233 => 
            array (
                'id' => 1234,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 9,
                'shiftaction_id' => 11,
            ),
            234 => 
            array (
                'id' => 1235,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            235 => 
            array (
                'id' => 1236,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 6,
                'shiftaction_id' => 12,
            ),
            236 => 
            array (
                'id' => 1237,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 11,
                'shiftaction_id' => 13,
            ),
            237 => 
            array (
                'id' => 1238,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 13,
            ),
            238 => 
            array (
                'id' => 1239,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            239 => 
            array (
                'id' => 1240,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 3,
                'shiftaction_id' => 14,
            ),
            240 => 
            array (
                'id' => 1241,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            241 => 
            array (
                'id' => 1242,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            242 => 
            array (
                'id' => 1243,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            243 => 
            array (
                'id' => 1244,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 2,
                'shiftaction_id' => 16,
            ),
            244 => 
            array (
                'id' => 1245,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            245 => 
            array (
                'id' => 1246,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 5,
                'shiftaction_id' => 17,
            ),
            246 => 
            array (
                'id' => 1247,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 12,
                'shiftaction_id' => 18,
            ),
            247 => 
            array (
                'id' => 1248,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 104,
                'shiftaction_id' => 18,
            ),
            248 => 
            array (
                'id' => 1249,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            249 => 
            array (
                'id' => 1250,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 63,
                'user_id' => 3,
                'shiftaction_id' => 19,
            ),
            250 => 
            array (
                'id' => 1251,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 12,
                'shiftaction_id' => 1,
            ),
            251 => 
            array (
                'id' => 1252,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 9,
                'shiftaction_id' => 1,
            ),
            252 => 
            array (
                'id' => 1253,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            253 => 
            array (
                'id' => 1254,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 3,
                'shiftaction_id' => 2,
            ),
            254 => 
            array (
                'id' => 1255,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            255 => 
            array (
                'id' => 1256,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 6,
                'shiftaction_id' => 3,
            ),
            256 => 
            array (
                'id' => 1257,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 7,
                'shiftaction_id' => 4,
            ),
            257 => 
            array (
                'id' => 1258,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 4,
            ),
            258 => 
            array (
                'id' => 1259,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            259 => 
            array (
                'id' => 1260,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 10,
                'shiftaction_id' => 5,
            ),
            260 => 
            array (
                'id' => 1261,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            261 => 
            array (
                'id' => 1262,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 8,
                'shiftaction_id' => 6,
            ),
            262 => 
            array (
                'id' => 1263,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 2,
                'shiftaction_id' => 7,
            ),
            263 => 
            array (
                'id' => 1264,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            264 => 
            array (
                'id' => 1265,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 1,
                'shiftaction_id' => 8,
            ),
            265 => 
            array (
                'id' => 1266,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 8,
            ),
            266 => 
            array (
                'id' => 1267,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            267 => 
            array (
                'id' => 1268,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 1,
                'shiftaction_id' => 9,
            ),
            268 => 
            array (
                'id' => 1269,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            269 => 
            array (
                'id' => 1270,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 2,
                'shiftaction_id' => 10,
            ),
            270 => 
            array (
                'id' => 1271,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            271 => 
            array (
                'id' => 1272,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 8,
                'shiftaction_id' => 11,
            ),
            272 => 
            array (
                'id' => 1273,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 12,
            ),
            273 => 
            array (
                'id' => 1274,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 4,
                'shiftaction_id' => 12,
            ),
            274 => 
            array (
                'id' => 1275,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 2,
                'shiftaction_id' => 13,
            ),
            275 => 
            array (
                'id' => 1276,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 104,
                'shiftaction_id' => 13,
            ),
            276 => 
            array (
                'id' => 1277,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            277 => 
            array (
                'id' => 1278,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 5,
                'shiftaction_id' => 14,
            ),
            278 => 
            array (
                'id' => 1279,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 6,
                'shiftaction_id' => 15,
            ),
            279 => 
            array (
                'id' => 1280,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 12,
                'shiftaction_id' => 16,
            ),
            280 => 
            array (
                'id' => 1281,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            281 => 
            array (
                'id' => 1282,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            282 => 
            array (
                'id' => 1283,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 11,
                'shiftaction_id' => 17,
            ),
            283 => 
            array (
                'id' => 1284,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 1,
                'shiftaction_id' => 18,
            ),
            284 => 
            array (
                'id' => 1285,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 11,
                'shiftaction_id' => 18,
            ),
            285 => 
            array (
                'id' => 1286,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 11,
                'shiftaction_id' => 19,
            ),
            286 => 
            array (
                'id' => 1287,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 64,
                'user_id' => 104,
                'shiftaction_id' => 19,
            ),
            287 => 
            array (
                'id' => 1288,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            288 => 
            array (
                'id' => 1289,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 12,
                'shiftaction_id' => 1,
            ),
            289 => 
            array (
                'id' => 1290,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 10,
                'shiftaction_id' => 2,
            ),
            290 => 
            array (
                'id' => 1291,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            291 => 
            array (
                'id' => 1292,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 5,
                'shiftaction_id' => 3,
            ),
            292 => 
            array (
                'id' => 1293,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 2,
                'shiftaction_id' => 3,
            ),
            293 => 
            array (
                'id' => 1294,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 3,
                'shiftaction_id' => 4,
            ),
            294 => 
            array (
                'id' => 1295,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 11,
                'shiftaction_id' => 4,
            ),
            295 => 
            array (
                'id' => 1296,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            296 => 
            array (
                'id' => 1297,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            297 => 
            array (
                'id' => 1298,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 5,
                'shiftaction_id' => 6,
            ),
            298 => 
            array (
                'id' => 1299,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            299 => 
            array (
                'id' => 1300,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            300 => 
            array (
                'id' => 1301,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            301 => 
            array (
                'id' => 1302,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 104,
                'shiftaction_id' => 8,
            ),
            302 => 
            array (
                'id' => 1303,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 8,
                'shiftaction_id' => 8,
            ),
            303 => 
            array (
                'id' => 1304,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 11,
                'shiftaction_id' => 9,
            ),
            304 => 
            array (
                'id' => 1305,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 11,
                'shiftaction_id' => 9,
            ),
            305 => 
            array (
                'id' => 1306,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            306 => 
            array (
                'id' => 1307,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            307 => 
            array (
                'id' => 1308,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            308 => 
            array (
                'id' => 1309,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 12,
                'shiftaction_id' => 11,
            ),
            309 => 
            array (
                'id' => 1310,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 12,
                'shiftaction_id' => 12,
            ),
            310 => 
            array (
                'id' => 1311,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 3,
                'shiftaction_id' => 12,
            ),
            311 => 
            array (
                'id' => 1312,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            312 => 
            array (
                'id' => 1313,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 13,
            ),
            313 => 
            array (
                'id' => 1314,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 14,
            ),
            314 => 
            array (
                'id' => 1315,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 11,
                'shiftaction_id' => 14,
            ),
            315 => 
            array (
                'id' => 1316,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 2,
                'shiftaction_id' => 15,
            ),
            316 => 
            array (
                'id' => 1317,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 7,
                'shiftaction_id' => 15,
            ),
            317 => 
            array (
                'id' => 1318,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 5,
                'shiftaction_id' => 16,
            ),
            318 => 
            array (
                'id' => 1319,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 4,
                'shiftaction_id' => 16,
            ),
            319 => 
            array (
                'id' => 1320,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 7,
                'shiftaction_id' => 17,
            ),
            320 => 
            array (
                'id' => 1321,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 12,
                'shiftaction_id' => 17,
            ),
            321 => 
            array (
                'id' => 1322,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 7,
                'shiftaction_id' => 18,
            ),
            322 => 
            array (
                'id' => 1323,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 2,
                'shiftaction_id' => 18,
            ),
            323 => 
            array (
                'id' => 1324,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            324 => 
            array (
                'id' => 1325,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 65,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            325 => 
            array (
                'id' => 1326,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 2,
                'shiftaction_id' => 1,
            ),
            326 => 
            array (
                'id' => 1327,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 12,
                'shiftaction_id' => 1,
            ),
            327 => 
            array (
                'id' => 1328,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            328 => 
            array (
                'id' => 1329,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 8,
                'shiftaction_id' => 2,
            ),
            329 => 
            array (
                'id' => 1330,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 7,
                'shiftaction_id' => 3,
            ),
            330 => 
            array (
                'id' => 1331,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 104,
                'shiftaction_id' => 3,
            ),
            331 => 
            array (
                'id' => 1332,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 6,
                'shiftaction_id' => 4,
            ),
            332 => 
            array (
                'id' => 1333,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            333 => 
            array (
                'id' => 1334,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 4,
                'shiftaction_id' => 5,
            ),
            334 => 
            array (
                'id' => 1335,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 7,
                'shiftaction_id' => 5,
            ),
            335 => 
            array (
                'id' => 1336,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 1,
                'shiftaction_id' => 6,
            ),
            336 => 
            array (
                'id' => 1337,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 4,
                'shiftaction_id' => 6,
            ),
            337 => 
            array (
                'id' => 1338,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 12,
                'shiftaction_id' => 7,
            ),
            338 => 
            array (
                'id' => 1339,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 5,
                'shiftaction_id' => 7,
            ),
            339 => 
            array (
                'id' => 1340,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 9,
                'shiftaction_id' => 8,
            ),
            340 => 
            array (
                'id' => 1341,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 10,
                'shiftaction_id' => 8,
            ),
            341 => 
            array (
                'id' => 1342,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 12,
                'shiftaction_id' => 9,
            ),
            342 => 
            array (
                'id' => 1343,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 7,
                'shiftaction_id' => 9,
            ),
            343 => 
            array (
                'id' => 1344,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 9,
                'shiftaction_id' => 10,
            ),
            344 => 
            array (
                'id' => 1345,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 6,
                'shiftaction_id' => 10,
            ),
            345 => 
            array (
                'id' => 1346,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            346 => 
            array (
                'id' => 1347,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 11,
                'shiftaction_id' => 11,
            ),
            347 => 
            array (
                'id' => 1348,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 2,
                'shiftaction_id' => 12,
            ),
            348 => 
            array (
                'id' => 1349,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 1,
                'shiftaction_id' => 13,
            ),
            349 => 
            array (
                'id' => 1350,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 7,
                'shiftaction_id' => 13,
            ),
            350 => 
            array (
                'id' => 1351,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 11,
                'shiftaction_id' => 14,
            ),
            351 => 
            array (
                'id' => 1352,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 12,
                'shiftaction_id' => 14,
            ),
            352 => 
            array (
                'id' => 1353,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 8,
                'shiftaction_id' => 15,
            ),
            353 => 
            array (
                'id' => 1354,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 10,
                'shiftaction_id' => 16,
            ),
            354 => 
            array (
                'id' => 1355,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 2,
                'shiftaction_id' => 16,
            ),
            355 => 
            array (
                'id' => 1356,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 2,
                'shiftaction_id' => 17,
            ),
            356 => 
            array (
                'id' => 1357,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 7,
                'shiftaction_id' => 17,
            ),
            357 => 
            array (
                'id' => 1358,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 4,
                'shiftaction_id' => 18,
            ),
            358 => 
            array (
                'id' => 1359,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 8,
                'shiftaction_id' => 18,
            ),
            359 => 
            array (
                'id' => 1360,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 12,
                'shiftaction_id' => 19,
            ),
            360 => 
            array (
                'id' => 1361,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 66,
                'user_id' => 1,
                'shiftaction_id' => 19,
            ),
            361 => 
            array (
                'id' => 1362,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 8,
                'shiftaction_id' => 1,
            ),
            362 => 
            array (
                'id' => 1363,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 5,
                'shiftaction_id' => 1,
            ),
            363 => 
            array (
                'id' => 1364,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 9,
                'shiftaction_id' => 2,
            ),
            364 => 
            array (
                'id' => 1365,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 6,
                'shiftaction_id' => 2,
            ),
            365 => 
            array (
                'id' => 1366,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 11,
                'shiftaction_id' => 3,
            ),
            366 => 
            array (
                'id' => 1367,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 10,
                'shiftaction_id' => 3,
            ),
            367 => 
            array (
                'id' => 1368,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 4,
                'shiftaction_id' => 4,
            ),
            368 => 
            array (
                'id' => 1369,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 2,
                'shiftaction_id' => 4,
            ),
            369 => 
            array (
                'id' => 1370,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 2,
                'shiftaction_id' => 5,
            ),
            370 => 
            array (
                'id' => 1371,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 6,
                'shiftaction_id' => 5,
            ),
            371 => 
            array (
                'id' => 1372,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 11,
                'shiftaction_id' => 6,
            ),
            372 => 
            array (
                'id' => 1373,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 104,
                'shiftaction_id' => 6,
            ),
            373 => 
            array (
                'id' => 1374,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 4,
                'shiftaction_id' => 7,
            ),
            374 => 
            array (
                'id' => 1375,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 10,
                'shiftaction_id' => 7,
            ),
            375 => 
            array (
                'id' => 1376,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 1,
                'shiftaction_id' => 8,
            ),
            376 => 
            array (
                'id' => 1377,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 3,
                'shiftaction_id' => 8,
            ),
            377 => 
            array (
                'id' => 1378,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 4,
                'shiftaction_id' => 9,
            ),
            378 => 
            array (
                'id' => 1379,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 5,
                'shiftaction_id' => 9,
            ),
            379 => 
            array (
                'id' => 1380,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 11,
                'shiftaction_id' => 10,
            ),
            380 => 
            array (
                'id' => 1381,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 12,
                'shiftaction_id' => 10,
            ),
            381 => 
            array (
                'id' => 1382,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 3,
                'shiftaction_id' => 11,
            ),
            382 => 
            array (
                'id' => 1383,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 7,
                'shiftaction_id' => 11,
            ),
            383 => 
            array (
                'id' => 1384,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 1,
                'shiftaction_id' => 12,
            ),
            384 => 
            array (
                'id' => 1385,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 104,
                'shiftaction_id' => 12,
            ),
            385 => 
            array (
                'id' => 1386,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 10,
                'shiftaction_id' => 13,
            ),
            386 => 
            array (
                'id' => 1387,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 4,
                'shiftaction_id' => 13,
            ),
            387 => 
            array (
                'id' => 1388,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 104,
                'shiftaction_id' => 14,
            ),
            388 => 
            array (
                'id' => 1389,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 2,
                'shiftaction_id' => 14,
            ),
            389 => 
            array (
                'id' => 1390,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            390 => 
            array (
                'id' => 1391,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 12,
                'shiftaction_id' => 15,
            ),
            391 => 
            array (
                'id' => 1392,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 6,
                'shiftaction_id' => 16,
            ),
            392 => 
            array (
                'id' => 1393,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 3,
                'shiftaction_id' => 16,
            ),
            393 => 
            array (
                'id' => 1394,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 7,
                'shiftaction_id' => 17,
            ),
            394 => 
            array (
                'id' => 1395,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 6,
                'shiftaction_id' => 17,
            ),
            395 => 
            array (
                'id' => 1396,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 8,
                'shiftaction_id' => 18,
            ),
            396 => 
            array (
                'id' => 1397,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 10,
                'shiftaction_id' => 18,
            ),
            397 => 
            array (
                'id' => 1398,
                'day' => 0,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 6,
                'shiftaction_id' => 19,
            ),
            398 => 
            array (
                'id' => 1399,
                'day' => 1,
                'time' => '2021-06-09 16:47:47',
                'shiftsheet_id' => 67,
                'user_id' => 7,
                'shiftaction_id' => 19,
            ),
        ));
        
        
    }
}