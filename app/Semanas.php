<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semanas extends Model
{
    public $table = 'semanas';

    protected $fillable = [
        'id_semana','nombre', 'rango_fecha'
    ];

    public function ganador(){
        return $this->belongsTo('App\Ganador','id_ganador');
    }
}
