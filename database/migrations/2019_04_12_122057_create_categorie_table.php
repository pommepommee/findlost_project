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
            $table->string('nameCat',20);
            $table->string('name',100);
            $table->string('description',500);
            // $table->timestamps('object_found_at');
            $table->boolean('verif')->default(false);
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
