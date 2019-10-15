<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    public $table = 'direccion';

    protected $fillable = [
      'id_direccion',
      'id_usuario',
      'cp',
      'estado',
      'municipio',
      'colonia',
      'calle'
    ];

    public function user(){
        return $this->belongsTo('App\User','id','id_usuario');
    }
}
