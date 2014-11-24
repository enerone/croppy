<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxonomiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('taxonomias', function(Blueprint $table){
            $table->increments('id');
            $table->string('taxonomia');
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
        Schema::drop('taxonomias');
    }

}
