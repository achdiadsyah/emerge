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
        Schema::create('startup_founders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('startup_id');
            $table->foreign('startup_id')->references('id')->on('startups');
            $table->string('name', 255);
            $table->string('position');
            $table->string('linkedin', 255);
            $table->string('instagram', 255);
            $table->string('twitter', 255);
            $table->string('facebook', 255);
            $table->string('photo', 255);
            $table->longText('about');
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
        Schema::dropIfExists('startup_founders');
    }
};
