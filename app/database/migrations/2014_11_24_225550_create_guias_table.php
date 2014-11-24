<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('guias', function(Blueprint $table){
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('imagenes');
            $table->integer('id_autor');
            $table->integer('votos');
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
        Schema::drop('guias');
	}

}
