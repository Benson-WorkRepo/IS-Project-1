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
        Schema::create('customercredentials', function (Blueprint $table) {
            $table->string('fName');
            $table->string('lName');
            $table->integer('phone');
            $table->string('email');
            $table->integer('ID');
            $table->string('patientnumber');
            $table->boolean('pregnancyStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customercredentials');
    }
};
