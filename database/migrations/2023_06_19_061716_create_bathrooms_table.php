<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBathroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bathrooms', function (Blueprint $table) {
            $table->id();
            $table->integer('bathroom_area')->nullable();
            $table->integer('bathroom_length')->nullable();
            $table->integer('bathroom_width')->nullable();
            $table->enum('bathroom_level', ['first', 'second', 'basement']);
            $table->string('bathroom_features')->nullable();
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
        Schema::dropIfExists('bathrooms');
    }
}
