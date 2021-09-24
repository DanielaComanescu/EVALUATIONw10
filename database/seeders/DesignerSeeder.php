<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('designers')->insert([
            [
                'name' => 'Stan Lee',
                'birthYear' => 1922,
                'nationality' => 'American',
            ],

            [
                'name' => 'Albert Udezo',
                'birthYear' => 1920,
                'nationality' => 'French',
            ],

            [
                'name' => 'Christophe Cazenove',
                'birthYear' => 1977,
                'nationality' => 'American',
            ],
        ]);
    }
}
