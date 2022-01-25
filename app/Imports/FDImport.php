<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\FixedDeparture;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  

class FDImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row);
        // return new FixedDeparture([
        //     'airline'     => $row[0],
        //     'flight_no'    => $row[1],
        //     'departure_from' => $row[2],
        //     'arrival_to'     => $row[3],
        //     'departure_time'    => $row[4],
        //     'arrival_time' => $row[5],
        //     'departure_date'     => $row[6],
        //     'arrival_date'    => $row[7],
        //     'journey_type'     => $row[8],
        //     'flight_type'    => $row[9],
        //     'baggage_policy' => $row[10],
        //     'fd_id'     => $row[11],
        //     'sector'    => $row[12],
        //     'international_or_domestic' => $row[13],
        //     'adult_fare' => $row[14],
        //     'child_fare' => $row[15],
        //     'service_fee' => $row[16],
        //     'fare_type' => $row[17],
        //     'rescheduling_fee' => $row[18],
        //     'cancellation_fee' => $row[19],
        // ]);

        $fd = new FixedDeparture();
        $fd->airline = $row['airline'];
        $fd->flight_no = $row['flight_number'];
        $fd->departure_from = $row['departure_from'];
        $fd->arrival_to = $row['arrival_to'];
        $fd->departure_time = $row['departure_time'];
        $fd->arrival_time = $row['arrival_time'];
        $fd->departure_date = $row['departure_date'];
        $fd->arrival_date = $row['arrival_date'];
        $fd->journey_type = $row['journey_type'];
        $fd->flight_type = $row['flight_type'];
        $fd->baggage_policy = $row['baggage'];
        $fd->fd_id = $row['fd_id'];
        $fd->sector = $row['sector'];
        $fd->international_or_domestic = $row['int_dom'];
        $fd->adult_fare = $row['adult_fare'];
        $fd->child_fare = $row['child_fare'];
        $fd->service_fee = $row['service_fee'];
        $fd->fare_type = $row['fare_type'];
        $fd->rescheduling_fee = $row['rescheduling_fee'];
        $fd->cancellation_fee = $row['cancellation_fee'];
       $fd->save();
    }
}

