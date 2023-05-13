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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('departure_city', 50);
            $table->string('arrival_city', 50);
            $table->unsignedTinyInteger('train_id');
            $table->date('date');
            $table->date('departure');
            $table->date('arrival');
            $table->boolean('on_time');
            
            $table->boolean('is_cancelled');
            $table->unsignedTinyInteger('num_carriages');
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
        Schema::dropIfExists('trains');
    }
};
