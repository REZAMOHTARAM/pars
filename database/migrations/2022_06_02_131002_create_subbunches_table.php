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
        Schema::create('subbunches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('bunch_id');
            $table->foreign('bunch_id')->references('id')->on('bunches')->onDelete('cascade');
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
        Schema::dropIfExists('subbunches');
    }
};
