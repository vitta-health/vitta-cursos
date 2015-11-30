<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'nome'
    ];

    public function medicos()
    {
        return $this->belongsToMany('App\Medico')->withTimestamps();
    }

    public function tags()
    {
        return $this->MorphToMany('App\Tag', 'taggables')->withTimestamps();
    }
}
