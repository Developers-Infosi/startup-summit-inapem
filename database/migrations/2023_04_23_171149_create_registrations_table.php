<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('payment')->nullable();
            $table->string('company_name');
            $table->string('fax');
            $table->string('address');
            $table->string('phone');
            $table->string('postal_code');
            $table->string('contact_person');
            $table->string('city');
            $table->string('industry_sector');
            $table->string('nif');
            $table->string('exhibition_product');
            $table->string('country');
            $table->string('email');
            $table->string('phone_number');
            $table->string('site')->nullable();

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
        Schema::dropIfExists('registrations');
    }
}
