<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftcommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftcomments')->delete();
        
        \DB::table('shiftcomments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 8,
                'shiftaction_id' => 10,
            ),
            1 => 
            array (
                'id' => 2,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 23,
                'shiftaction_id' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 23,
                'shiftaction_id' => 17,
            ),
            3 => 
            array (
                'id' => 4,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 38,
                'shiftaction_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 38,
                'shiftaction_id' => 11,
            ),
            5 => 
            array (
                'id' => 6,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 53,
                'shiftaction_id' => 12,
            ),
            6 => 
            array (
                'id' => 7,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 53,
                'shiftaction_id' => 13,
            ),
            7 => 
            array (
                'id' => 8,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 4,
                'shiftsheet_id' => 53,
                'shiftaction_id' => 17,
            ),
            8 => 
            array (
                'id' => 9,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 68,
                'shiftaction_id' => 13,
            ),
            9 => 
            array (
                'id' => 10,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 9,
                'shiftsheet_id' => 68,
                'shiftaction_id' => 19,
            ),
            10 => 
            array (
                'id' => 11,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 1,
                'shiftaction_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 7,
                'shiftsheet_id' => 1,
                'shiftaction_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 1,
                'shiftaction_id' => 8,
            ),
            13 => 
            array (
                'id' => 14,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 2,
                'shiftaction_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 9,
                'shiftsheet_id' => 2,
                'shiftaction_id' => 17,
            ),
            15 => 
            array (
                'id' => 16,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 4,
                'shiftaction_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 4,
                'shiftaction_id' => 6,
            ),
            17 => 
            array (
                'id' => 18,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 7,
                'shiftsheet_id' => 4,
                'shiftaction_id' => 10,
            ),
            18 => 
            array (
                'id' => 19,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:44',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 4,
                'shiftaction_id' => 14,
            ),
            19 => 
            array (
                'id' => 20,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 5,
                'shiftaction_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 5,
                'shiftaction_id' => 8,
            ),
            21 => 
            array (
                'id' => 22,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 7,
                'shiftaction_id' => 11,
            ),
            22 => 
            array (
                'id' => 23,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 7,
                'shiftaction_id' => 19,
            ),
            23 => 
            array (
                'id' => 24,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 16,
                'shiftaction_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 17,
                'shiftaction_id' => 9,
            ),
            25 => 
            array (
                'id' => 26,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 17,
                'shiftaction_id' => 18,
            ),
            26 => 
            array (
                'id' => 27,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 18,
                'shiftaction_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 4,
                'shiftsheet_id' => 18,
                'shiftaction_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 18,
                'shiftaction_id' => 7,
            ),
            29 => 
            array (
                'id' => 30,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 19,
                'shiftaction_id' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 19,
                'shiftaction_id' => 18,
            ),
            31 => 
            array (
                'id' => 32,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 21,
                'shiftaction_id' => 13,
            ),
            32 => 
            array (
                'id' => 33,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 12,
                'shiftsheet_id' => 22,
                'shiftaction_id' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 31,
                'shiftaction_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 31,
                'shiftaction_id' => 6,
            ),
            35 => 
            array (
                'id' => 36,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:45',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 31,
                'shiftaction_id' => 9,
            ),
            36 => 
            array (
                'id' => 37,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 31,
                'shiftaction_id' => 14,
            ),
            37 => 
            array (
                'id' => 38,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 32,
                'shiftaction_id' => 12,
            ),
            38 => 
            array (
                'id' => 39,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 7,
                'shiftsheet_id' => 32,
                'shiftaction_id' => 15,
            ),
            39 => 
            array (
                'id' => 40,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 33,
                'shiftaction_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 34,
                'shiftaction_id' => 18,
            ),
            41 => 
            array (
                'id' => 42,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 35,
                'shiftaction_id' => 11,
            ),
            42 => 
            array (
                'id' => 43,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 35,
                'shiftaction_id' => 18,
            ),
            43 => 
            array (
                'id' => 44,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 12,
                'shiftsheet_id' => 36,
                'shiftaction_id' => 13,
            ),
            44 => 
            array (
                'id' => 45,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 36,
                'shiftaction_id' => 16,
            ),
            45 => 
            array (
                'id' => 46,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 37,
                'shiftaction_id' => 9,
            ),
            46 => 
            array (
                'id' => 47,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 37,
                'shiftaction_id' => 18,
            ),
            47 => 
            array (
                'id' => 48,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 37,
                'shiftaction_id' => 19,
            ),
            48 => 
            array (
                'id' => 49,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 46,
                'shiftaction_id' => 5,
            ),
            49 => 
            array (
                'id' => 50,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 46,
                'shiftaction_id' => 19,
            ),
            50 => 
            array (
                'id' => 51,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 47,
                'shiftaction_id' => 12,
            ),
            51 => 
            array (
                'id' => 52,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 3,
                'shiftsheet_id' => 47,
                'shiftaction_id' => 13,
            ),
            52 => 
            array (
                'id' => 53,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 48,
                'shiftaction_id' => 2,
            ),
            53 => 
            array (
                'id' => 54,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 48,
                'shiftaction_id' => 8,
            ),
            54 => 
            array (
                'id' => 55,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:46',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 48,
                'shiftaction_id' => 13,
            ),
            55 => 
            array (
                'id' => 56,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 9,
                'shiftsheet_id' => 49,
                'shiftaction_id' => 18,
            ),
            56 => 
            array (
                'id' => 57,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 50,
                'shiftaction_id' => 15,
            ),
            57 => 
            array (
                'id' => 58,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 50,
                'shiftaction_id' => 17,
            ),
            58 => 
            array (
                'id' => 59,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 51,
                'shiftaction_id' => 9,
            ),
            59 => 
            array (
                'id' => 60,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 51,
                'shiftaction_id' => 11,
            ),
            60 => 
            array (
                'id' => 61,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 52,
                'shiftaction_id' => 3,
            ),
            61 => 
            array (
                'id' => 62,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 52,
                'shiftaction_id' => 9,
            ),
            62 => 
            array (
                'id' => 63,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 2,
                'shiftsheet_id' => 52,
                'shiftaction_id' => 13,
            ),
            63 => 
            array (
                'id' => 64,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 11,
                'shiftsheet_id' => 52,
                'shiftaction_id' => 15,
            ),
            64 => 
            array (
                'id' => 65,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 4,
                'shiftsheet_id' => 61,
                'shiftaction_id' => 4,
            ),
            65 => 
            array (
                'id' => 66,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 61,
                'shiftaction_id' => 15,
            ),
            66 => 
            array (
                'id' => 67,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 7,
                'shiftsheet_id' => 62,
                'shiftaction_id' => 8,
            ),
            67 => 
            array (
                'id' => 68,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 6,
                'shiftsheet_id' => 62,
                'shiftaction_id' => 15,
            ),
            68 => 
            array (
                'id' => 69,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 10,
                'shiftsheet_id' => 64,
                'shiftaction_id' => 2,
            ),
            69 => 
            array (
                'id' => 70,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 1,
                'shiftsheet_id' => 64,
                'shiftaction_id' => 3,
            ),
            70 => 
            array (
                'id' => 71,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 4,
                'shiftsheet_id' => 64,
                'shiftaction_id' => 12,
            ),
            71 => 
            array (
                'id' => 72,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 2,
                'shiftsheet_id' => 64,
                'shiftaction_id' => 16,
            ),
            72 => 
            array (
                'id' => 73,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 2,
                'shiftsheet_id' => 65,
                'shiftaction_id' => 19,
            ),
            73 => 
            array (
                'id' => 74,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 9,
                'shiftsheet_id' => 66,
                'shiftaction_id' => 12,
            ),
            74 => 
            array (
                'id' => 75,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 8,
                'shiftsheet_id' => 66,
                'shiftaction_id' => 15,
            ),
            75 => 
            array (
                'id' => 76,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 5,
                'shiftsheet_id' => 66,
                'shiftaction_id' => 19,
            ),
            76 => 
            array (
                'id' => 77,
                'message' => 'Bonjour',
                'time' => '2021-06-09 16:47:47',
                'carryOn' => 0,
                'endOfCarryOn' => NULL,
                'user_id' => 104,
                'shiftsheet_id' => 67,
                'shiftaction_id' => 18,
            ),
        ));
        
        
    }
}