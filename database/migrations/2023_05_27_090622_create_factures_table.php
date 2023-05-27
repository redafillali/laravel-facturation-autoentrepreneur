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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('Numero');
            $table->string('Date');
            $table->string('Montant');
            $table->string('Remise');
            $table->string('type_remise');
            $table->string('Path');
            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->unsignedBigInteger('compte_id');
            $table->foreign('compte_id')->references('id')->on('comptes');
            $table->unsignedBigInteger('devi_id');
            $table->foreign('devi_id')->references('id')->on('devis');
            $table->unsignedBigInteger('bon_id');
            $table->foreign('bon_id')->references('id')->on('bons');
            $table->string('etat'); // 0: non payé, 1: payé
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
        Schema::dropIfExists('factures');
    }
};
