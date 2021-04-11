<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalTicketUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festival_ticket_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('festival_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('number_of_tickets');
            $table->string('photo');
            $table->integer('start_day');
            $table->integer('end_day');
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
        Schema::dropIfExists('festival_ticket_users');
    }
}
