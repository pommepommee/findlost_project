<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('description',500);
            // $table->timestamps('object_found_at');
            $table->boolean('verif')->default(false);
            $table->timestamps();
        });

        Schema::table('objects', function($table) {
          $table->unsignedBigInteger('sal_id_stocke');
          $table->foreign('sal_id_stocke')->references('id')->on('salles');
          $table->unsignedBigInteger('sal_id_trouve');
          $table->foreign('sal_id_trouve')->references('id')->on('salles');
          $table->unsignedBigInteger('souscat_id');
          $table->foreign('souscat_id')->references('id')->on('souscategories');
          $table->unsignedBigInteger('etatobj_id');
          $table->foreign('etatobj_id')->references('id')->on('etatobjets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
    }
}
