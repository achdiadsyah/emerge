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
            $table->foreignId('user_id');
            $table->char('id_card_number', 50);
            $table->char('id_card_photo', 50);
            $table->char('npwp_photo', 50);
            $table->char('phone_number', 20);
            $table->char('address');
            $table->foreignId('province_id');
            $table->foreignId('city_id');
            $table->foreignId('district_id');
            $table->foreignId('village_id');
            $table->foreignId('annual_income_id');
            $table->foreignId('reason_to_invest_id');
            $table->boolean('individual_investor');
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
