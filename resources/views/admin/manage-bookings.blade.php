@extends('admin.header')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    All Bookings
                </h3>

            </div>
        </div>
    </div>
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
                                <th>Partner ID</th>
                                <th>Transaction ID</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>PNR</th>
                                <th>Departure</th>
                                <!-- <th>Arrival</th> -->
                                <!-- <th>Type</th> -->
                                <th>Action</th>
                                <!-- <th>Departure Date</th>
														<th>Arrival Date</th>
                                                        <th>Amount</th>
                                                        <th>Voucher</th>
                                                        <th>Payment ID</th>
                                                        <th>FD ID</th>
                                                        <th>Pax</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->partner_id}}</td>
                                <td>{{ $booking->transaction_id}}</td>
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->customer_name }}</td>
                                <td>{{ $booking->pnr }}</td>
                                <td>{{ $booking->departure }}</td>
                                <!-- <td>{{ $booking->arrival }}</td>	 -->
                                <!-- <td>{{ $booking->type }}</td>	 -->
                                <td><button data-toggle="modal" data-target="#myModal-{{ $booking->id }}" class="btn btn-primary">Details</button></td>
                                <!-- <td>{{ $booking->departure_date }}</td>	
                                                        <td>{{ $booking->arrival_date }}</td>	
                                                        <td>{{ $booking->amount }}</td>	
                                                        <td>{{ $booking->voucher }}</td>	
                                                        <td>{{ $booking->payment_id }}</td>	
                                                        <td>{{ $booking->fd_id }}</td>	
                                                        <td>{{ $booking->pax }}</td>	 -->
                            </tr>

                            <!-- The Modal -->
                            <div class="modal" id="myModal-{{ $booking->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Booking Details</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Partner ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->partner_id }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Transaction ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->transaction_id }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Date</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->date }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Customer Name</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->customer_name }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">PNR</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->pnr }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Departure</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->departure }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Arrival</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->arrival }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Type</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->type }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Departure Date</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->departure_date }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Arrival Date</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->arrival_date }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Amount</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->amount }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Voucher</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->voucher }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Payment ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->payment_id }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">FD ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->fd_id }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="partner_id">Pax</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->pax }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!--end: Datatable -->
            </div>
        </div>
        @endsection