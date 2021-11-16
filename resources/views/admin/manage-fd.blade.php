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
						<!-- end:: Subheader -->
						<!-- begin:: Content -->
						
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!-- remote datatable modal -->
							
							<!-- local datatable modal -->
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
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
                                                        <td><button  data-toggle="modal" data-target="#myModal-{{ $fd->id }}" class="btn btn-primary">Details</button></td>
                                                    </tr>                                  
                                                    
                                                    <!-- The Modal -->
                                                    <div class="modal" id="myModal-{{ $fd->id }}">
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
                                                                        {{ $fd->airline }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Flight No</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->flight_no }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Departure From</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->departure_from }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Arrival To</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->arrival_to }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Departure Time</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->departure_time }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Arrival Time</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->arrival_time }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Departure Date</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->departure_date }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Arrival Date</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->arrival_date }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Journey Type</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->journey_type }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Flight Type</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->flight_type }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Baggage Policy</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->baggage_policy }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">FD ID</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->fd_id }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Sector</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->sector }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">International Or Domestic</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->international_or_domestic }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Adult Fare</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->adult_fare }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Child Fare</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->child_fare }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Service Fee</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->service_fee }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Fare Type</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->fare_type }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Rescheduling Fee</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->rescheduling_fee }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="partner_id">Cancellation Fee</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{ $fd->cancellation_fee }}
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