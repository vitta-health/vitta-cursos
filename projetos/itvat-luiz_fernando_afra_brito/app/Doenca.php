<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon;

class Doenca extends Model
{
    protected $table = 'doencas';

    protected $fillable = [
        'nome_conhecido',
        'nome_cientifico',
        'descricao'
    ];

    public function diagnosticoDe()
    {
        $table = 'agendamentos';

        return DB::table($table)
            ->join('agendamento_doenca', function($join) use($table)
            {
                $join->on($table . '.paciente_id', '=', 'agendamento_doenca.paciente_id');
                $join->on($table . '.data_hora', '=', 'agendamento_doenca.data_hora');
            })
            ->join('doencas', $this->id, '=', 'doencas.id')
            ->select('agendamentos.*')
            ->distinct()
            ->get();
    }

    public function attachAgendamento($paciente_id, $data_hora)
    {
        $now = Carbon\Carbon::create();

        DB::table('agendamento_doenca')->insert([
            'paciente_id' => $paciente_id,
            'data_hora' => $data_hora,
            'doenca_id' => $this->id,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }

    public function remediosRelacionados()
    {
        return $this->belongsToMany('App\Remedio')->withTimestamps();
    }

    public function tags()
    {
        return $this->MorphToMany('App\Tag', 'taggables')->withTimestamps();
    }
}
