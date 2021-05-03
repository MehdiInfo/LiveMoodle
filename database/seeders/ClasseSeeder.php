<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classe::truncate();
        Classe::create([
            'title' => 'S4F5A',
        ]);
        Classe::create([
            'title' => 'S4F5B',
        ]);
        Classe::create([
            'title' => 'S4F5C',
        ]);
        Classe::create([
            'title' => 'Aucun',
        ]);
    }
}
