<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
  public $table = 'texto';

  protected $fillable = [
    'id_texto',
    'id_seccion',
    'contenido'
  ];
    //
    public function seccion(){
        return $this->belongsTo('App\Seccion','id_seccion');
    }
}
