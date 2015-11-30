<?php

use Illuminate\Database\Seeder;

class AgendamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        $pacientes = App\Paciente::all();
        $medicos = App\Medico::all();
        $clinicas = App\Clinica::all();
        
        for ($i = 0; $i < 500; $i++) 
        {
            App\Agendamento::create([
                'paciente_id' => $pacientes->random(1)->id,
                'data_hora' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '+2 years'),
                'medico_id' => $medicos->random(1)->id,
                'clinica_id' => $clinicas->random(1)->id,
                'status' => $faker->numberBetween($min = 0, $max = 3),
                'obs' => $faker->optional()->text
            ]);
        }
    }
}
