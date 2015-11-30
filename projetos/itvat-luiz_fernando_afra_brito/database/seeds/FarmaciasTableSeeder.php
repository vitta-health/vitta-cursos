<?php

use Illuminate\Database\Seeder;

class FarmaciasTableSeeder extends Seeder
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
            
            App\Farmacia::create([
                'nome' => $faker->company,
                'endereco' => $faker->address
            ]);
        }
    }
}
