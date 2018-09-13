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

    public function ganador(){
        return $this->belongsTo('App\User','id_usuario');
    }

    public function premio(){
      return $this->hasMany('App\Premio', 'id_premio');
    }
}
