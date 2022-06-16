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
        Schema::create('investors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->string('name');
            $table->char('id_card_number', 50);
            $table->string('id_card_photo', 255);
            $table->string('npwp_photo', 255);
            $table->char('phone_number', 20);
            $table->string('referral_name', 255);
            $table->char('address');
            $table->foreignId('country_id')->constrained();
            $table->foreignId('province_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->uuid('annual_income_id');
            $table->uuid('investing_reason_id');
            $table->foreign('annual_income_id')->references('id')->on('annual_incomes');
            $table->foreign('investing_reason_id')->references('id')->on('investing_reasons');
            $table->boolean('is_individual_investor');
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
        Schema::dropIfExists('investors');
    }
};
