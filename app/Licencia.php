<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licencia extends Model 
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_licencia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_que_registro',
        'no_licencia',
        'clasificacion1',
        'fecha_levantamiento',
        'nombre_denominacion_comercial',
        'calle',
        'no_exterior',
        'no_interior',
        'no_empleados',
        'colonia',
        'delegacion',
        'codigo',
        'email',
        'telefono',
        'rfc',
        'propietario',
        'curp',
        'municipio',
        'estado',
        'factibilidad_giro',
        'vo_bo_proteccion',
        'dictamen_uso_suelo',
        'clave_catastral',
        'clasificacion',
        'tipo_giro',
        'tipo_inmueble',
        'propietario_inmueble',
        'domicilio_fiscal',
        'no_exterior_f',
        'no_interior_f',
        'colonia_f',
        'delegacion_f',
        'codigo_postal_f',
        'municipio_f',
        'estado_f',
        'tramite',
        'ctividad',
        'horario',
        'importe_pagado',
        'tiempo_extra',
        'lic_estatal_alcoholes',
        'codigo_1',
        'descripcion_1',
        'codigo_2',
        'descripcion_2',
        'codigo_3',
        'descripcion_3',
        'codigo_4',
        'descripcion_4',
        'codigo_5',
        'descripcion_5',
        'codigo_6',
        'descripcion_6',
        'leyenda_1',
        'leyenda_2',
        'leyenda_3',
        'observacione'
    ];

}
