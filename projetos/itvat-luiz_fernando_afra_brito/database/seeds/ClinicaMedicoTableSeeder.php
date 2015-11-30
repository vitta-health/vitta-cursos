<?php

use Illuminate\Database\Seeder;

class ClinicaMedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicos = App\Medico::all();
        $clinicas = App\Clinica::all();

        for ($i = 0; $i < 200; $i++) 
        {
            /* pode ocorrer erros de contraint */
            try {
                $medicos->random(1)->clinicas()->attach($clinicas->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->errorInfo);
            }    
        }
    }
}
