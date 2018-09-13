<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = 'users';

    protected $fillable = [
        'id_usuario','nombre','apellido', 'correo', 'password','telefono'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tickets(){
      return $this->hasMany('App\Ticket', 'id_ticket');
    }

    public function direccion(){
      return $this->hasOne('App\Direccion', 'id_direccion');
    }

    public function ganador(){
      return $this->hasOne('App\Ganador', 'id_ganador');
    }
}
