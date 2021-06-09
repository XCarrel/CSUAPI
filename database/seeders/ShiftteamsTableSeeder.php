<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftteamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shiftteams')->delete();

        \DB::table('shiftteams')->insert(array (
            0 =>
            array (
                'id' => 1,
                'shiftsheet_id' => 1,
                'boss_id' => 2,
                'teammate_id' => 8,
                'nova_id' => 6,
                'day' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'shiftsheet_id' => 1,
                'boss_id' => 11,
                'teammate_id' => 2,
                'nova_id' => 8,
                'day' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'shiftsheet_id' => 2,
                'boss_id' => 8,
                'teammate_id' => 6,
                'nova_id' => 7,
                'day' => 0,
            ),
            3 =>
            array (
                'id' => 4,
                'shiftsheet_id' => 2,
                'boss_id' => 9,
                'teammate_id' => 6,
                'nova_id' => 2,
                'day' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'shiftsheet_id' => 3,
                'boss_id' => 3,
                'teammate_id' => 3,
                'nova_id' => 7,
                'day' => 0,
            ),
            5 =>
            array (
                'id' => 6,
                'shiftsheet_id' => 3,
                'boss_id' => 7,
                'teammate_id' => 7,
                'nova_id' => 3,
                'day' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'shiftsheet_id' => 4,
                'boss_id' => 5,
                'teammate_id' => 9,
                'nova_id' => 3,
                'day' => 0,
            ),
            7 =>
            array (
                'id' => 8,
                'shiftsheet_id' => 4,
                'boss_id' => 2,
                'teammate_id' => 104,
                'nova_id' => 4,
                'day' => 1,
            ),
            8 =>
            array (
                'id' => 9,
                'shiftsheet_id' => 5,
                'boss_id' => 104,
                'teammate_id' => 8,
                'nova_id' => 9,
                'day' => 0,
            ),
            9 =>
            array (
                'id' => 10,
                'shiftsheet_id' => 5,
                'boss_id' => 6,
                'teammate_id' => 8,
                'nova_id' => 8,
                'day' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'shiftsheet_id' => 6,
                'boss_id' => 1,
                'teammate_id' => 7,
                'nova_id' => 4,
                'day' => 0,
            ),
            11 =>
            array (
                'id' => 12,
                'shiftsheet_id' => 6,
                'boss_id' => 2,
                'teammate_id' => 6,
                'nova_id' => 11,
                'day' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'shiftsheet_id' => 7,
                'boss_id' => 7,
                'teammate_id' => 3,
                'nova_id' => 3,
                'day' => 0,
            ),
            13 =>
            array (
                'id' => 14,
                'shiftsheet_id' => 7,
                'boss_id' => 12,
                'teammate_id' => 6,
                'nova_id' => 8,
                'day' => 1,
            ),
            14 =>
            array (
                'id' => 15,
                'shiftsheet_id' => 8,
                'boss_id' => 104,
                'teammate_id' => 104,
                'nova_id' => 9,
                'day' => 0,
            ),
            15 =>
            array (
                'id' => 16,
                'shiftsheet_id' => 8,
                'boss_id' => 2,
                'teammate_id' => 4,
                'nova_id' => 1,
                'day' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'shiftsheet_id' => 8,
                'boss_id' => 5,
                'teammate_id' => 8,
                'nova_id' => 10,
                'day' => 1,
            ),
            17 =>
            array (
                'id' => 18,
                'shiftsheet_id' => 9,
                'boss_id' => 9,
                'teammate_id' => 7,
                'nova_id' => 7,
                'day' => 0,
            ),
            18 =>
            array (
                'id' => 19,
                'shiftsheet_id' => 9,
                'boss_id' => 6,
                'teammate_id' => 4,
                'nova_id' => 3,
                'day' => 1,
            ),
            19 =>
            array (
                'id' => 20,
                'shiftsheet_id' => 10,
                'boss_id' => 6,
                'teammate_id' => 5,
                'nova_id' => 4,
                'day' => 0,
            ),
            20 =>
            array (
                'id' => 21,
                'shiftsheet_id' => 10,
                'boss_id' => 10,
                'teammate_id' => 10,
                'nova_id' => 6,
                'day' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'shiftsheet_id' => 11,
                'boss_id' => 1,
                'teammate_id' => 104,
                'nova_id' => 6,
                'day' => 0,
            ),
            22 =>
            array (
                'id' => 23,
                'shiftsheet_id' => 11,
                'boss_id' => 9,
                'teammate_id' => 12,
                'nova_id' => 6,
                'day' => 1,
            ),
            23 =>
            array (
                'id' => 24,
                'shiftsheet_id' => 12,
                'boss_id' => 12,
                'teammate_id' => 11,
                'nova_id' => 4,
                'day' => 0,
            ),
            24 =>
            array (
                'id' => 25,
                'shiftsheet_id' => 12,
                'boss_id' => 5,
                'teammate_id' => 11,
                'nova_id' => 9,
                'day' => 1,
            ),
            25 =>
            array (
                'id' => 26,
                'shiftsheet_id' => 14,
                'boss_id' => 8,
                'teammate_id' => 7,
                'nova_id' => 8,
                'day' => 0,
            ),
            26 =>
            array (
                'id' => 27,
                'shiftsheet_id' => 4,
                'boss_id' => 12,
                'teammate_id' => 8,
                'nova_id' => 11,
                'day' => 1,
            ),
            27 =>
            array (
                'id' => 28,
                'shiftsheet_id' => 14,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            28 =>
            array (
                'id' => 29,
                'shiftsheet_id' => 14,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            29 =>
            array (
                'id' => 30,
                'shiftsheet_id' => 15,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            30 =>
            array (
                'id' => 31,
                'shiftsheet_id' => 15,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            31 =>
            array (
                'id' => 32,
                'shiftsheet_id' => 16,
                'boss_id' => 10,
                'teammate_id' => 11,
                'nova_id' => 7,
                'day' => 0,
            ),
            32 =>
            array (
                'id' => 33,
                'shiftsheet_id' => 16,
                'boss_id' => 11,
                'teammate_id' => 104,
                'nova_id' => 8,
                'day' => 1,
            ),
            33 =>
            array (
                'id' => 34,
                'shiftsheet_id' => 17,
                'boss_id' => 5,
                'teammate_id' => 1,
                'nova_id' => 1,
                'day' => 0,
            ),
            34 =>
            array (
                'id' => 35,
                'shiftsheet_id' => 17,
                'boss_id' => 1,
                'teammate_id' => 1,
                'nova_id' => 3,
                'day' => 1,
            ),
            35 =>
            array (
                'id' => 36,
                'shiftsheet_id' => 18,
                'boss_id' => 4,
                'teammate_id' => 5,
                'nova_id' => 1,
                'day' => 0,
            ),
            36 =>
            array (
                'id' => 37,
                'shiftsheet_id' => 18,
                'boss_id' => 1,
                'teammate_id' => 3,
                'nova_id' => 11,
                'day' => 1,
            ),
            37 =>
            array (
                'id' => 38,
                'shiftsheet_id' => 19,
                'boss_id' => 6,
                'teammate_id' => 11,
                'nova_id' => 11,
                'day' => 0,
            ),
            38 =>
            array (
                'id' => 39,
                'shiftsheet_id' => 19,
                'boss_id' => 3,
                'teammate_id' => 1,
                'nova_id' => 10,
                'day' => 1,
            ),
            39 =>
            array (
                'id' => 40,
                'shiftsheet_id' => 20,
                'boss_id' => 8,
                'teammate_id' => 9,
                'nova_id' => 8,
                'day' => 0,
            ),
            40 =>
            array (
                'id' => 41,
                'shiftsheet_id' => 20,
                'boss_id' => 5,
                'teammate_id' => 9,
                'nova_id' => 4,
                'day' => 1,
            ),
            41 =>
            array (
                'id' => 42,
                'shiftsheet_id' => 21,
                'boss_id' => 11,
                'teammate_id' => 8,
                'nova_id' => 6,
                'day' => 0,
            ),
            42 =>
            array (
                'id' => 43,
                'shiftsheet_id' => 21,
                'boss_id' => 104,
                'teammate_id' => 4,
                'nova_id' => 4,
                'day' => 1,
            ),
            43 =>
            array (
                'id' => 44,
                'shiftsheet_id' => 22,
                'boss_id' => 10,
                'teammate_id' => 9,
                'nova_id' => 2,
                'day' => 0,
            ),
            44 =>
            array (
                'id' => 45,
                'shiftsheet_id' => 22,
                'boss_id' => 12,
                'teammate_id' => 10,
                'nova_id' => 3,
                'day' => 1,
            ),
            45 =>
            array (
                'id' => 46,
                'shiftsheet_id' => 23,
                'boss_id' => 1,
                'teammate_id' => 5,
                'nova_id' => 9,
                'day' => 0,
            ),
            46 =>
            array (
                'id' => 47,
                'shiftsheet_id' => 23,
                'boss_id' => 11,
                'teammate_id' => 9,
                'nova_id' => 10,
                'day' => 1,
            ),
            47 =>
            array (
                'id' => 48,
                'shiftsheet_id' => 23,
                'boss_id' => 7,
                'teammate_id' => 12,
                'nova_id' => 10,
                'day' => 1,
            ),
            48 =>
            array (
                'id' => 49,
                'shiftsheet_id' => 24,
                'boss_id' => 9,
                'teammate_id' => 10,
                'nova_id' => 7,
                'day' => 0,
            ),
            49 =>
            array (
                'id' => 50,
                'shiftsheet_id' => 24,
                'boss_id' => 9,
                'teammate_id' => 8,
                'nova_id' => 9,
                'day' => 1,
            ),
            50 =>
            array (
                'id' => 51,
                'shiftsheet_id' => 25,
                'boss_id' => 6,
                'teammate_id' => 10,
                'nova_id' => 3,
                'day' => 0,
            ),
            51 =>
            array (
                'id' => 52,
                'shiftsheet_id' => 25,
                'boss_id' => 104,
                'teammate_id' => 1,
                'nova_id' => 5,
                'day' => 1,
            ),
            52 =>
            array (
                'id' => 53,
                'shiftsheet_id' => 26,
                'boss_id' => 10,
                'teammate_id' => 9,
                'nova_id' => 11,
                'day' => 0,
            ),
            53 =>
            array (
                'id' => 54,
                'shiftsheet_id' => 26,
                'boss_id' => 9,
                'teammate_id' => 9,
                'nova_id' => 4,
                'day' => 1,
            ),
            54 =>
            array (
                'id' => 55,
                'shiftsheet_id' => 27,
                'boss_id' => 10,
                'teammate_id' => 8,
                'nova_id' => 9,
                'day' => 0,
            ),
            55 =>
            array (
                'id' => 56,
                'shiftsheet_id' => 27,
                'boss_id' => 12,
                'teammate_id' => 5,
                'nova_id' => 11,
                'day' => 1,
            ),
            56 =>
            array (
                'id' => 57,
                'shiftsheet_id' => 28,
                'boss_id' => 11,
                'teammate_id' => 3,
                'nova_id' => 7,
                'day' => 0,
            ),
            57 =>
            array (
                'id' => 58,
                'shiftsheet_id' => 28,
                'boss_id' => 3,
                'teammate_id' => 5,
                'nova_id' => 3,
                'day' => 1,
            ),
            58 =>
            array (
                'id' => 59,
                'shiftsheet_id' => 29,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            59 =>
            array (
                'id' => 60,
                'shiftsheet_id' => 29,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            60 =>
            array (
                'id' => 61,
                'shiftsheet_id' => 30,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            61 =>
            array (
                'id' => 62,
                'shiftsheet_id' => 30,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            62 =>
            array (
                'id' => 63,
                'shiftsheet_id' => 31,
                'boss_id' => 1,
                'teammate_id' => 11,
                'nova_id' => 10,
                'day' => 0,
            ),
            63 =>
            array (
                'id' => 64,
                'shiftsheet_id' => 31,
                'boss_id' => 104,
                'teammate_id' => 2,
                'nova_id' => 9,
                'day' => 1,
            ),
            64 =>
            array (
                'id' => 65,
                'shiftsheet_id' => 32,
                'boss_id' => 8,
                'teammate_id' => 12,
                'nova_id' => 8,
                'day' => 0,
            ),
            65 =>
            array (
                'id' => 66,
                'shiftsheet_id' => 32,
                'boss_id' => 12,
                'teammate_id' => 3,
                'nova_id' => 6,
                'day' => 1,
            ),
            66 =>
            array (
                'id' => 67,
                'shiftsheet_id' => 33,
                'boss_id' => 5,
                'teammate_id' => 8,
                'nova_id' => 10,
                'day' => 0,
            ),
            67 =>
            array (
                'id' => 68,
                'shiftsheet_id' => 33,
                'boss_id' => 6,
                'teammate_id' => 8,
                'nova_id' => 6,
                'day' => 1,
            ),
            68 =>
            array (
                'id' => 69,
                'shiftsheet_id' => 34,
                'boss_id' => 3,
                'teammate_id' => 1,
                'nova_id' => 7,
                'day' => 0,
            ),
            69 =>
            array (
                'id' => 70,
                'shiftsheet_id' => 34,
                'boss_id' => 10,
                'teammate_id' => 12,
                'nova_id' => 4,
                'day' => 1,
            ),
            70 =>
            array (
                'id' => 71,
                'shiftsheet_id' => 35,
                'boss_id' => 3,
                'teammate_id' => 9,
                'nova_id' => 10,
                'day' => 0,
            ),
            71 =>
            array (
                'id' => 72,
                'shiftsheet_id' => 35,
                'boss_id' => 4,
                'teammate_id' => 10,
                'nova_id' => 9,
                'day' => 1,
            ),
            72 =>
            array (
                'id' => 73,
                'shiftsheet_id' => 36,
                'boss_id' => 9,
                'teammate_id' => 10,
                'nova_id' => 8,
                'day' => 0,
            ),
            73 =>
            array (
                'id' => 74,
                'shiftsheet_id' => 36,
                'boss_id' => 5,
                'teammate_id' => 8,
                'nova_id' => 9,
                'day' => 1,
            ),
            74 =>
            array (
                'id' => 75,
                'shiftsheet_id' => 37,
                'boss_id' => 8,
                'teammate_id' => 7,
                'nova_id' => 11,
                'day' => 0,
            ),
            75 =>
            array (
                'id' => 76,
                'shiftsheet_id' => 37,
                'boss_id' => 5,
                'teammate_id' => 9,
                'nova_id' => 6,
                'day' => 1,
            ),
            76 =>
            array (
                'id' => 77,
                'shiftsheet_id' => 38,
                'boss_id' => 4,
                'teammate_id' => 1,
                'nova_id' => 5,
                'day' => 0,
            ),
            77 =>
            array (
                'id' => 78,
                'shiftsheet_id' => 38,
                'boss_id' => 104,
                'teammate_id' => 6,
                'nova_id' => 4,
                'day' => 1,
            ),
            78 =>
            array (
                'id' => 79,
                'shiftsheet_id' => 38,
                'boss_id' => 3,
                'teammate_id' => 4,
                'nova_id' => 6,
                'day' => 1,
            ),
            79 =>
            array (
                'id' => 80,
                'shiftsheet_id' => 39,
                'boss_id' => 12,
                'teammate_id' => 10,
                'nova_id' => 1,
                'day' => 0,
            ),
            80 =>
            array (
                'id' => 81,
                'shiftsheet_id' => 39,
                'boss_id' => 3,
                'teammate_id' => 9,
                'nova_id' => 9,
                'day' => 1,
            ),
            81 =>
            array (
                'id' => 82,
                'shiftsheet_id' => 40,
                'boss_id' => 11,
                'teammate_id' => 12,
                'nova_id' => 9,
                'day' => 0,
            ),
            82 =>
            array (
                'id' => 83,
                'shiftsheet_id' => 40,
                'boss_id' => 4,
                'teammate_id' => 3,
                'nova_id' => 3,
                'day' => 1,
            ),
            83 =>
            array (
                'id' => 84,
                'shiftsheet_id' => 41,
                'boss_id' => 5,
                'teammate_id' => 1,
                'nova_id' => 2,
                'day' => 0,
            ),
            84 =>
            array (
                'id' => 85,
                'shiftsheet_id' => 41,
                'boss_id' => 7,
                'teammate_id' => 4,
                'nova_id' => 8,
                'day' => 1,
            ),
            85 =>
            array (
                'id' => 86,
                'shiftsheet_id' => 42,
                'boss_id' => 11,
                'teammate_id' => 1,
                'nova_id' => 6,
                'day' => 0,
            ),
            86 =>
            array (
                'id' => 87,
                'shiftsheet_id' => 42,
                'boss_id' => 9,
                'teammate_id' => 9,
                'nova_id' => 2,
                'day' => 1,
            ),
            87 =>
            array (
                'id' => 88,
                'shiftsheet_id' => 43,
                'boss_id' => 104,
                'teammate_id' => 3,
                'nova_id' => 1,
                'day' => 0,
            ),
            88 =>
            array (
                'id' => 89,
                'shiftsheet_id' => 43,
                'boss_id' => 12,
                'teammate_id' => 3,
                'nova_id' => 4,
                'day' => 1,
            ),
            89 =>
            array (
                'id' => 90,
                'shiftsheet_id' => 44,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            90 =>
            array (
                'id' => 91,
                'shiftsheet_id' => 44,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            91 =>
            array (
                'id' => 92,
                'shiftsheet_id' => 45,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            92 =>
            array (
                'id' => 93,
                'shiftsheet_id' => 45,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            93 =>
            array (
                'id' => 94,
                'shiftsheet_id' => 46,
                'boss_id' => 8,
                'teammate_id' => 8,
                'nova_id' => 1,
                'day' => 0,
            ),
            94 =>
            array (
                'id' => 95,
                'shiftsheet_id' => 46,
                'boss_id' => 6,
                'teammate_id' => 1,
                'nova_id' => 11,
                'day' => 1,
            ),
            95 =>
            array (
                'id' => 96,
                'shiftsheet_id' => 47,
                'boss_id' => 8,
                'teammate_id' => 11,
                'nova_id' => 5,
                'day' => 0,
            ),
            96 =>
            array (
                'id' => 97,
                'shiftsheet_id' => 47,
                'boss_id' => 6,
                'teammate_id' => 104,
                'nova_id' => 6,
                'day' => 1,
            ),
            97 =>
            array (
                'id' => 98,
                'shiftsheet_id' => 48,
                'boss_id' => 7,
                'teammate_id' => 104,
                'nova_id' => 4,
                'day' => 0,
            ),
            98 =>
            array (
                'id' => 99,
                'shiftsheet_id' => 48,
                'boss_id' => 8,
                'teammate_id' => 2,
                'nova_id' => 8,
                'day' => 1,
            ),
            99 =>
            array (
                'id' => 100,
                'shiftsheet_id' => 49,
                'boss_id' => 8,
                'teammate_id' => 6,
                'nova_id' => 4,
                'day' => 0,
            ),
            100 =>
            array (
                'id' => 101,
                'shiftsheet_id' => 49,
                'boss_id' => 6,
                'teammate_id' => 1,
                'nova_id' => 2,
                'day' => 1,
            ),
            101 =>
            array (
                'id' => 102,
                'shiftsheet_id' => 50,
                'boss_id' => 8,
                'teammate_id' => 12,
                'nova_id' => 10,
                'day' => 0,
            ),
            102 =>
            array (
                'id' => 103,
                'shiftsheet_id' => 50,
                'boss_id' => 9,
                'teammate_id' => 10,
                'nova_id' => 7,
                'day' => 1,
            ),
            103 =>
            array (
                'id' => 104,
                'shiftsheet_id' => 51,
                'boss_id' => 11,
                'teammate_id' => 1,
                'nova_id' => 7,
                'day' => 0,
            ),
            104 =>
            array (
                'id' => 105,
                'shiftsheet_id' => 51,
                'boss_id' => 11,
                'teammate_id' => 3,
                'nova_id' => 7,
                'day' => 1,
            ),
            105 =>
            array (
                'id' => 106,
                'shiftsheet_id' => 52,
                'boss_id' => 104,
                'teammate_id' => 10,
                'nova_id' => 11,
                'day' => 0,
            ),
            106 =>
            array (
                'id' => 107,
                'shiftsheet_id' => 52,
                'boss_id' => 6,
                'teammate_id' => 6,
                'nova_id' => 9,
                'day' => 1,
            ),
            107 =>
            array (
                'id' => 108,
                'shiftsheet_id' => 53,
                'boss_id' => 9,
                'teammate_id' => 11,
                'nova_id' => 4,
                'day' => 0,
            ),
            108 =>
            array (
                'id' => 109,
                'shiftsheet_id' => 53,
                'boss_id' => 12,
                'teammate_id' => 9,
                'nova_id' => 6,
                'day' => 1,
            ),
            109 =>
            array (
                'id' => 110,
                'shiftsheet_id' => 53,
                'boss_id' => 9,
                'teammate_id' => 8,
                'nova_id' => 11,
                'day' => 1,
            ),
            110 =>
            array (
                'id' => 111,
                'shiftsheet_id' => 54,
                'boss_id' => 2,
                'teammate_id' => 10,
                'nova_id' => 3,
                'day' => 0,
            ),
            111 =>
            array (
                'id' => 112,
                'shiftsheet_id' => 54,
                'boss_id' => 104,
                'teammate_id' => 104,
                'nova_id' => 2,
                'day' => 1,
            ),
            112 =>
            array (
                'id' => 113,
                'shiftsheet_id' => 55,
                'boss_id' => 11,
                'teammate_id' => 6,
                'nova_id' => 9,
                'day' => 0,
            ),
            113 =>
            array (
                'id' => 114,
                'shiftsheet_id' => 55,
                'boss_id' => 9,
                'teammate_id' => 104,
                'nova_id' => 9,
                'day' => 1,
            ),
            114 =>
            array (
                'id' => 115,
                'shiftsheet_id' => 56,
                'boss_id' => 12,
                'teammate_id' => 4,
                'nova_id' => 6,
                'day' => 0,
            ),
            115 =>
            array (
                'id' => 116,
                'shiftsheet_id' => 56,
                'boss_id' => 104,
                'teammate_id' => 3,
                'nova_id' => 1,
                'day' => 1,
            ),
            116 =>
            array (
                'id' => 117,
                'shiftsheet_id' => 57,
                'boss_id' => 10,
                'teammate_id' => 5,
                'nova_id' => 6,
                'day' => 0,
            ),
            117 =>
            array (
                'id' => 118,
                'shiftsheet_id' => 57,
                'boss_id' => 7,
                'teammate_id' => 3,
                'nova_id' => 4,
                'day' => 1,
            ),
            118 =>
            array (
                'id' => 119,
                'shiftsheet_id' => 58,
                'boss_id' => 1,
                'teammate_id' => 4,
                'nova_id' => 3,
                'day' => 0,
            ),
            119 =>
            array (
                'id' => 120,
                'shiftsheet_id' => 58,
                'boss_id' => 4,
                'teammate_id' => 9,
                'nova_id' => 6,
                'day' => 1,
            ),
            120 =>
            array (
                'id' => 121,
                'shiftsheet_id' => 59,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            121 =>
            array (
                'id' => 122,
                'shiftsheet_id' => 59,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            122 =>
            array (
                'id' => 123,
                'shiftsheet_id' => 60,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            123 =>
            array (
                'id' => 124,
                'shiftsheet_id' => 60,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            124 =>
            array (
                'id' => 125,
                'shiftsheet_id' => 61,
                'boss_id' => 104,
                'teammate_id' => 3,
                'nova_id' => 3,
                'day' => 0,
            ),
            125 =>
            array (
                'id' => 126,
                'shiftsheet_id' => 61,
                'boss_id' => 7,
                'teammate_id' => 104,
                'nova_id' => 4,
                'day' => 1,
            ),
            126 =>
            array (
                'id' => 127,
                'shiftsheet_id' => 62,
                'boss_id' => 2,
                'teammate_id' => 12,
                'nova_id' => 1,
                'day' => 0,
            ),
            127 =>
            array (
                'id' => 128,
                'shiftsheet_id' => 62,
                'boss_id' => 6,
                'teammate_id' => 104,
                'nova_id' => 8,
                'day' => 1,
            ),
            128 =>
            array (
                'id' => 129,
                'shiftsheet_id' => 63,
                'boss_id' => 10,
                'teammate_id' => 104,
                'nova_id' => 8,
                'day' => 0,
            ),
            129 =>
            array (
                'id' => 130,
                'shiftsheet_id' => 63,
                'boss_id' => 5,
                'teammate_id' => 11,
                'nova_id' => 9,
                'day' => 1,
            ),
            130 =>
            array (
                'id' => 131,
                'shiftsheet_id' => 64,
                'boss_id' => 4,
                'teammate_id' => 4,
                'nova_id' => 4,
                'day' => 0,
            ),
            131 =>
            array (
                'id' => 132,
                'shiftsheet_id' => 64,
                'boss_id' => 1,
                'teammate_id' => 1,
                'nova_id' => 2,
                'day' => 1,
            ),
            132 =>
            array (
                'id' => 133,
                'shiftsheet_id' => 65,
                'boss_id' => 104,
                'teammate_id' => 10,
                'nova_id' => 8,
                'day' => 0,
            ),
            133 =>
            array (
                'id' => 134,
                'shiftsheet_id' => 65,
                'boss_id' => 2,
                'teammate_id' => 10,
                'nova_id' => 4,
                'day' => 1,
            ),
            134 =>
            array (
                'id' => 135,
                'shiftsheet_id' => 66,
                'boss_id' => 1,
                'teammate_id' => 7,
                'nova_id' => 7,
                'day' => 0,
            ),
            135 =>
            array (
                'id' => 136,
                'shiftsheet_id' => 66,
                'boss_id' => 7,
                'teammate_id' => 10,
                'nova_id' => 1,
                'day' => 1,
            ),
            136 =>
            array (
                'id' => 137,
                'shiftsheet_id' => 67,
                'boss_id' => 7,
                'teammate_id' => 104,
                'nova_id' => 4,
                'day' => 0,
            ),
            137 =>
            array (
                'id' => 138,
                'shiftsheet_id' => 67,
                'boss_id' => 9,
                'teammate_id' => 4,
                'nova_id' => 4,
                'day' => 1,
            ),
            138 =>
            array (
                'id' => 139,
                'shiftsheet_id' => 68,
                'boss_id' => 11,
                'teammate_id' => 3,
                'nova_id' => 8,
                'day' => 0,
            ),
            139 =>
            array (
                'id' => 140,
                'shiftsheet_id' => 68,
                'boss_id' => 8,
                'teammate_id' => 12,
                'nova_id' => 7,
                'day' => 1,
            ),
            140 =>
            array (
                'id' => 141,
                'shiftsheet_id' => 68,
                'boss_id' => 6,
                'teammate_id' => 6,
                'nova_id' => 9,
                'day' => 1,
            ),
            141 =>
            array (
                'id' => 142,
                'shiftsheet_id' => 69,
                'boss_id' => 9,
                'teammate_id' => 11,
                'nova_id' => 3,
                'day' => 0,
            ),
            142 =>
            array (
                'id' => 143,
                'shiftsheet_id' => 69,
                'boss_id' => 8,
                'teammate_id' => 3,
                'nova_id' => 5,
                'day' => 1,
            ),
            143 =>
            array (
                'id' => 144,
                'shiftsheet_id' => 70,
                'boss_id' => 4,
                'teammate_id' => 2,
                'nova_id' => 9,
                'day' => 0,
            ),
            144 =>
            array (
                'id' => 145,
                'shiftsheet_id' => 70,
                'boss_id' => 7,
                'teammate_id' => 2,
                'nova_id' => 3,
                'day' => 1,
            ),
            145 =>
            array (
                'id' => 146,
                'shiftsheet_id' => 71,
                'boss_id' => 10,
                'teammate_id' => 12,
                'nova_id' => 3,
                'day' => 0,
            ),
            146 =>
            array (
                'id' => 147,
                'shiftsheet_id' => 71,
                'boss_id' => 7,
                'teammate_id' => 12,
                'nova_id' => 9,
                'day' => 1,
            ),
            147 =>
            array (
                'id' => 148,
                'shiftsheet_id' => 72,
                'boss_id' => 6,
                'teammate_id' => 9,
                'nova_id' => 2,
                'day' => 0,
            ),
            148 =>
            array (
                'id' => 149,
                'shiftsheet_id' => 72,
                'boss_id' => 11,
                'teammate_id' => 8,
                'nova_id' => 6,
                'day' => 1,
            ),
            149 =>
            array (
                'id' => 150,
                'shiftsheet_id' => 73,
                'boss_id' => 12,
                'teammate_id' => 9,
                'nova_id' => 10,
                'day' => 0,
            ),
            150 =>
            array (
                'id' => 151,
                'shiftsheet_id' => 73,
                'boss_id' => 3,
                'teammate_id' => 6,
                'nova_id' => 5,
                'day' => 1,
            ),
            151 =>
            array (
                'id' => 152,
                'shiftsheet_id' => 74,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            152 =>
            array (
                'id' => 153,
                'shiftsheet_id' => 74,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
            153 =>
            array (
                'id' => 154,
                'shiftsheet_id' => 75,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 0,
            ),
            154 =>
            array (
                'id' => 155,
                'shiftsheet_id' => 75,
                'boss_id' => NULL,
                'teammate_id' => NULL,
                'nova_id' => NULL,
                'day' => 1,
            ),
        ));


    }
}
