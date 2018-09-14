<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ganador extends Model
{
    //
    public $table = 'ganador';

    protected $fillable = [
        'id_ganador','id_usuario', 'id_ticket', 'id_premio'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_usuario');
    }
    public function ticket(){
        return $this->belongsTo('App\Ticket','id_ticket');
    }
    public function premio(){
      return $this->hasOne('App\Premio', 'id_premio');
    }
}
