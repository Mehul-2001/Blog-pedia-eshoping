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
        Schema::create('post_details', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('blogger_id')->unsigned();
            $table->foreign('blogger_id')->references('id')->on('blogger_details')->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
           
            $table->string('post_name');
            $table->string('post_topic');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twiter');
            $table->longText('post_description');
            
            $table->string('post_image');

            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_details');
    }
};
