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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('event_type')->unsigned();
            $table->string('host');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->text('message');
            $table->string('location_name');
            $table->string('location_address');
            $table->string('location_address2')->nullable();
            $table->string('location_city');
            $table->string('location_state');
            $table->string('location_zip');
            $table->string('location_phone')->nullable();
            $table->string('location_email')->nullable();
            $table->string('location_url')->nullable();
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
        Schema::dropIfExists('events');
    }
};
