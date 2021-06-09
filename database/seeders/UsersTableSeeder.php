<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Admin',
                'lastname' => 'istrateur',
                'initials' => 'ANN',
                'password' => '$2y$10$IUpQUnMhzPXSD62922qKquT4ByP1PylV/7YbLBg9FlQJkLlXbE9XO',
                'admin' => 1,
                'firstconnect' => 1,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Dimitri',
                'lastname' => 'Imfeld',
                'initials' => 'DID',
                'password' => '$2y$10$d1L1EeKInZE78BORj6PlzO3aIeDBMs79W5tZMyyhWVeNgKs9UU8NC',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => 'sIqli5JQSesIFPgKtP5zD1ouTYlrS3xNjXiPfoXzIQpQQB3vzFHMvfEdqHOV',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Alexandre',
                'lastname' => 'Philibert',
                'initials' => 'APT',
                'password' => '$2y$10$ymBRVyXglT5QbEAk4mcIdezmuuHTgixxezgkXWwwhoVB2w2thNcyu',
                'admin' => 1,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => 'lwkZObuxvOQDFfZgxRCcz9tp1Gfgm0IfwQHOHxSYXdVzb0GjiQh2ovqGKqZQ',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'Gabriel',
                'lastname' => 'Pereira',
                'initials' => 'GPA',
                'password' => '$2y$10$da9jIDSoU7.q8qeMn6NMFevcNVrg1dHe6MVLfTWNjzqL59agahkB6',
                'admin' => 1,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'firstname' => 'Dylan',
                'lastname' => 'Ramos',
                'initials' => 'DOS',
                'password' => '$2y$10$vnNkvDguaXeYQw0Hf6tCje.bCpN3tn9QyZLHNF04Ss9xbyuhD/7DS',
                'admin' => 1,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'firstname' => 'Andi',
                'lastname' => 'Santos',
                'initials' => 'ASO',
                'password' => '$2y$10$n6wns2OxbD3/9Yp/lhT6auZIiJ5yJj0QSlcxaVIPj8p7AeUNCx8v6',
                'admin' => 1,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'firstname' => 'Quentin',
                'lastname' => 'Aellen',
                'initials' => 'QAN',
                'password' => '$2y$10$bAqW.Hl6ZoRXeqRKJZelfurz1baJF4HEbATVpNHqaRWb/lIVlnCoi',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'firstname' => 'Yvann',
                'lastname' => 'Butticaz',
                'initials' => 'YBZ',
                'password' => '$2y$10$Fk6OJNzAQaoM9gWfPIxQOe4Va7HH6zGrlcqZ2eoB6kltYzHvbOr5O',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'firstname' => 'Mathieu',
                'lastname' => 'Burnat',
                'initials' => 'MBT',
                'password' => '$2y$10$XU9JJpvC38c4YBrDnDYCA.QYAnyk4geocribgqMNR/zAHU1frIsNq',
                'admin' => 0,
                'firstconnect' => 1,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'firstname' => 'Cyril',
                'lastname' => 'Goldenschue',
                'initials' => 'CGE',
                'password' => '$2y$10$vPJrv/ZmyQHhpSx1WTTDbuYhDSd9z2ajf5Y6az1XwxvpzTXmHjT9.',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'firstname' => 'Zaid',
                'lastname' => 'Schouwey',
                'initials' => 'ZSY',
                'password' => '$2y$10$kOVn1KVQEiC5p1736IwUou4uBAZMZMQSFJdnL8Ny0H/dNPh7j4Z9W',
                'admin' => 0,
                'firstconnect' => 1,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'firstname' => 'Gabriel',
                'lastname' => 'Rossier',
                'initials' => 'GRR',
                'password' => '$2y$10$.zAj0rdXp7x/rt0a1QElb.5VczaDu4IU38VxFdOMzcWtN9auyNrMy',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
            12 => 
            array (
                'id' => 104,
                'firstname' => 'William',
                'lastname' => 'Hausmann',
                'initials' => 'WHN',
                'password' => '$2y$10$AHBreoiRi.lmiJIH7cMaAupFItjPkI8xVc059qa9mpxTKsenJlHU2',
                'admin' => 0,
                'firstconnect' => 0,
                'email' => NULL,
                'mobileNumber' => NULL,
                'number' => NULL,
                'api_token' => NULL,
            ),
        ));
        
        
    }
}