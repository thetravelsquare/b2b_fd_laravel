@extends('admin.header')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    All Fixed Departure
                </h3>

            </div>
        </div>
    </div>
    @if (Session::get('success'))
    <script>
        setTimeout(function() {
            $('.alert').fadeOut(1000);
            // $('.feedback').hide(1000); // you can also try this
        }, 10000);
    </script>
    <div class="alert alert-success">
        {{ session::get('success') }}
    </div>
    @endif
    <!-- end:: Subheader -->
    <!-- begin:: Content -->

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!-- remote datatable modal -->

        <!-- local datatable modal -->

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body">
                <!--begin: Datatable -->
                <div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                        <thead>
                            <tr>
                                <th>Airline</th>
                                <th>Flight No.</th>
                                <th>Departure From</th>
                                <th>Arrival To</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Departure Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fds as $fd)
                            <tr>
                                <td>{{ $fd->airline }}</td>
                                <td>{{ $fd->flight_no }}</td>
                                <td>{{ $fd->departure_from }}</td>
                                <td>{{ $fd->arrival_to }}</td>
                                <td>{{ $fd->departure_time }}</td>
                                <td>{{ $fd->arrival_time }}</td>
                                <td>{{ $fd->departure_date }}</td>
                                <td><button data-toggle="modal" data-target="#myModal-{{ $fd->id }}" class="btn btn-primary">Details</button></td>
                            </tr>

                            <!-- The Modal -->
                            <div class="modal" id="myModal-{{ $fd->id }}">
                                <form action="{{ route('admin.edit_fixed_departure', $fd->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">FD Details</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Airline</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="airline" value="{{ $fd->airline }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Flight No</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="flight_no" value="{{ $fd->flight_no }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Departure From</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="departure_from" value="{{ $fd->departure_from }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Arrival To</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="arrival_to" value="{{ $fd->arrival_to }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Departure Time</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="time" name="departure_time" value="{{ $fd->departure_time }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Arrival Time</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="time" name="arrival_time" value="{{ $fd->arrival_time }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Departure Date</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" name="departure_date" value="{{ $fd->departure_date }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Arrival Date</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" name="arrival_date" value="{{ $fd->arrival_date }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Journey Type</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="journey_type" value="{{ $fd->journey_type }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Flight Type</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="flight_type" value="{{ $fd->flight_type }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Baggage Policy</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="baggage_policy" value="{{ $fd->baggage_policy }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">FD ID</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="fd_id" value="{{ $fd->fd_id }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Sector</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="sector" value="{{ $fd->sector }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">International Or Domestic</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select name="international_or_domestic" id="" class="form-control">
                                                                <option value="">Select</option>
                                                                <option @if($fd->international_or_domestic == 'International') selected @endif value="International">International</option>
                                                                <option @if($fd->international_or_domestic == 'Domestic') selected @endif value="Domestic">Domestic</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Adult Fare</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="adult_fare" value="{{ $fd->adult_fare }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Child Fare</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="child_fare" value="{{ $fd->child_fare }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Service Fee</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="service_fee" value="{{ $fd->service_fee }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Fare Type</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="fare_type" value="{{ $fd->fare_type }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Rescheduling Fee</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="rescheduling_fee" value="{{ $fd->rescheduling_fee }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="partner_id">Cancellation Fee</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="cancellation_fee" value="{{ $fd->cancellation_fee }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!--end: Datatable -->
            </div>
        </div>
        @endsection