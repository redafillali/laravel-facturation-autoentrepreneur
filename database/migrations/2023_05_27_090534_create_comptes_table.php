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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom de la société');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('Email');
            $table->string('Siteweb');
            $table->string('Logo');
            $table->string('ICE');
            $table->string('etat');
            $table->timestamps();
            // soft delete
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
};
