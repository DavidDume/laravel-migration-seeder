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
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('train_id');
            $table->dropColumn('departure');
            $table->dropColumn('arrival');

            $table->time('departure_time');
            $table->time('arrival_time');
            $table->unsignedSmallInteger('trainId');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};
