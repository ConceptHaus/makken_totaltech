<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPromo extends Model
{
    public $table = 'tipo_promo';
    protected $primaryKey = 'id_promo';
    protected $fillable = [
        'id_promo','nombre'
    ];

}
