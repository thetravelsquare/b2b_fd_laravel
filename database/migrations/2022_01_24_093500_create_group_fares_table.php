<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_fares', function (Blueprint $table) {
            $table->id();
            $table->string('gf_id');
            $table->string('user_id');
            $table->string('partner_id');
            $table->string('flight_type');
            $table->string('departure');
            $table->string('arrival');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('dep_time')->nulable();
            $table->string('arr_time')->nullable();
            $table->string('adults');
            $table->string('child')->nullable();
            $table->string('fare')->nullable();
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
        Schema::dropIfExists('group_fares');
    }
}
