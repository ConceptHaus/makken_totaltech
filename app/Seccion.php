<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
  public $table = 'seccion';

  protected $fillable = [
    'id_seccion',
    'nombre',
    'clase'
  ];
    //
    public function texto(){
      return $this->hasMany('App\Texto', 'id_seccion');
    }
}
