<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('partner_id');
            $table->json('customer_name');
            $table->json('customer_dob');
            $table->string('pax');
            $table->string('airline');
            $table->string('flight_no');
            $table->string('departure_from');
            $table->string('arrival_to');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('journey_type');
            $table->string('flight_type');
            $table->string('baggage_policy');
            $table->string('fd_id');
            $table->string('sector');
            $table->string('international_or_domestic');
            $table->string('adult_fare');
            $table->string('child_fare');
            $table->string('service_fee');
            $table->string('fare_type');
            $table->string('rescheduling_fee');
            $table->string('cancellation_fee');
            $table->string('price');
            $table->string('amount');
            $table->string('status');
            $table->string('transaction_id');
            $table->string('mode');
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
        Schema::dropIfExists('payments');
    }
}
