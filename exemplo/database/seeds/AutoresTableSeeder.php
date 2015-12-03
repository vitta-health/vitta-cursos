<?php

use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();
		$faker->addProvider(new Faker\Provider\Base($faker));
		$faker->addProvider(new Faker\Provider\Lorem($faker));
		$faker->addProvider(new Faker\Provider\pt_BR\Internet($faker));
		$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
		$faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

        for ($i=0; $i < 10; $i++) { 
        	App\Autor::create([
        		'nome'		=> $faker->firstName,
        		'sobrenome'	=> $faker->lastName,
        		'email' 	=> $faker->email,
        		'telefone' 	=> $faker->cellphoneNumber,
        		'foto' 		=> 'http://lorempixel.com/185/185/people/'.$i.'/',
        	]);
        }
    }
}
