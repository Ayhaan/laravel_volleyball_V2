<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            [
                'nom' => 'Equipe ONE',
                'ville' => 'Bruxelles',
                'pays' => 'Belgique',
                'max' => 6,
                'ATT' => 1,
                'CT' => 0,
                'DC' => 1,
                'RP' => 0,
                'continent_id' => 1,
            ],
            [
                'nom' => 'Equipe TWO',
                'ville' => 'Berlin',
                'pays' => 'Allemagne',
                'max' => 6,
                'ATT' => 0,
                'CT' => 1,
                'DC' => 1,
                'RP' => 0,
                'continent_id' => 2,
            ],
            [
                'nom' => 'Equipe THREE',
                'ville' => 'Milan',
                'pays' => 'Italie',
                'max' => 6,
                'ATT' => 0,
                'CT' => 0,
                'DC' => 2,
                'RP' => 0,
                'continent_id' => 3,
            ],
            [
                'nom' => 'Equipe sans joueurs',
                'ville' => 'New York',
                'pays' => 'USA',
                'max' => 6,
                'ATT' => 0,
                'CT' => 0,
                'DC' => 0,
                'RP' => 0,
                'continent_id' => 3,
            ],

        ]);
    }
}
