@extends('admin.header')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <!--Begin::Dashboard 1-->
                            <!--Begin::Row-->
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 ">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Manage Bookings
                                                </h3>
                                            </div>
                                        </div>
                                        <!--begin::Form-->
                                        <form action="{{ route('admin.add_bookings') }}" class="kt-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf
                                            <div class="kt-portlet__body">
                                            <p></p>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Partner ID</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="partner_id" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Transaction ID</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text"  name="transaction_id" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Date</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="date" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Customer Name</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="customer_name" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter PNR</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="pnr" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Departure</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="departure" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Arrival</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="arrival" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Type</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="type" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Departure Date</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="departure_date" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Arrival Date</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="arrival_date" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Amount</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="amount" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Voucher</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="voucher" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Payment ID</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="payment_id" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter Booking ID</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="booking_id" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter FD ID  </label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="fd_id" id="example-number-input" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-number-input" class="col-2 col-form-label">Enter PAX</label>
                                                    <div class="col-6">
                                                        <input class="form-control" type="text" name="pax" id="example-number-input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <button type="submit" class="btn btn-primary">Confirm Booking</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Portlet-->

                                </div>
                            </div>
                            <!--End::Row-->
                            <!--Begin::Row-->
                            
                            <!--End::Row-->
                            <!--End::Dashboard 1-->	
                        </div>
@endsection