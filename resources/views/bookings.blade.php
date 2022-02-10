@extends('layouts.header')
@section('content')

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
                All Your Bookings Made on B2B Fixed Departures Will Appear Here
            </div>
        </div>

        <div class="kt-portlet kt-portlet--mobile">


            <div class="kt-portlet__body kt-portlet__body">
                <!--begin: Datatable -->
                <div id="sub_datatable_ajax_source"
                    class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded table-responsive">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 10; width: 90%; background-color:white;">
                        <thead>
                            <tr>
                                <th>BOOKING ID</th>
                                <th>PAX</th>
                                <th style="min-width: 200px;">CUSTOMER NAME</th>
                                <th>PNR</th>
                                <th>DEPARTURE</th>
                                <th>ARRIVAL</th>
                                <th>TYPE</th>
                                <th>AMOUNT</th>
                                <th>FD_ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->booking_id }}</td>
                                    <td>{{ $booking->pax }}</td>
                                    <td>
                                        @foreach (json_decode($booking->customer_name) as $key => $customer_name)
                                           {{ $key+1 }}. &nbsp;{{ $customer_name }}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $booking->pnr }}</td>
                                    <td>{{ $booking->departure }}</td>
                                    <td>{{ $booking->arrival }}</td>
                                    <td>{{ $booking->type }}</td>
                                    <td>₹{{ number_format($booking->amount) }}</td>
                                    <td>{{ $booking->fd_id }}</td>
                                    <td><button class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal-{{ $booking->id }}">Details</button></td>
                                  
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
                                                        <label for="partner_id">Booking ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $booking->booking_id }}
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
                                                        @foreach (json_decode($booking->customer_name) as $customer_name)
                                                            {{ $customer_name }} ({{ json_decode($booking->customer_dob)[$key] }}) <br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <label for="partner_id">PNR</label>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
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
                                                        ₹{{ number_format($booking->amount) }}
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!--end: Datatable -->
            </div>
        </div>
        <div id="kt_modal_sub_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content" style="min-height: 590px;">
                    <!-- <div class="modal-header">
               <h5 class="modal-title">
                Sub KTDatatable in Modal Pop-up
                <small>sub datatable for the selected row is loaded from remote data source</small>
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
              </div> -->
                    <div class="modal-body">
                        <!--begin: Search Form -->
                        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                            <div class="row align-items-center">
                                <div class="col-xl-8 order-2 order-xl-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                            <div class="kt-input-icon kt-input-icon--left">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                    id="generalSearch">
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
                                                        <select class="form-control bootstrap-select" id="kt_form_status"
                                                            tabindex="-98">
                                                            <option value="">All</option>
                                                            <option value="1">Pending</option>
                                                            <option value="2">Delivered</option>
                                                            <option value="3">Canceled</option>
                                                            <option value="4">Success</option>
                                                            <option value="5">Info</option>
                                                            <option value="6">Danger</option>
                                                        </select>
                                                        <button type="button" class="btn dropdown-toggle btn-light"
                                                            data-toggle="dropdown" role="combobox" aria-owns="bs-select-10"
                                                            aria-haspopup="listbox" aria-expanded="false"
                                                            data-id="kt_form_status" title="All">
                                                            <div class="filter-option">
                                                                <div class="filter-option-inner">
                                                                    <div class="filter-option-inner-inner">All</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-10"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
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
                                                        <select class="form-control bootstrap-select" id="kt_form_type"
                                                            tabindex="-98">
                                                            <option value="">All</option>
                                                            <option value="1">Online</option>
                                                            <option value="2">Retail</option>
                                                            <option value="3">Direct</option>
                                                        </select>
                                                        <button type="button" class="btn dropdown-toggle btn-light"
                                                            data-toggle="dropdown" role="combobox" aria-owns="bs-select-11"
                                                            aria-haspopup="listbox" aria-expanded="false"
                                                            data-id="kt_form_type" title="All">
                                                            <div class="filter-option">
                                                                <div class="filter-option-inner">
                                                                    <div class="filter-option-inner-inner">All</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-11"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                    <a href="https://keenthemes.com/metronic/preview/demo1/crud/metronic-datatable/advanced/modal.html#"
                                        class="btn btn-default kt-hidden">
                                        <i class="la la-cart-plus"></i> New Order
                                    </a>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none">
                                    </div>
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
                        <button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md"
                            data-dismiss="modal">Close</button>
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
                <a href="/partner-help" class="kt-footer__menu-link kt-link">Partner Help</a>
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
        {{-- <div class="kt-quick-panel__content">
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
        </div> --}}
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
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>

    <script>
        $(document).ready(function() {
            $("#flight_type").hide();
            $("#package_type").hide();
            $("#inclusions").hide();
            $("#hotel_detail").hide();
        });
        $('#deal_type_id').change(function() {
            var gid = $(this).val();
            if (gid == '1') {
                $("#flight_type").hide();
                $("#package_type").show();
                $("#inclusions").show();
                $("#hotel_detail").hide();
            } else if (gid == '2') {
                $("#flight_type").show();
                $("#package_type").hide();
                $("#inclusions").hide();
                $("#hotel_detail").hide();
            } else if (gid == '3') {
                $("#flight_type").hide();
                $("#package_type").hide();
                $("#inclusions").hide();
                $("#hotel_detail").show();
            } else {
                $("#flight_type").hide();
                $("#package_type").hide();
                $("#inclusions").hide();
                $("#hotel_detail").hide();
            }
            return false;
        });
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
