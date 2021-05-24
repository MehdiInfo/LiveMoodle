<?php

namespace Database\Seeders;
use App\Models\Exercice;
use Illuminate\Database\Seeder;

class ExerciceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercice::truncate();
        Exercice::create([
            'Categorie' => 'Qcm',
            'Cours_id' => 3,
        ]);
        Exercice::create([
            'Categorie' => 'Coder',
            'Cours_id' => 3,
        ]);

    }
}
