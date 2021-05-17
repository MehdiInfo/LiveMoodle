<?php

namespace Database\Seeders;
use App\Models\etablissement;

use Illuminate\Database\Seeder;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        etablissement::truncate();
        etablissement::create([
            'title' => 'Urca',
        ]);
        etablissement::create([
            'title' => 'SciencePo',
        ]);
    }
}
