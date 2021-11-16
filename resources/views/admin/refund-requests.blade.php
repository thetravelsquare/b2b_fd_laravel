@extends('admin.header')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										All Partners                            
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
														<th>Booking ID</th>
														<th>Cancellation Reason</th>
														<th>Cancellation Date</th>
                                                        <th>Canellation Status</th>
														<th>Refund Status</th>
                                                        <th>Refund Date</th>
                                                        <!-- <th>Refund Amount</th> -->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($requests as $request)
                                                    <tr>
                                                        <td>{{ $request->booking_id }}</td>	
                                                        <td>{{ $request->reason }}</td>	
                                                        <td>{{ $request->created_at }}</td>	
                                                        <td>{{ $request->cancel_status }}</td>	
                                                        <td>{{ $request->refund_status }}</td>	
                                                        <td>{{ $request->refund_date }}</td>	
                                                        <!-- <td>{{ $request->refund_amount }}</td> -->
														<td><button  data-toggle="modal" data-target="#myModal-{{ $request->id }}" class="btn btn-primary">Initiate</button></td>
														
														<!-- The Modal -->
														<div class="modal" id="myModal-{{ $request->id }}">
														<div class="modal-dialog">
															<div class="modal-content">

															<!-- Modal Header -->
															<div class="modal-header">
																<h4 class="modal-title">Refund Status</h4>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>

															<!-- Modal body -->
															<div class="modal-body">
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Uploaded File</label>
																	</div>
																	<div class="col">
																		<img style="height: 250px;" src="{{ asset('storage/'.$request->image ) }}" alt="">
																	</div>
																</div>
																
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Partner ID</label>
																	</div>
																	<div class="col">
																		<input type="text" readonly value="{{ $request->booking_id }}" class="form-control">
																	</div>
																</div>

																<div class="row">
																	<div class="col">
																		<label for="partner_id">Cancel Reason</label>
																	</div>
																	<div class="col">
																		<input type="text" readonly value="{{ $request->reason }}" class="form-control">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Cancellation Date	</label>
																	</div>
																	<div class="col">
																		<input type="text" readonly value="{{ $request->created_at }}" class="form-control">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Cancel Status</label>
																	</div>
																	<div class="col">
																		<input type="text" value="{{ $request->cancel_status }}" class="form-control">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Refund Status</label>
																	</div>
																	<div class="col">
																		<input type="text" value="{{ $request->refund_status }}" class="form-control">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Refund Date</label>
																	</div>
																	<div class="col">
																		<input type="text" readonly value="{{ $request->refund_date }}" class="form-control">
																	</div>
																</div>
																
																<div class="row">
																	<div class="col">
																		<label for="partner_id">Refund Amount</label>
																	</div>
																	<div class="col">
																		<input type="text" value="{{ $request->refund_amount }}" class="form-control">
																	</div>
																</div>
															</div>

															<!-- Modal footer -->
															<div class="modal-footer">
																<button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
																<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															</div>

															</div>
														</div>
														</div>	
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        	
									</div>
									<!--end: Datatable -->
								</div>
							</div>
@endsection