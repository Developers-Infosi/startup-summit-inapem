<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramRegistraiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_registraios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_registrations');
            $table->foreign('fk_registrations')->references('id')->on('registrations')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_activity_program');
            $table->foreign('fk_activity_program')->references('id')->on('activity_programs')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
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
        Schema::dropIfExists('program_registraios');
    }
}
