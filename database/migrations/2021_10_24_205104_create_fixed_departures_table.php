<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedDeparturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_departures', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->string('flight_no');
            $table->string('departure_from');
            $table->string('arrival_to');
            $table->string('departure_time');
            $table->string('arrival_time')->nullable();
            $table->string('departure_date');
            $table->string('arrival_date')->nullable();
            $table->string('journey_type');
            $table->string('flight_type');
            $table->longText('baggage_policy');
            $table->string('fd_id');
            $table->string('sector');
            $table->string('international_or_domestic');
            $table->string('adult_fare');
            $table->string('child_fare')->default(0);
            $table->string('service_fee');
            $table->string('fare_type');
            $table->string('rescheduling_fee');
            $table->string('cancellation_fee');
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
        Schema::dropIfExists('fixed_departures');
    }
}
