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
        Schema::create('subsetbunches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('subbunch_id');
            $table->foreign('subbunch_id')->references('id')->on('subbunches')->onDelete('cascade');
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
        Schema::dropIfExists('subsetbunches');
    }
};
