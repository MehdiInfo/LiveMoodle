<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annonce;
class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Annonce::create([
            
            'message'=>'Ceci est une annonce généré par le seeder!',
            'createur'=>'Jean Paul le créateur automatique',
        ]);
    }
}
