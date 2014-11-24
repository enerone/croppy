<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('cultivos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_tipo_cultivo');
            $table->integer('id_especie');
            $table->enum('lugar_cultivo', array('interior','exterior'));
            $table->enum('starter', array('semilla','esqueje'));
            $table->integer('id_subtipo');
            $table->integer('id_sustrato');
            $table->integer('id_taxonomia');
            $table->integer('id_variedades');
            $table->text('descripcion');
            $table->string('temporada');
            $table->string('remember_token');
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
        Schema::drop('cultivos');
	}

}
