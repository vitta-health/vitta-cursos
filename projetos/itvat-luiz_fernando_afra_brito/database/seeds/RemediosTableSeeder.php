<?php

use Illuminate\Database\Seeder;

class RemediosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 5; $i++) {
            App\Remedio::create([
                'nome' => $faker->word
            ]);
        }
    }
}
