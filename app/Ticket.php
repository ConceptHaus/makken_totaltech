<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $table = 'tickets';

    protected $fillable = [
      'id_ticket',
      'id_usuario',
      'no_ticket',
      'monto',
      'id_establecimiento',
      'url'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_usuario','id');
    }

    public function establecimiento(){
      return $this->belongsTo('App\Establecimiento', 'id_establecimiento','id_establecimiento');
    }

    public function ganador(){
        return $this->hasOne('App\Ganador','id_ticket','id_ticket');
    }

    public function scopeGetAllTickets($query){
        return $query->with('user')
                    ->with('establecimiento')
                    ->with('ganador')->get();
    }
    public function scopeGetAllTicketsFromUser($query,$id){
        return $query->with('user')
                    ->with('establecimiento')
                    ->with('ganador')
                    ->where('id_usuario',$id)->get();
    }


}
