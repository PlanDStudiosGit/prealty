<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrooms', function (Blueprint $table) {
            $table->id();
            $table->integer('bedroom_area')->nullable();
            $table->integer('bedroom_length')->nullable();
            $table->integer('bedroom_width')->nullable();
            $table->enum('bedroom_level', ['first', 'second', 'basement']);
            $table->string('bedroom_features')->nullable();
            $table->string('is_master')->default('1');
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
        Schema::dropIfExists('bedrooms');
    }
}
