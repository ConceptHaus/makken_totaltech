<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $table = 'tickets';

    protected $fillable = [

    ];

    public function user(){
        return $this->belongsTo('App\User','id_usuario');
    }

    public function scopeGetAllTickets($query){
        return $query->with('user')->get();
    }
}
