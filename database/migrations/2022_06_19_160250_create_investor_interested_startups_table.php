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
        Schema::create('investor_interested_startups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('investor_id');
            $table->foreign('investor_id')->references('id')->on('investors');
            $table->uuid('startup_id');
            $table->foreign('startup_id')->references('id')->on('startups');
            $table->string('status', 36);
            $table->string('mom_document_url', 150);
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
        Schema::dropIfExists('investor_interested_startups');
    }
};
