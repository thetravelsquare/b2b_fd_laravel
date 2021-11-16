@extends('layouts.header')
@section('content')

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
										
										All The Payments & Transaction Details Regarding the Booking of Flights & Other Deals Will Reflect Here.
																																			</div>
							</div>
							<!-- remote datatable modal -->
							<div id="kt_modal_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content" style="min-height: 590px;">
										<div class="modal-header">
											<h5 class="modal-title">
												Datatable
												<small>remote data source</small>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" style="display: none;">
												<table class="kt-datatable__table" style="display: block; min-height: 400px; max-height: 400px;">
													<thead class="kt-datatable__head">
														<tr class="kt-datatable__row" style="left: 0px;">
															<th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort kt-datatable__cell--sorted" data-sort="asc"><span style="width: 110px;">#<i class="flaticon2-arrow-up"></i></span></th>
															<th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Profile Picture</span></th>
															<th data-field="CompanyAgent" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Name</span></th>
															<th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Ship Date</span></th>
															<th data-field="ShipCountry" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Ship Country</span></th>
															<th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Status</span></th>
															<th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Type</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="kt-datatable__body ps" style="max-height: 398px;">
														<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">1</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">
																			<div class="kt-badge kt-badge--xl kt-badge--brand">N</div>
																		</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Nixie Sailor</a>								<span class="kt-user-card-v2__desc">Developer</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Nixie Sailor</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">2/12/2018</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">2</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">
																			<div class="kt-badge kt-badge--xl kt-badge--primary">E</div>
																		</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Emelita Giraldez</a>								<span class="kt-user-card-v2__desc">Architect</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Emelita Giraldez</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">8/6/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">ID</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="2" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">3</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_6.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Ula Luckin</a>								<span class="kt-user-card-v2__desc">Architect</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Ula Luckin</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">5/26/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">AR</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">4</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_7.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Evangeline Cure</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Evangeline Cure</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">7/2/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">ID</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="4" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">5</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_8.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Tierney St. Louis</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Tierney St. Louis</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">5/20/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">AT</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">6</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_9.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Gerhard Reinhard</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Gerhard Reinhard</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">11/26/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="6" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">7</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_10.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Englebert Shelley</a>								<span class="kt-user-card-v2__desc">CEO</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Englebert Shelley</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">6/28/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CN</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">8</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_11.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Hazlett Kite</a>								<span class="kt-user-card-v2__desc">Designer</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Hazlett Kite</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">8/5/2016</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">HR</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="8" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">9</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_12.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Freida Morby</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Freida Morby</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">3/31/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">CO</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--sorted kt-datatable__cell--center kt-datatable__cell" data-field="RecordID"><span style="width: 110px;">10</span></td>
															<td data-field="OrderID" class="kt-datatable__cell">
																<span>
																	<div class="kt-user-card-v2">
																		<div class="kt-user-card-v2__pic">								<img src="./file/100_10.jpg" alt="photo">							</div>
																		<div class="kt-user-card-v2__details">								<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="kt-user-card-v2__name">Obed Helian</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>
																	</div>
																</span>
															</td>
															<td data-field="CompanyAgent" class="kt-datatable__cell"><span style="width: 110px;">Obed Helian</span></td>
															<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;">1/26/2017</span></td>
															<td data-field="ShipCountry" class="kt-datatable__cell"><span style="width: 110px;">TH</span></td>
															<td data-field="Status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">	                                <i class="la la-ellipsis-h"></i>	                            </a>							    
																		<div class="dropdown-menu dropdown-menu-right">							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>							        <a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>							    </div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">								<i class="la la-trash"></i>							</a>						
																</span>
															</td>
														</tr>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
															<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
														</div>
														<div class="ps__rail-y" style="top: 0px; right: 0px;">
															<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
														</div>
													</tbody>
												</table>
												<div class="kt-datatable__pager kt-datatable--paging-loaded">
													<ul class="kt-datatable__pager-nav">
														<li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
														<li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
														<li style=""></li>
														<li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
														<li style=""></li>
														<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
														<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
													</ul>
													<div class="kt-datatable__pager-info">
														<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
															<select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
																<option class="bs-title-option" value=""></option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select>
															<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-7" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">10</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu ">
																<div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
																	<ul class="dropdown-menu inner show" role="presentation"></ul>
																</div>
															</div>
														</div>
														<span class="kt-datatable__pager-detail">Showing 1 - 10 of 40</span>
													</div>
												</div>
											</div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-sm" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-sm">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<!-- local datatable modal -->
							<div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-xl">
									<div class="modal-content" style="min-height: 590px;">
										<div class="modal-header">
											<h5 class="modal-title">
												Datatable
												<small>local data source</small>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_datatable_local_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" style="display: none;">
												<table class="kt-datatable__table" style="display: block; min-height: 400px; max-height: 400px;">
													<thead class="kt-datatable__head">
														<tr class="kt-datatable__row" style="left: 0px;">
															<th data-field="id" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th>
															<th data-field="employee_id" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Employee ID</span></th>
															<th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Name</span></th>
															<th data-field="hire_date" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Hire Date</span></th>
															<th data-field="gender" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Gender</span></th>
															<th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Status</span></th>
															<th data-field="type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Type</span></th>
															<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
														</tr>
													</thead>
													<tbody class="kt-datatable__body ps" style="max-height: 398px;">
														<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">463978155-5</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Carroll Maharry</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/18/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="2">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">590410601-7</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Jae Frammingham</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/22/2017</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="2" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="3">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">562079447-4</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Natalie Stuchberry</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">6/1/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="4">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">078485871-3</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Abran Ivett</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">2/6/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="4" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="5">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">048140516-X</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Viola Ends</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/16/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Delivered</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">115191539-4</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Marabel Foystone</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">5/10/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="6" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="7">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">053408526-1</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Maiga Frogley</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/24/2017</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="8">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">996172199-3</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Leia Rapelli</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/11/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="8" class="kt-datatable__row" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="9">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">290771439-2</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Lilias Stollsteiner</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/26/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Female</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--accent kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-accent">Direct</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
															<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 110px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="10">&nbsp;<span></span></label></span></td>
															<td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;">475138305-1</span></td>
															<td data-field="name" class="kt-datatable__cell"><span>Chrissie Trenouth</span></td>
															<td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/5/2018</span></td>
															<td data-field="gender" class="kt-datatable__cell"><span style="width: 110px;">Male</span></td>
															<td data-field="status" class="kt-datatable__cell"><span><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td>
															<td data-field="type" data-autohide-disabled="false" class="kt-datatable__cell"><span><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td>
															<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
																<span style="overflow: visible; position: relative;">
																	<div class="dropdown">
																		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">                                <i class="la la-cog"></i>                            </a>						  	
																		<div class="dropdown-menu dropdown-menu-right">						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-edit"></i> Edit Details</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-leaf"></i> Update Status</a>						    	<a class="dropdown-item" href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"><i class="la la-print"></i> Generate Report</a>						  	</div>
																	</div>
																	<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">							<i class="la la-edit"></i>						</a>						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">							<i class="la la-trash"></i>						</a>					
																</span>
															</td>
														</tr>
														<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
															<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
														</div>
														<div class="ps__rail-y" style="top: 0px; right: 0px;">
															<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
														</div>
													</tbody>
												</table>
												<div class="kt-datatable__pager kt-datatable--paging-loaded">
													<ul class="kt-datatable__pager-nav">
														<li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
														<li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
														<li style=""></li>
														<li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
														<li style=""><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li>
														<li></li>
														<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
														<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="100"><i class="flaticon2-fast-next"></i></a></li>
													</ul>
													<div class="kt-datatable__pager-info">
														<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
															<select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
																<option class="bs-title-option" value=""></option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="50">50</option>
																<option value="100">100</option>
															</select>
															<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-8" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
																<div class="filter-option">
																	<div class="filter-option-inner">
																		<div class="filter-option-inner-inner">10</div>
																	</div>
																</div>
															</button>
															<div class="dropdown-menu ">
																<div class="inner show" role="listbox" id="bs-select-8" tabindex="-1">
																	<ul class="dropdown-menu inner show" role="presentation"></ul>
																</div>
															</div>
														</div>
														<span class="kt-datatable__pager-detail">Showing 1 - 10 of 1000</span>
													</div>
												</div>
											</div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer kt-hidden">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
										<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">Payment Balance : ₹ 0 </h3>
									</div>
								
								</div> 
								
								<div class="kt-portlet__body kt-portlet__body">
									<!--begin: Datatable -->
									<div id="sub_datatable_ajax_source" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">
										
																				                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                                                <thead>
                                                    <tr>
														<th>DATE</th>
														<th>CUSTOMER NAME</th>
														<th>BOOKING ID</th>
														<th>PAYMENT ID</th>
														<th>TRANSACTION ID</th>
                                                        <th>MODE</th>
                                                        <th>AMOUNT</th>
                                                        <th>STATUS</th>
                                                        <th>INVOICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													@foreach($transactions as $transaction)	
														<tr>
															<td>{{ $transaction->created_at->format('d/m/Y')}}</td>
															<?php 
																$customer_name = App\Models\Booking::where('transaction_id', $transaction->transaction_id)->get('customer_name');
															?>
															<td>{{ $customer_name[0]['customer_name'] }}</td>
															<td>{{ $transaction->booking_id }}</td>
															<td>{{ $transaction->payment_id }}</td>
															<td>{{ $transaction->transaction_id }}</td>
															<td>{{ $transaction->mode }}</td>
															<td>{{ $transaction->amount }}</td>
															<td>{{ $transaction->status}}</td>
															<td>{{ $transaction->invoice }}</td>
														</tr>
													@endforeach
												</tbody>
                                            </table>
                                        		
									</div>
									<!--end: Datatable -->
								</div>
							</div>
							<div id="kt_modal_sub_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
								<div class="modal-dialog modal-xl modal-dialog-centered">
									<div class="modal-content" style="min-height: 590px;">
									
										<div class="modal-body">
											<!--begin: Search Form -->
											<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
												<div class="row align-items-center">
													<div class="col-xl-8 order-2 order-xl-1">
														<div class="row align-items-center">
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-input-icon kt-input-icon--left">
																	<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																	<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																	</span>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Status:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Pending</option>
																				<option value="2">Delivered</option>
																				<option value="3">Canceled</option>
																				<option value="4">Success</option>
																				<option value="5">Info</option>
																				<option value="6">Danger</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-10" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-10" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
																<div class="kt-form__group kt-form__group--inline">
																	<div class="kt-form__label">
																		<label>Type:</label>
																	</div>
																	<div class="kt-form__control">
																		<div class="dropdown bootstrap-select form-control">
																			<select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
																				<option value="">All</option>
																				<option value="1">Online</option>
																				<option value="2">Retail</option>
																				<option value="3">Direct</option>
																			</select>
																			<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-11" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">All</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu ">
																				<div class="inner show" role="listbox" id="bs-select-11" tabindex="-1">
																					<ul class="dropdown-menu inner show" role="presentation"></ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
														<a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
														</a>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
													</div>
												</div>
											</div>
											<!--end: Search Form -->
										</div>
										<div class="modal-body modal-body-fit">
											<!--begin: Datatable -->
											<div id="modal_sub_datatable_ajax_source" class="kt-datatable--destroyed"></div>
											<!--end: Datatable -->
										</div>
										<div class="modal-footer kt-hidden">
											<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end:: Content -->				
					</div>
                    <!-- begin:: Footer -->
                                            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-footer__copyright">
                                2021&nbsp;©&nbsp;<a href="http://b2bfixeddepartures.com/" target="_blank" class="kt-link"><font color="black"><b> B2B Fixed Departures</b></font></a>
                            </div>
                            <div class="kt-footer__menu">
                                <a href="http://b2bfixeddepartures.com/about" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                                <a href="http://b2bfixeddepartures.com/terms-and-conditions/" target="_blank" class="kt-footer__menu-link kt-link">T&C</a>
                                <a href="http://b2bfixeddepartures.com/privacy-policy" target="_blank" class="kt-footer__menu-link kt-link">Privacy Policy</a>
                                <a href="http://b2bfixeddepartures.com/partner-care" target="_blank" class="kt-footer__menu-link kt-link">Partner Care</a>
                            </div>
                        </div>
                    </div>                    <!-- end:: Footer -->			
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Panel -->
        <div id="kt_quick_panel" class="kt-quick-panel">
            <a href="http://b2bfixeddepartures.com/" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
            <div class="kt-quick-panel__nav" kt-hidden-height="66" style="">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="http://b2bfixeddepartures.com/kt_quick_panel_tab_notifications" role="tab">PARTNER DEDICATED SUPPORT</a>
                    </li>
                </ul>
            </div>
            <div class="kt-quick-panel__content">
        <div class="tab-content">
            <div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height: 592px; overflow: hidden;">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Manager Name
                            </div>
                            <div class="kt-notification__item-time">
                                Mr. Kunal Aggarwal
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                               Designation
                            </div>
                            <div class="kt-notification__item-time">
                                Reservation Head (Aviations) 
                            </div>
                        </div>
                    </a>
                    <a href="tel:01143680216" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Desk Contact
                            </div>
                            <div class="kt-notification__item-time">
                                 +91-011-436-802-16
                            </div>
                        </div>
                    </a>
                    <a href="tel:9999007037" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Office Contact
                            </div>
                            <div class="kt-notification__item-time">
                                +91-9999-355-993
                            </div>
                        </div>
                    </a>
                    <a href="mailto:kunal@instawiremoney.com" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Mail Id
                            </div>
                            <div class="kt-notification__item-time">
                                kunal@b2bfixeddepartures.com
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
        </div>
        <!-- end::Quick Panel -->
        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- end::Scrolltop -->
        <!-- begin::Sticky Toolbar -->
        
        <!-- end::Sticky Toolbar -->
        <!-- begin::Demo Panel -->
      
        <!--ENd:: Chat-->
        <script>
		var KTAppOptions = { "colors": { "state": { "brand": "#716aca", "light": "#ffffff", "dark": "#282a3c", "primary": "#5867dd", "success": "#34bfa3", "info": "#36a3f7", "warning": "#ffb822", "danger": "#fd3995" }, "base": { "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"], "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"] } } };
	</script>
	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.js.download" type="text/javascript"></script>
	<script src="http://partner.thetravelsquare.in/resource/admin/files/scripts.bundle.js.download" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->


	<!--begin::Page Scripts(used by this page) -->
	<script src="http://partner.thetravelsquare.in/resource/admin/files/login-1.js.download" type="text/javascript"></script>
	<!--end::Page Scripts -->

                        <!--begin::Page Vendors(used by this page) -->
                        <script src="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.js.download" type="text/javascript"></script>
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/js(1)" type="text/javascript"></script>
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/gmaps.js.download" type="text/javascript"></script>
                        <!--end::Page Vendors -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="http://partner.thetravelsquare.in/resource/admin/files/dashboard.js.download" type="text/javascript"></script>
                        <!--end::Page Scripts -->

	<!-- end::Body -->
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    
    <script src="http://partner.thetravelsquare.in/resource/admin//plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
        <!--end::Page Vendors -->
        <!--begin::Page Scripts(used by this page) -->
        <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/datatables/advanced/multiple-controls.js" type="text/javascript"></script>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
		src="http://partner.thetravelsquare.in/resource/admin/files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>



         <!-- begin::Global Config(global config for global JS sciprts) -->


<div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>        <div class="daterangepicker ltr show-ranges opensleft">
            
            <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
        </div>
        <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    </body>
</html>
@endsection