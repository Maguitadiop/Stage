<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationMonnaies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_monnaies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('famille_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->integer('monnaie_id')->unsigned();
            $table->string('devise');
            $table->integer('montant');
            $table->timestamps();

            $table->foreign('famille_id')->references('id')->on('familles')
            ->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('restrict')->onUpdate('restrict');
            
            $table->foreign('monnaie_id')->references('id')->on('monnaies')
            ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_monnaies');
    }
}
