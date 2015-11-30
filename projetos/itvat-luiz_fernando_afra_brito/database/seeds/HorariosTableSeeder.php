<?php

use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seis_horas = 6*60*60;
        $doze_horas = 12*60*60;
        $treze_horas = 13*60*60;
        $vinte_horas = 20*60*60;

        $medicos = App\Medico::all();

        foreach($medicos as $medico)
        {
            //domingo a sabado
            for ($i = 0; $i < 7; $i++) {

                //trabalha de manha
                if(rand(0,6) > 1)
                {
                    $entrada = date('H:i:00', rand($seis_horas, $doze_horas));

                    App\Horario::create([
                        'medico_id' => $medico->id,
                        'dia_da_semana' => $i,
                        'entrada' => $entrada,
                        'saida' => $this->somaHoraAleatoria($entrada, $max = date('H:i:00', $doze_horas)),
                    ]);
                }

                //trabalha de tarde
                if(rand(0,6) > 1)
                {
                    $entrada = date('H:i:00', rand($treze_horas, $vinte_horas));

                    App\Horario::create([
                        'medico_id' => $medico->id,
                        'dia_da_semana' => $i,
                        'entrada' => $entrada,
                        'saida' => $this->somaHoraAleatoria($entrada, $max = date('H:i:00', $vinte_horas)),
                    ]);
                }
            }
        }
    }

    private function somaHoraAleatoria($hora, $max = "23:59:00")
    {
        $c1 = new Carbon\Carbon($hora);
        $c2 = new Carbon\Carbon($max);

        $c1->addHours(rand(1, 4));

        //lt = menor q
        if($c1->lt($c2))
            return $c1->toTimeString();
        else
            return $max;
    }
}
