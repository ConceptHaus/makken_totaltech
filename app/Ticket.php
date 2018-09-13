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
        return $this->belongsTo('App\User','id_usuario');
    }

    public function establecimiento(){
      return $this->belongsTo('App\Establecimiento', 'id_establecimiento');
    }

    public function scopeGetAllTickets($query){
        return $query->with('user')->get();
    }


}
