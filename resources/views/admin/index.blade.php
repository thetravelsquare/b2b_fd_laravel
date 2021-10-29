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
														<th>Partner ID</th>
														<th>Company Name</th>
														<th>Company Address</th>
                                                        <th>Ac. Manager Name</th>
														<th>Company Mail ID</th>
                                                        <th>Contact No</th>
                                                        <th>BOOKING</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>Vibhu Gupta<br></td>	
                                                            <td>The Travel Square<br></td>
                                                            <td>Sahadra</td>
                                                            <td>Vibhu</td>
                                                            <td>vibhu@gmail.com</td>
                                                            <td>8700571934</td>                                                                               
                                                            <td>Booking Id</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vibhu Gupta<br></td>	
                                                            <td>The Travel Square<br></td>
                                                            <td>Sahadra</td>
                                                            <td>Vibhu</td>
                                                            <td>vibhu@gmail.com</td>
                                                            <td>8700571934</td>                                                                               
                                                            <td>Booking Id</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vibhu Gupta<br></td>	
                                                            <td>The Travel Square<br></td>
                                                            <td>Sahadra</td>
                                                            <td>Vibhu</td>
                                                            <td>vibhu@gmail.com</td>
                                                            <td>8700571934</td>                                                                               
                                                            <td>Booking Id</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vibhu Gupta<br></td>	
                                                            <td>The Travel Square<br></td>
                                                            <td>Sahadra</td>
                                                            <td>Vibhu</td>
                                                            <td>vibhu@gmail.com</td>
                                                            <td>8700571934</td>                                                                               
                                                            <td>Booking Id</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vibhu Gupta<br></td>	
                                                            <td>The Travel Square<br></td>
                                                            <td>Sahadra</td>
                                                            <td>Vibhu</td>
                                                            <td>vibhu@gmail.com</td>
                                                            <td>8700571934</td>                                                                               
                                                            <td>Booking Id</td>
                                                        </tr>
													
                                                </tbody>
                                            </table>
                                        	
									</div>
									<!--end: Datatable -->
								</div>
							</div>
@endsection