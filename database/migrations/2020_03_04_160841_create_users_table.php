<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('iniciales');
            $table->string('user_name')->nullable();
            $table->string('user_password_hash');
            $table->string('user_tipo')->nullable();
            $table->string('codigo_cliente_pertenece')->nullable();
            $table->string('user_email')->unique()->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
