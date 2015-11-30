<?php

use Illuminate\Database\Seeder;

class ClinicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 100; $i++) {
            App\Clinica::create([
                'nome' => $faker->company,
                'endereco' => $faker->address
            ]);
        }
    }
}
