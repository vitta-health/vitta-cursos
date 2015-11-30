<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remedio extends Model
{
    protected $table = 'remedios';

    protected $fillable = [
        'nome'
    ];

    public function doencasRelacionadas()
    {
        return $this->belongsToMany('App\Doenca')->withTimestamps();
    }

    public function farmacias()
    {
        return $this->belongsToMany('App\Farmacia')->withTimestamps();
    }

    public function tags()
    {
        return $this->MorphToMany('App\Tag', 'taggables')->withTimestamps();
    }
}
