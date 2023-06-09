<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('address');
            $table->integer('price')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('lot_size')->nullable();
            $table->string('elevator');
            $table->string('fireplace');
            $table->string('gated');
            $table->string('garden');
            $table->string('balcony');
            $table->string('terrace');
            $table->string('pool');
            $table->string('basement');
            $table->string('furnished');
            $table->string('featured_image');
            $table->string('multilple_images');
            $table->longText('description')->nullable();
        
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
        Schema::dropIfExists('properties');
    }
}
