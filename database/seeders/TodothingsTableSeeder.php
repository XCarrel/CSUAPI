<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodothingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('todothings')->delete();
        
        \DB::table('todothings')->insert(array (
            0 => 
            array (
                'id' => 21,
                'description' => 'Changer Bac chariot de nettoyage',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 5,
            ),
            1 => 
            array (
                'id' => 22,
                'description' => 'Check Ambulance et Communication',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 2,
            ),
            2 => 
            array (
                'id' => 23,
                'description' => 'Check bibliothèque',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 4,
            ),
            3 => 
            array (
                'id' => 24,
                'description' => 'Check de nuit ',
                'daything' => 0,
                'type' => NULL,
                'display_order' => 21,
            ),
            4 => 
            array (
                'id' => 25,
                'description' => 'Commande mat et commande pharma.',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 6,
            ),
            5 => 
            array (
                'id' => 26,
                'description' => 'Commande O2',
                'daything' => 0,
                'type' => NULL,
                'display_order' => 25,
            ),
            6 => 
            array (
                'id' => 27,
                'description' => 'Contrôle niveau véhicule',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 8,
            ),
            7 => 
            array (
                'id' => 28,
                'description' => 'Contrôle stupéfiants + Date perf. Chaudes',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 3,
            ),
            8 => 
            array (
                'id' => 29,
            'description' => 'Contrôle stupéfiants Nova .... (Morphine X4, Fentanyl X6)',
                'daything' => 0,
                'type' => 'novas',
                'display_order' => 22,
            ),
            9 => 
            array (
                'id' => 30,
                'description' => 'Désinfection + Inventaire hebdo Nova ....',
                'daything' => 1,
                'type' => 'novas',
                'display_order' => 11,
            ),
            10 => 
            array (
                'id' => 31,
                'description' => 'Tâches spécifiques de jour',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 13,
            ),
            11 => 
            array (
                'id' => 32,
                'description' => 'Tâches spécifiques de nuit',
                'daything' => 0,
                'type' => NULL,
                'display_order' => 23,
            ),
            12 => 
            array (
                'id' => 33,
                'description' => 'Envoi rapport STUP hebdo à gt pharmacie',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 9,
            ),
            13 => 
            array (
                'id' => 34,
                'description' => 'Fax 144 Transmission',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 1,
            ),
            14 => 
            array (
                'id' => 35,
                'description' => 'Formation',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 14,
            ),
            15 => 
            array (
                'id' => 36,
                'description' => 'Nettoyage centrale et garage',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 10,
            ),
            16 => 
            array (
                'id' => 37,
                'description' => 'Rangement mat',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 7,
            ),
            17 => 
            array (
                'id' => 38,
                'description' => 'Remise locaux ambulances ',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 15,
            ),
            18 => 
            array (
                'id' => 39,
                'description' => 'Remise locaux Transmission',
                'daything' => 0,
                'type' => NULL,
                'display_order' => 24,
            ),
            19 => 
            array (
                'id' => 40,
                'description' => 'Tâches selon nécessité',
                'daything' => 1,
                'type' => NULL,
                'display_order' => 12,
            ),
        ));
        
        
    }
}