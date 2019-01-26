<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('sous_titre');
            $table->string('image')->nullable();
            $table->date('publication')->nullable();
            $table->longText('description');
            $table->integer('categorie_actualite_id')->unsigned()->index();
            $table->foreign('categorie_actualite_id')->references('id')->on('categorie_actualites')->onDelete('cascade');
            $table->boolean('statut')->default(true);
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
        Schema::dropIfExists('actualites');
    }
}
