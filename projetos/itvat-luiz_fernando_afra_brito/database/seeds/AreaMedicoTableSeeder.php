<?php

use Illuminate\Database\Seeder;

class AreaMedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        $medicos = App\Medico::all();
        $areas = App\Area::all();

        for ($i = 0; $i < 100; $i++) 
        {
            /* pode ocorrer problemas de constraint */
            try {
                $medicos->random(1)->areas()->attach($areas->random(1)->id);    
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }    
        }
    }
}
