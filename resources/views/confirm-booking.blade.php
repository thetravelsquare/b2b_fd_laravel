@extends('layouts.header')
@section('content')
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <style>
            .razorpay-payment-button {
                display: none;
            }
        </style>
        <!-- local datatable modal -->
        <style>
            @media print {
                .noprint {
                    visibility: hidden;
                }
                html,
                body {
                    height: 100%;
                    margin: 0 !important;
                    padding: 0 !important;
                    overflow: hidden;
                }
            }
        </style>
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="kt-subheader__title">Flight Details</h4>
                    </div><br><br>
                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <tr>
                                <th>Airline</th>
                                <td>{{ $df->airline }}</td>
                            </tr>
                            <tr>
                                <th>Flight Number</th>
                                <td>{{ $df->flight_no }}</td>
                            </tr>
                            <tr>
                                <th>Departure (From) </th>
                                <td>{{ $df->departure_from }}</td>
                            </tr>
                            <tr>
                                <th>Arrival (To) </th>
                                <td>{{ $df->arrival_to }}</td>
                            </tr>
                            <tr>
                                <th>Departure Time</th>
                                <td>₹{{ $df->departure_time }}</td>
                            </tr>
                            <tr>
                                <th>Arrival Time</th>
                                <td>{{ $df->arrival_time }}</td>
                            </tr>
                            <tr>
                                <th>Departure Date</th>
                                <td>{{ $df->departure_date }}</td>
                            </tr>
                            <tr>
                                <th>Arrival Date</th>
                                <td>{{ $df->arrival_date }}</td>
                            </tr>
                            <tr>
                                <th>Journey Type</th>
                                <td>{{ $df->journey_type }}</td>
                            </tr>
                            <tr>
                                <th>Flight Type</th>
                                <td>{{ $df->flight_type }}</td>
                            </tr>
                            <tr>
                                <th>Baggage Policy</th>
                                <td>{{ $df->baggage_policy }}</td>
                            </tr>
                            <tr>
                                <th>FD_ID</th>
                                <td>{{ $df->fd_id }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet kt-portlet--mobile">

            <div class="kt-portlet__body kt-portlet__body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="kt-subheader__title">
                            Fare Details</h4>
                    </div><br><br>
                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <tr>
                                <th>Adult Fare</th>
                                <td>₹ {{ $df->adult_fare }} Per Adult</td>
                            </tr>
                            <tr>
                                <th>Child Fare</th>
                                <td>₹ {{ $df->adult_fare }} Per Child</td>
                            </tr>
                            <tr>
                                <th>Service Fee</th>
                                <td>₹ 100 Per Pax</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>₹{{ $df->adult_fare }} x {{ count($requests['passenger_name']) }} +
                                    {{ $df->service_fee }} = ₹{{ $total }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="kt-subheader__title">
                            Cancellation Policy</h4>
                    </div><br><br>
                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <tr>
                                <th>Fare Type</th>
                                <td>{{ $df->fare_type }}</td>
                            </tr>
                            <tr>
                                <th>Rescheduling Fee</th>
                                <td>₹ {{ $df->rescheduling_fee }}</td>
                            </tr>
                            <tr>
                                <th>Cancellation Fee</th>
                                <td>₹ {{ $df->cancellation_fee }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="kt-subheader__title">Total</h4>
                    </div><br><br>
                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <tr>
                                <th>Total</th>
                                <td>Fare x Passengers + Service Fee x Passengers = Total</td>
                                <td>₹{{ $df->adult_fare }} x {{ count($requests['passenger_name']) }} + ₹{{ $df->service_fee }} x {{ count($requests['passenger_name']) }} = ₹{{ $total }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="p-4">
                <div class="row bg-dark p-2 text-light">
                    <div class="col-6 col-md-6">Passenger Name</div>
                    <div class="col-6 col-md-6">Passenger DOB</div>
                </div>
                <div class="row p-2">
                    <div class="col-6 col-md-6">
                        @foreach ($requests['passenger_name'] as $passenger_name)
                            <div class="text-dark p-2 border-top">{{ $passenger_name }}</div>
                        @endforeach
                    </div>
                    <div class="col-6 col-md-6">
                        @foreach ($requests['passenger_dob'] as $passenger_dob)
                            <div class="text-dark p-2 border-top">{{ $passenger_dob }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="m-4">
            
            <form action="{{ route('razorpay.payment.store', ['ifd' => $df->id, 'total' => $total]) }}" class="kt-form"
                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ env('RAZORPAY_KEY') }}"
                    data-amount="{{ $total * 100 }}" data-currency="INR"
                    data-name="Fixed Departure"
                    data-customers="{{ json_encode($requests) }}"
                    data-prefill.name="{{ Auth::user()->name }}"
                    data-prefill.email="{{ Auth::user()->email }}"
                    data-prefill.contact="{{ Auth::user()->phone }}"
                    data-prefill.customer="{{ json_encode($requests) }}"
                    data-theme.color="#000"></script>
                <div class="text-center">
                    <button class="btn btn-dark btn-sm mt-3">Confirm Booking</button>
                </div>
            </form>
        </div>
    </div>
    <!-- begin:: Footer -->
    <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-footer__copyright">
                2022&nbsp;©&nbsp;<a href="http://b2bfixeddepartures.com/" target="_blank" class="kt-link">
                    <font color="black"><b> B2B Fixed Departures</b></font>
                </a>
            </div>
            <div class="kt-footer__menu">
                <a href="http://b2bfixeddepartures.com/about" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                <a href="http://b2bfixeddepartures.com/terms-and-conditions/" target="_blank"
                    class="kt-footer__menu-link kt-link">T&C</a>
                <a href="http://b2bfixeddepartures.com/privacy-policy" target="_blank"
                    class="kt-footer__menu-link kt-link">Privacy Policy</a>
                <a href="http://b2bfixeddepartures.com/partner-care" target="_blank"
                    class="kt-footer__menu-link kt-link">Partner Care</a>
            </div>
        </div>
    </div> <!-- end:: Footer -->
    </div>
    </div>
    </div>
    <!-- end:: Page -->
    <!-- begin::Quick Panel -->
    <div id="kt_quick_panel" class="kt-quick-panel">
        <a href="http://b2bfixeddepartures.com/" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i
                class="flaticon2-delete"></i></a>
        <div class="kt-quick-panel__nav" kt-hidden-height="66">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab"
                        href="http://b2bfixeddepartures.com/kt_quick_panel_tab_notifications" role="tab">PARTNER DEDICATED
                        SUPPORT</a>
                </li>
            </ul>
        </div>
        <div class="kt-quick-panel__content">
            <div class="tab-content">
                <div class="tab-pane fade show kt-scroll active ps ps--active-y" id="kt_quick_panel_tab_notifications"
                    role="tabpanel" style="height: 592px; overflow: hidden;">
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
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#716aca",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>
    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="http://partner.thetravelsquare.in/resource/admin/files/plugins.bundle.js.download" type="text/javascript">
    </script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/scripts.bundle.js.download" type="text/javascript">
    </script>
    <!--end::Global Theme Bundle -->


    <!--begin::Page Scripts(used by this page) -->
    <script src="http://partner.thetravelsquare.in/resource/admin/files/login-1.js.download" type="text/javascript">
    </script>
    <!--end::Page Scripts -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="http://partner.thetravelsquare.in/resource/admin/files/fullcalendar.bundle.js.download"
        type="text/javascript"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/js(1)" type="text/javascript"></script>
    <script src="http://partner.thetravelsquare.in/resource/admin/files/gmaps.js.download" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="http://partner.thetravelsquare.in/resource/admin/files/dashboard.js.download" type="text/javascript">
    </script>
    <!--end::Page Scripts -->

    <!-- end::Body -->
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js"
        type="text/javascript"></script>

    <script src="http://partner.thetravelsquare.in/resource/admin//plugins/custom/datatables/datatables.bundle.js"
        type="text/javascript"></script>
    <!--end::Page Vendors -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="http://partner.thetravelsquare.in/resource/admin/js/pages/crud/datatables/advanced/multiple-controls.js"
        type="text/javascript"></script>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="http://partner.thetravelsquare.in/resource/admin/files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>



    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        $(function() {
            $("#btnAdd").bind("click", function() {
                var div = $("<tr />");
                div.html(GetDynamicTextBox(""));
                $("#TextBoxContainer").append(div);
            });
            $("body").on("click", ".remove", function() {
                $(this).closest("tr").remove();
            });
        });

        function GetDynamicTextBox(value) {
            return '<td class="col-md-6"><input class="form-control" type="text" name="passenger_name[]" required id="example-number-input" /></td><td class="col-md-6"><input class="form-control" type="date" name="passenger_dob[]" required id="example-number-input" /></td><td><button type="button" class="btn btn-danger remove">X</button></td>'
            // return '<div class="row mt-1"><div class="col-md-6"><label for="example-number-input" class="col-md-6 col-form-label">Enter Passenger Name</label><input class="form-control" type="type" required id="example-number-input" /></div><div class="col-md-6"><label for="example-number-input" class="col-md-6 col-form-label">Date of Birth</label><input class="form-control" type="date" required id="example-number-input" /></div></div>'
        }
    </script>
    <!-- end::Body -->

    <div class="daterangepicker ltr show-ranges opensleft">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default"
                type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                type="button">Apply</button> </div>
    </div><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    <div class="daterangepicker ltr show-ranges opensleft">

        <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default"
                type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                type="button">Apply</button> </div>
    </div>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="./files/box-469cf41adb11dc78be68c1ae7f9457a4.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    </body>

    </html>
@endsection
