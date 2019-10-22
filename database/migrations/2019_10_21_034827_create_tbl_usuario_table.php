<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('vchNombre');
            $table->string('vchAPaterno');
            $table->string('vchAMaterno');
            $table->string('vchDoc')->nullable($value = true);
            $table->string('vchTel')->nullable($value = true);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('vchDir')->nullable($value = true);
            $table->rememberToken(); $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usuario');
    }
}
