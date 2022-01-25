<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedDeparture extends Model
{
    use HasFactory;
    protected $fillable = ['airline', 'flight_no', 'departure_from', 'arrival_to', 'departure_time', 'departure_date', 'journey_type', 'flight_type', 'baggage_policy', 'fd_id', 'sector', 'international_or_domestic', 'adult_fare', 'child_fare', 'service_fee', 'fare_type', 'rescheduling_fee', 'cancellation_fee'];
}
