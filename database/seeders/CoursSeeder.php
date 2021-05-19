<?php

namespace Database\Seeders;
use App\Models\Cours;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cours::truncate();
        Cours::create([
            'title_cours' => 'Php',
            'Cls_id' => '0',
        ]);
        Cours::create([
            'title_cours' => 'Reseaux',
            'Cls_id' => '1',
        ]);
        Cours::create([
            'title_cours' => 'Anglais',
            'Cls_id' => '1',
        ]);
        Cours::create([
            'title_cours' => 'Anglais',
            'Cls_id' => '2',
        ]);
        Cours::create([
            'title_cours' => 'Anglais',
            'Cls_id' => '3',
        ]);
    }
}
