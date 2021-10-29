<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id');
            $table->string('transaction_id');
            $table->string('date');
            $table->string('customer_name');
            $table->string('pnr');
            $table->string('departure');
            $table->string('arrival');
            $table->string('type');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('amount');
            $table->string('voucher');
            $table->string('payment_id');
            $table->string('booking_id');
            $table->string('fd_id');
            $table->string('pax');
            $table->string('refund')->default('false');
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
        Schema::dropIfExists('bookings');
    }
}
