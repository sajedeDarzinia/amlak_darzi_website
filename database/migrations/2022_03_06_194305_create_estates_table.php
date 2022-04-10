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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('img');
            $table->string('phone_number');
            $table->string('properties');
            $table->float('area');
            $table->string('price');
            $table->integer('bed_count');
            $table->boolean('status')->default(1);
            $table->boolean('commercial')->default(0);
            $table->boolean('residential')->default(0);
            $table->boolean('agricultural')->default(0);
            $table->boolean('residential_commercial')->default(0);
            $table->boolean('store')->default(0);
            $table->boolean('passage')->default(0);
            $table->boolean('villa')->default(0);
            $table->boolean('apartment')->default(0);
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
        Schema::dropIfExists('estates');
    }
};
