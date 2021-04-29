<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('famille_id')->unsigned();
            $table->integer('categorie_id')->unsigned();

            $table->foreign('famille_id')->references('id')->on('familles')
            ->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('categorie_id')->references('id')->on('categories')
            ->onDelete('restrict')->onUpdate('restrict');

            $table->date('date');
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
        Schema::dropIfExists('donations');
    }
}
