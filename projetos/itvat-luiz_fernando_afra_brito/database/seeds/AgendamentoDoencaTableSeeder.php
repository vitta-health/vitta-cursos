<?php

use Illuminate\Database\Seeder;

class AgendamentoDoencaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agendamentos = App\Agendamento::all();
        $doencas = App\Doenca::all();
        for ($i = 0; $i < 400; $i++) 
        {
            /* pode ocorrer erros de contraint */
            try {
                $agendamentos->random(1)->attachDoenca($doencas->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }    
        }
        
    }
}
