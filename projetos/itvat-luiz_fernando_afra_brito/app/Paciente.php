<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'id',
        'sangue'
    ];

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }
}
