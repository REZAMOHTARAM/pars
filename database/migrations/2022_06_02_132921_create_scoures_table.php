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
        Schema::create('scoures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('bunch_id');
            $table->foreign('bunch_id')->references('id')->on('bunches')->onDelete('cascade');
            $table->unsignedBigInteger('subbunch_id');
            $table->foreign('subbunch_id')->references('id')->on('subbunches')->onDelete('cascade');
            $table->unsignedBigInteger('subsetbunch_id');
            $table->foreign('subsetbunch_id')->references('id')->on('subsetbunches')->onDelete('cascade');
            $table->unsignedBigInteger('questionbunch_id');
            $table->foreign('questionbunch_id')->references('id')->on('questionbunches')->onDelete('cascade');
            $table->string('scoure');
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
        Schema::dropIfExists('scoures');
    }
};
