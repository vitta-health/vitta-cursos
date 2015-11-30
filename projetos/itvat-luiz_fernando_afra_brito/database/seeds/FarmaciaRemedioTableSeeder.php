<?php

use Illuminate\Database\Seeder;

class FarmaciaRemedioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $farmacias = App\Farmacia::all();
        $remedios = App\Remedio::all();
        
        for ($i = 0; $i < 120; $i++) 
        {
            try {
                $farmacias->random(1)->remedios()->attach($remedios->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }    
        }
    }
}
