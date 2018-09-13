<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    public $table = 'establecimiento';

    protected $fillable = [
        'id_establecimiento','nombre'
    ];

    public function tickets(){
        return $this->hasMany('App\Ticket','id_ticket');
    }
}
