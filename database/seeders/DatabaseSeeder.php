<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(EtablissementSeeder::class);
        $this->call(CoursSeeder::class);
        $this->call(ExerciceSeeder::class);

        /**$this->call(EtablissementSeeder::class);
        *<--$this->call([
        *    ChatRoomSeeder::class
        ]);*/
        $this->call(QuestionSeeder::class);


        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->count(15)->create([
            'Etab_id' => 1,
        ]);
        \App\Models\User::factory()->count(15)->create([
            'Etab_id' => 2,
        ]);
        \App\Models\Question::factory()->count(5)->create();
    }
}
