<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

use DB;

class ReportExport implements FromCollection, WithHeadings
{
    use Exportable;
    public function __construct($headings){

        $this->headings = $headings;

    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('users')
                    ->leftjoin('direccion','direccion.id_usuario','users.id')
                    ->leftjoin('tickets','tickets.id_usuario','=','users.id')
                    ->leftjoin('ganador','ganador.id_usuario','=','users.id')
                    ->leftjoin('premio','premio.id_premio','ganador.id_premio')
                    ->leftjoin('establecimiento','establecimiento.id_establecimiento','tickets.id_establecimiento')
                    ->select('users.nombre as nombre','users.apellido as apellido','users.correo as email','users.telefono','direccion.cp','direccion.estado','premio.nombre as premio','tickets.no_ticket','tickets.monto as monto' ,'establecimiento.nombre as nombre_establecimiento','users.registro_admin','tickets.created_at as fecha_de_registro')
                    ->get();
    }

    public function headings():array
    {
        return $this->headings;
    }
}
