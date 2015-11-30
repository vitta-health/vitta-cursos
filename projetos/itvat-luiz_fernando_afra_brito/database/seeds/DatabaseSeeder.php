<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(MedicosTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(ClinicasTableSeeder::class);
        $this->call(ClinicaMedicoTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(AreaMedicoTableSeeder::class);
        $this->call(AgendamentosTableSeeder::class);
        $this->call(HorariosTableSeeder::class);
        $this->call(DoencasTableSeeder::class);
        $this->call(RemediosTableSeeder::class);
        $this->call(FarmaciasTableSeeder::class);
        $this->call(AgendamentoDoencaTableSeeder::class);
        $this->call(DoencaRemedioTableSeeder::class);
        $this->call(FarmaciaRemedioTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(AreaTagTableSeeder::class);
        $this->call(RemedioTagTableSeeder::class);
        $this->call(DoencaTagTableSeeder::class);

        Model::reguard();
    }
}
