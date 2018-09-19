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
        return $this->belongsTo('App\User','id','id_usuario');
    }
    public function ticket(){
        return $this->belongsTo('App\Ticket','id_ticket');
    }
    public function premio(){
      return $this->hasOne('App\Premio', 'id_premio');
    }
    public function semanas(){
        return $this->hasOne('App\Semanas', 'id_semana');
    }

    public function scopegetAllGanadores($query){
        return $query->with('user')
                     ->with('establecimiento')
                     ->with('ganador')->get();
    }
}
