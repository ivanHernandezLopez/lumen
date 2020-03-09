<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('id_licencia');
            $table->string('usuario_que_registro');
            $table->string('no_licencia')->unique()->notNullable();;
            $table->string('clasificacion1');
            $table->date('fecha_levantamiento');
            $table->string('nombre_denominacion_comercial');
            $table->string('calle');
            $table->string('no_exterior');
            $table->string('no_interior');
            $table->string('no_empleados');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('codigo');
            $table->string('email');
            $table->string('telefono');
            $table->string('rfc');
            $table->string('propietario');
            $table->string('curp');
            $table->string('municipio');
            $table->string('estado');
            $table->string('factibilidad_giro');
            $table->string('vo_bo_proteccion');
            $table->string('dictamen_uso_suelo');
            $table->string('clave_catastral');
            $table->string('clasificacion');
            $table->string('tipo_giro');
            $table->string('tipo_inmueble');
            $table->string('propietario_inmueble');
            $table->string('domicilio_fiscal');
            $table->string('no_exterior_f');
            $table->string('no_interior_f');
            $table->string('colonia_f');
            $table->string('delegacion_f');
            $table->string('codigo_postal_f');
            $table->string('municipio_f');
            $table->string('estado_f');
            $table->string('tramite');
            $table->string('ctividad');
            $table->string('horario');
            $table->string('importe_pagado');
            $table->string('tiempo_extra');
            $table->string('lic_estatal_alcoholes');
            $table->string('codigo_1');
            $table->string('descripcion_1');
            $table->string('codigo_2');
            $table->string('descripcion_2');
            $table->string('codigo_3');
            $table->string('descripcion_3');
            $table->string('codigo_4');
            $table->string('descripcion_4');
            $table->string('codigo_5');
            $table->string('descripcion_5');
            $table->string('codigo_6');
            $table->string('descripcion_6');
            $table->string('leyenda_1');
            $table->string('leyenda_2');
            $table->string('leyenda_3');
            $table->string('observacione');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
