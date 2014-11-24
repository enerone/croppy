<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspeciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('especies', function(Blueprint $table){
            $table->increments('id');
            $table->string('especie');
            $table->string('cientifico');
            $table->text('decripcion');
            $table->string('periodo');
            $table->string('anticipación_aviso');
            $table->string('imagenes');
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
        Schema::drop('especies');
	}

}
