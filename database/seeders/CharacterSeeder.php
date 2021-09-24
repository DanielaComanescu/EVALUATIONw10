<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Spider Man',
                'creationYear' => 1980,
                'cartoonName' => 'Marvel Comics',
                'designer_id' => 1,
                'details' => 'Spider Man est un personnage des BD très connu au monde entier',
            ],

            [
                'name' => 'Asterix',
                'creationYear' => 1961,
                'cartoonName' => 'Asterix and Obelix',
                'designer_id' => 1,
                'details' => 'Asterix est un personnage des BD comics',
            ],

            [
                'name' => 'Les Sisters',
                'creationYear' => 2006,
                'cartoonName' => 'Bamboo',
                'designer_id' => 2,
                'details' => 'Les est un personnage des BD pour les enfants et ados'
            ],
        ]);
    }
}
