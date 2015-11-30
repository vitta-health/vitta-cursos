<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'nome'
    ];

    public function areas()
    {
        return $this->morphedByMany('App\Area', 'taggables')->withTimestamps();
    }

    public function remedios()
    {
        return $this->morphedByMany('App\Remedio', 'taggables')->withTimestamps();
    }

    public function doencas()
    {
        return $this->morphedByMany('App\Doenca', 'taggables')->withTimestamps();
    }
}
