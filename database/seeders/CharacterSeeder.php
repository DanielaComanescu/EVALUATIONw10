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
                'designer' => 'Stan Lee',
                'details' => 'Spider Man est un personnage des BD très connu au monde entier',
            ],

            [
                'name' => 'Asterix',
                'creationYear' => 1961,
                'cartoonName' => 'Asterix and Obelix',
                'designer' => 'Albert Udezo',
                'details' => 'Asterix est un personnage des BD comics',
            ],

            [
                'name' => 'Les Sisters',
                'creationYear' => 2006,
                'cartoonName' => 'Bamboo',
                'designer' => 'Stan Lee',
                'details' => 'Les est un personnage des BD pour les enfants et ados'
            ],
        ]);
    }
}
