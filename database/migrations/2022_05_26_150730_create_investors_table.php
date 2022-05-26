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
            $table->char('id_card_number', 50);
            $table->char('id_card_photo', 50);
            $table->char('npwp_photo', 50);
            $table->char('phone_number', 20);
            $table->char('address_1');
            $table->char('address_2')->nullable();
            $table->char('province_id');
            $table->char('city_id');
            $table->char('district_id');
            $table->char('village_id');
            $table->integer('annual_income_id');
            $table->integer('reason_to_invest_id');
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
