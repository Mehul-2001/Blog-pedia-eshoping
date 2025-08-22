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
        Schema::create('gadgetdetails', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('blogger_id')->unsigned();
            $table->foreign('blogger_id')->references('id')->on('blogger_details');

            $table->integer('seller_post_id')->unsigned();
            $table->foreign('seller_post_id')->references('id')->on('post_details');
           
            $table->string('gadget_name');
            $table->string('gadget_price');
           
            $table->longText('gadget_description');
            $table->string('gadget_image');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgetdetails');
    }
};
