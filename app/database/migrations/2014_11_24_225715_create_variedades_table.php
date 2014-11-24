<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariedadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('variedades', function(Blueprint $table){
            $table->increments('id');
            $table->string('variedad');
            $table->integer('id_especie');
            $table->integer('id_taxonomia');
            $table->text('descripcion');
            $table->text('imagenes');
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
        Schema::drop('variedades');
    }

}
