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
        Schema::create('facture_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')->references('id')->on('factures');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->text('Description');
            $table->string('Quantite');
            $table->string('Prix');
            $table->string('Remise');
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
        Schema::dropIfExists('facture_service');
    }
};