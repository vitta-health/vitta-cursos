<?php

use Illuminate\Database\Seeder;

class MedicosTableSeeder extends Seeder
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
            if($user->tipo != 1)
            {
                App\Medico::create([
                    'id' => $user->id,
                    'crm' => $faker->unique()->randomNumber
                ]);
            }
        }
    }
}
