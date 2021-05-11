<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            [
                "nom" => "Caliskan",
                "prenom" => "Ayhan",
                "age" => 24,
                "numero" => 4756245,
                "pays" => 'belgique',
                "genre_id" => 2,
                "role_id" => 1,
                'photo_id' => 1,
                "equipe_id" => 1,
            ],
            [
                "nom" => "Abou",
                "prenom" => "Elias",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 2,
                "pays" => 'allemagne',
                "role_id" => 2,
                'photo_id' => 2,
                "equipe_id" => 2,
            ],
            [
                "nom" => "Primo",
                "prenom" => "Nico",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 2,
                "pays" => 'italie',
                "role_id" => 3,
                'photo_id' => 3,
                "equipe_id" => 3,
            ],
            [
                "nom" => "Lionel",
                "prenom" => "Ayoub",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 2,
                "pays" => 'italie',
                "role_id" => 3,
                'photo_id' => 4,
                "equipe_id" => null,
            ],
            [
                "nom" => "Hazard",
                "prenom" => "Louise",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 1,
                "pays" => 'pays-bas',
                "role_id" => 3,
                'photo_id' => 5,
                "equipe_id" => null,
            ],
            [
                "nom" => "Debruyne",
                "prenom" => "Adame",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 2,
                "pays" => 'belgique',
                "role_id" => 3,
                'photo_id' => 6,
                "equipe_id" => 3,
            ],
            [
                "nom" => "Pedro",
                "prenom" => "Maxence",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 2,
                "pays" => 'Espagne',
                "role_id" => 3,
                'photo_id' => 7,
                "equipe_id" => 1,
            ],
            [
                "nom" => "Aguero",
                "prenom" => "Zulma",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 1,
                "pays" => 'Argentine',
                "role_id" => 3,
                'photo_id' => 8,
                "equipe_id" => null,
            ],
            [
                "nom" => "Ziyech",
                "prenom" => "Jamila",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 1,
                "pays" => 'Maroc',
                "role_id" => 3,
                'photo_id' => 9,
                "equipe_id" => null,
            ],
            [
                "nom" => "Ronaldo",
                "prenom" => "Seb",
                "age" => 25,
                "numero" => 4756245,
                "pays" => 'Portugal',
                'photo_id' => 10,
                "genre_id" => 2,
                "role_id" => 3,
                "equipe_id" => 2,
            ],
            [
                "nom" => "Kevin",
                "prenom" => "Saliou",
                "age" => 25,
                "numero" => 4756245,
                "genre_id" => 1,
                "pays" => 'Kazak',
                "role_id" => 3,
                'photo_id' => 11,
                "equipe_id" => null,
            ],
        ]);
    }
}
