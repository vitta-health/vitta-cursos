<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    protected $table = 'farmacias';

    protected $fillable = [
        'nome',
        'endereco'
    ];

    public function remedios()
    {
        return $this->belongstoMany('App\Remedio')->withTimestamps();
    }
}
