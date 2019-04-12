<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameSal',20);
      			$table->string('descriptionSal',200);
            $table->timestamps();
        });

        Schema::table('salles', function($table) {
          $table->unsignedBigInteger('bat_id');
          $table->foreign('bat_id')->references('id')->on('batiment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salle');
    }
}
