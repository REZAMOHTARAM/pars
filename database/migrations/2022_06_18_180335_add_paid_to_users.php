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
        Schema::table('users', function (Blueprint $table) {
            $table->string('melli_number')->after('name');
            $table->string('phone_number')->after('melli_number');
            $table->string('city')->after('email');
            $table->string('gender')->after('city');
            $table->string('title_job')->after('gender');
            $table->string('code_job')->after('title_job');
            $table->string('office')->after('code_job');
            $table->string('shift')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('melli_number');
            $table->dropColumn('phone_number');
            $table->dropColumn('city');
            $table->dropColumn('gender');
            $table->dropColumn('title_job');
            $table->dropColumn('code_job');
            $table->dropColumn('office');
            $table->dropColumn('shift');
        });
    }
};
