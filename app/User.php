<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\ResetsPasswords;

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
        'id_usuario','nombre','apellido', 'correo', 'password','telefono','registro_admin', 'id_promo'
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
      return $this->hasMany('App\Ticket', 'id_usuario','id');
    }

    public function tipoPromo(){
      return $this->belongsTo('App\TipoPromo', 'id_promo','id_promo');
    }

    public function direccion(){
      return $this->hasOne('App\Direccion', 'id_usuario','id');
    }

    public function ganador(){
      return $this->hasMany('App\Ganador', 'id_usuario','id');
    }

    

    public function scopegetAllUsers($query){
      return $query->with('tickets')
                    ->with('direccion')
                    ->with('ganador')->get();
    }

    public function scopegetUser($query,$id){
      return $query->with('tickets.establecimiento')
                   ->with('direccion')
                   ->with('ganador')
                   ->where('id',$id)->first();
    }

    public function getEmailForPasswordReset()
    {
        return $this->correo;
    }
}
