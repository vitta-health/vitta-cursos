<?php

use Illuminate\Database\Seeder;

class DoencasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doencas = json_decode(Storage::get('doencas.json'), true);
        
        foreach($doencas as $doenca) 
        {
            App\Doenca::create([
                'nome_conhecido' => $doenca['nome_conhecido'],
                'nome_cientifico' => $doenca['nome_cientifico'],
                'descricao' => $doenca['descricao']
            ]);
        }
    }
}
