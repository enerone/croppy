<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('pasos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_guia');
            $table->string('paso');
            $table->text('instruccion');
            $table->text('observaciones');
            $table->integer('anticipación_aviso');
            $table->text('aviso');
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
        Schema::drop('pasos');
	}

}
