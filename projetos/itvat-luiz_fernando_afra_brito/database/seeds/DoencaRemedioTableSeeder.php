<?php

use Illuminate\Database\Seeder;

class DoencaRemedioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doencas = App\Doenca::all();
        $remedios = App\Remedio::all();

        for ($i = 0; $i < 50; $i++) 
        {
            /* pode ocorrer erros de contraint */
            try {
                $doencas->random(1)->remediosRelacionados()->attach($remedios->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }    
        }
    }
}
