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
        Schema::create('startups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 255);
            $table->string('logo', 255);
            $table->string('website', 255);
            $table->uuid('startup_category_id');
            $table->foreign('startup_category_id')->references('id')->on('startup_categories');
            $table->foreignId('country_id')->constrained();
            $table->longText('description');
            $table->json('document');
            $table->string('video_teaser', 255);
            $table->string('product_name', 255);
            $table->longText('product_detail');
            $table->string('target_market', 255);
            $table->json('photos');
            $table->integer('valuation');
            $table->integer('fundraising');
            $table->longText('fundraising_detail');
            $table->longText('about_founders');
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
        Schema::dropIfExists('startups');
    }
};
