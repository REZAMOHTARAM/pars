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
        Schema::create('questionbunches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label');
            $table->unsignedBigInteger('subsetbunch_id');
            $table->foreign('subsetbunch_id')->references('id')->on('subsetbunches')->onDelete('cascade');
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
        Schema::dropIfExists('questionbunches');
    }
};
