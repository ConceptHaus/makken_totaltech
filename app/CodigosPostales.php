<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodigosPostales extends Model
{
    protected $table = 'codigosPostales';
    protected $primaryKey = 'CodigoPostal';
    public $timestamps  = false;

    protected $fillable = [
        'region_id',
        'CodigoPostal',
        'Municipio',
        'Estado',
        'estado_csa_id'
    ];


    public function scopeOfEstado($query, $estado)
    {
        return $query->where('Estado', '=', $estado);
    }

    public function region()
    {
        return $this->hasOne('App\Models\Regiones', 'region_id','region_id');
    }

}
