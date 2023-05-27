<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('Email');
            $table->unsignedBigInteger('compte_id');
            $table->foreign('compte_id')->references('id')->on('comptes');
            $table->string('etat');
            $table->softDeletes();
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
        Schema::dropIfExists('contacts');
    }
};
