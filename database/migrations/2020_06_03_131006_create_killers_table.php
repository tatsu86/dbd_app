<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKillersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('killers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('explanation')->nullable();
            $table->integer('abillity_id')->nullable();
            $table->string('movie')->nullable();
            $table->integer('perk_id_1')->nullable();
            $table->integer('perk_id_2')->nullable();
            $table->integer('perk_id_3')->nullable();
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
        Schema::dropIfExists('killers');
    }
}
