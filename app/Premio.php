<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
  public $table = 'premio';

  protected $fillable = [
    'id_premio','nombre', 'cantidad'
  ];
    //
    public function ganador(){
        return $this->belongsTo('App\Ganador','id_ganador');
    }
}
