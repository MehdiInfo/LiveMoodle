<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $prof = User::create([
            'name' => 'Rabat',
            'email' => 'prof@prof.com',
            'password' => Hash::make('password'),
            'statut' => 'Prof',
            'Classe_id' => '3',
            'Etab_id' => '1',
        ]);
        $prof = User::create([
            'name' => 'Random',
            'email' => 'prof2@prof2.com',
            'password' => Hash::make('password'),
            'statut' => 'Prof',
            'Classe_id' => '4',
            'Etab_id' => '2',
        ]);
        $etudiant = User::create([
            'name' => 'Mehdi',
            'email' => 'Etudiant@Etudiant.com',
            'password' => Hash::make('password'),
            'statut' => 'Etudiant',
            'Classe_id' => '1',
            'Etab_id' => '1'
        ]);
        $etudiant2 = User::create([
            'name' => 'toto',
            'email' => 'Etudiant2@Etudiant.com',
            'password' => Hash::make('password'),
            'statut' => 'Etudiant'
        ]);
        $etudiant3 = User::create([
            'name' => 'tutu',
            'email' => 'Etudiant3@Etudiant.com',
            'password' => Hash::make('password'),
            'statut' => 'Etudiant'
        ]);

        $profRole = Role::where('statut', 'Prof')->first();
        $etudiantRole = Role::where('statut', 'Etudiant')->first();
        $prof->roles()->attach($profRole);
        $etudiant->roles()->attach($etudiantRole);
        $etudiant2->roles()->attach($etudiantRole);
        $etudiant3->roles()->attach($etudiantRole);
    }
}
