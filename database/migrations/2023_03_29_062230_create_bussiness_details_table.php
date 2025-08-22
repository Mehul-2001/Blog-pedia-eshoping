<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bussiness_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blogger_id')->unsigned();
            $table->foreign('blogger_id')->references('id')->on('blogger_details');
            $table->string('bussiness_category');
            $table->string('bussiness_name');
            $table->string('bussiness_email');
            $table->string('bussiness_phone');
            $table->string('bussiness_state');
            $table->string('bussiness_city');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twiter');
            $table->longText('bussiness_description');
            $table->longText('bussiness_terms');
            $table->string('bussiness_image');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness_details');
    }
};
