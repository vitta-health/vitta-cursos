<?php

use Illuminate\Database\Seeder;

class DoencaTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doencas = App\Doenca::all();
        $tags = App\Tag::all();

        for ($i = 0; $i < 20; $i++)
        {
            /* pode ocorrer erros de contraint */
            try {
                $doencas->random(1)->tags()->attach($tags->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }
        }
    }
}
