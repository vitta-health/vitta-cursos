<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon;

class Agendamento extends Model
{
    protected $table = 'agendamentos';

    protected $fillable = [
        'paciente_id',
        'data_hora',
        'medico_id',
        'clinica_id',
        'status',
        'obs'
    ];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function clinica()
    {
         return $this->belongsto('App\Clinica');
    }

    public function diagnostico()
    {
        $pivot_table = 'agendamento_doenca';

        return DB::table('doencas')
            ->join('agendamento_doenca', 'doencas.id', '=', 'agendamento_doenca.doenca_id')
            ->join('agendamentos', function($join) use($pivot_table)
            {
                $join->on($pivot_table . '.paciente_id', '=', $this->paciente_id);
                $join->on($pivot_table . '.data_hora', '=', $this->data_hora);
            })
            ->select('doencas.*')
            ->distinct()
            ->get();
    }

    public function attachDoenca($doenca_id)
    {
        $now = Carbon\Carbon::create();

        DB::table('agendamento_doenca')->insert([
            'paciente_id' => $this->paciente_id,
            'data_hora' => $this->data_hora,
            'doenca_id' => $doenca_id,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }

    public function scopeDePaciente($query, $paciente_id)
    {
        return $query->where('paciente_id', $paciente_id);
    }

    public function scopeDeMedico($query, $medico_id)
    {
        return $query->where('medico_id', $medico_id);
    }
}
