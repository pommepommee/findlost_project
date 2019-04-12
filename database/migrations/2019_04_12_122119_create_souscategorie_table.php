<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouscategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souscategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameSouscat',20);
            $table->timestamps();
        });

        Schema::table('souscategories', function($table) {
          $table->unsignedBigInteger('cat_id');
          $table->foreign('cat_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('souscategorie');
    }
}
