<?php

use Illuminate\Database\Seeder;

class AreaTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = App\Area::all();
        $tags = App\Tag::all();

        for ($i = 0; $i < 30; $i++)
        {
            /* pode ocorrer erros de contraint */
            try {
                $areas->random(1)->tags()->attach($tags->random(1)->id);
            } catch(\Exception $e) {
                var_dump($e->getMessage());
            }
        }
    }
}
