<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table = 'clinicas';

    protected $fillable = [
        'nome',
        'endereco'
    ];

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }

    public function medicos()
    {
        return $this->belongsToMany('App\Medico')->withTimestamps();
    }
}
