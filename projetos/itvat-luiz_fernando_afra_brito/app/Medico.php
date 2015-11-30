<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

    protected $fillable = [
        'id',
        'crm'
    ];

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }

    public function clinicas()
    {
         return $this->belongsToMany('App\Clinica')->withTimestamps();
    }

    public function areas()
    {
        return $this->belongsToMany('App\Area')->withTimestamps();
    }
}
