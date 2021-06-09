<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShiftactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shiftactions')->delete();
        
        \DB::table('shiftactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'Radios',
                'shiftsection_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'Détecteurs CO',
                'shiftsection_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'Téléphones',
                'shiftsection_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'Gt info avisé',
                'shiftsection_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'text' => 'Annonce 144',
                'shiftsection_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'text' => 'Plein essence',
                'shiftsection_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'text' => 'Opérationnel',
                'shiftsection_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'text' => 'Rdv garage',
                'shiftsection_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'text' => 'Gt vhc avisé',
                'shiftsection_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'text' => '50chf présents',
                'shiftsection_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'text' => 'Problèmes d\'interventions hors véhicules',
                'shiftsection_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'text' => 'Info trafic consulté',
                'shiftsection_id' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                'text' => 'Report des infos trafic sur plan de secteur',
                'shiftsection_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'text' => 'Accueil étudiant ou stagiaire',
                'shiftsection_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'text' => 'Lecture journal de bord ',
                'shiftsection_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'text' => 'Problème et responsable Gt avisé',
                'shiftsection_id' => 3,
            ),
            16 => 
            array (
                'id' => 17,
                'text' => 'Centrale propre',
                'shiftsection_id' => 4,
            ),
            17 => 
            array (
                'id' => 18,
                'text' => 'Tâches du jour effectuées',
                'shiftsection_id' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'text' => 'Dimanche ',
                'shiftsection_id' => 4,
            ),
        ));
        
        
    }
}