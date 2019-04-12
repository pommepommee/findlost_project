<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD:findlost/database/migrations/2019_04_12_122057_create_categorie_table.php
            $table->string('nameCat',20);
=======
            $table->string('name',100);
            $table->string('description',500);
            // $table->timestamps('object_found_at');
            $table->boolean('verif')->default(  false);
>>>>>>> de031424cf003769a7a607346ae3767555a63683:findlost/database/migrations/2019_04_10_210816_create_objects_table.php
            $table->timestamps();
        });

        Schema::table('objects', function($table) {
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
        Schema::dropIfExists('categorie');
    }
}
