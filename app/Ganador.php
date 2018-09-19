<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ganador extends Model
{
    //
    public $table = 'ganador';

    protected $fillable = [
        'id_ganador','id_usuario', 'id_ticket', 'id_premio', 'id_semana'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_usuario','id');
    }
    public function ticket(){
        return $this->belongsTo('App\Ticket','id_ticket', 'id_ticket');
    }
    public function premio(){
      return $this->hasOne('App\Premio', 'id_premio');
    }
    public function semanas(){
        return $this->hasOne('App\Semanas', 'id_semana');
    }

    public function scopegetAllGanadores($query){
        return $query->with('user')
                     ->with('ticket')
                     // ->with('premio')
                     ->with('semanas')->get();
    }

    // public function ganadoresPorSemana ($query) {
    //   $semana1 = $query->where('id_semana', '=', "1");
    //
    //   return $semana1;
    // }
}
