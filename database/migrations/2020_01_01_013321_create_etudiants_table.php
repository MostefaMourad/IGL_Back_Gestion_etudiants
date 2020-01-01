<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->char('nom',25);
            $table->char('prenom',25);
            $table->char('niveau',3);
            $table->char('section',1)->nullable();
            $table->integer('groupe')->nullable();
            $table->char('specialite',3)->nullable();
            $table->date('date_naissance');
            $table->string('adresse',100);
            $table->char('indicateur_promo',1);
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
        Schema::dropIfExists('etudiants');
    }
}
