<?php

use Illuminate\Database\Seeder;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        $users = App\User::all();

        foreach($users as $user)
        {
            if($user->tipo != 0)
            {
                App\Paciente::create([
                    'id' => $user->id,
                    'tipo_sanguineo' => $faker->randomElement($array = array ('a+','b+','ab+', 'o+', 'a-','b-','ab-', 'o-'))
                ]);
            }
        }
    }
}
