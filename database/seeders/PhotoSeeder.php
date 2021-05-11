<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
            [
                'url' => 'test.jpeg',
            ],
        ]);


    }
}
