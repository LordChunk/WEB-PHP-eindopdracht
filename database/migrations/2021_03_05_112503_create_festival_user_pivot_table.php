<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festival_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('festival_id');
            $table->foreignId('user_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
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
        Schema::dropIfExists('festival_user');
    }
}
