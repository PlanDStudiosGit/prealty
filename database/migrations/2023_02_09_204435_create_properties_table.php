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

             // living Room  
             $table->integer('living_room_area')->nullable();
             $table->integer('living_room_length')->nullable();
             $table->integer('living_room_width')->nullable();
             $table->enum('living_room_level', ['first', 'second', 'basement']);
             $table->string('living_room_features')->nullable();
 
              // Dining Room 
              $table->integer('dining_room_area')->nullable();
              $table->integer('dining_room_length')->nullable();
              $table->integer('dining_room_width')->nullable();
              $table->enum('dining_room_level', ['first', 'second', 'basement']);
              $table->string('dining_room_features')->nullable();
  
              // family Room 
              $table->integer('family_room_area')->nullable();
              $table->integer('family_room_length')->nullable();
              $table->integer('family_room_width')->nullable();
              $table->enum('family_room_level', ['first', 'second', 'basement']);
              $table->string('family_room_features')->nullable();
 
              // Basement 
              $table->integer('basement_area')->nullable();
              $table->integer('basement_length')->nullable();
              $table->integer('basement_width')->nullable();
              $table->string('basement_features')->nullable();
 
             // Kitchen 
             $table->integer('kitchen_area')->nullable();
             $table->integer('kitchen_length')->nullable();
             $table->integer('kitchen_width')->nullable();
             $table->enum('kitchen_level', ['first', 'second', 'basement']);
             $table->string('kitchen_features')->nullable();
 
             // bathroom 
             $table->integer('bathroom')->nullable();
             $table->integer('half_bathrooms')->nullable();
             $table->integer('master_bathroom')->nullable();

                // garage 
            $table->enum('has_garage', ['Y', 'N']);
            $table->enum('open_parking', ['Y', 'N']);
            $table->integer('total_garage')->nullable();
            $table->integer('covered_garage')->nullable();
            $table->integer('total_parking')->nullable();
            $table->integer('parking_features')->nullable();


            $table->string('featured_image');
            $table->longText('description')->nullable();
            $table->enum('hot_properties', ['Y', 'N']);
            $table->enum('status', ['0','1','2','3','4']);


            

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
