@extends('admin.header')

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        All Requests
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
                    <div id="sub_datatable_ajax_source"
                        class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" style="">

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 10; width: 100%; background-color:white;">
                            <thead>
                                <tr>
                                    <th>Partner ID</th>
                                    <th>Flight Type</th>
                                    <th>Departure</th>
                                    <th>Arrival</th>
                                    <th>Departure Date</th>
                                    <th>Arrival Date</th>
                                    {{-- <th>Adults</th>
                                    <th>Child</th> --}}
                                    <th>Requested Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group_fares as $group_fare)
                                    <tr>
                                        <td>{{ $group_fare->partner_id }}</td>
                                        <td>{{ $group_fare->flight_type }}</td>
                                        <td>{{ $group_fare->departure }}</td>
                                        <td>{{ $group_fare->arrival }}</td>
                                        <td>{{ $group_fare->departure_date }}</td>
                                        <td>{{ $group_fare->arrival_date }}</td>
                                        {{-- <td>{{ $group_fare->adults }}</td>
                                        <td>{{ $group_fare->child }}</td> --}}
                                        <td>{{ $group_fare->created_at }}</td>
                                        <td><button data-toggle="modal" data-target="#myModal-{{ $group_fare->id }}" class="btn btn-primary">Details</button></td>
                                    </tr>
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal-{{ $group_fare->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Request Details</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <?php $partner = App\Models\User::where('partner_id', $group_fare->partner_id)->first(); dd($partner) ?>
                                                            <div class="col-md-6">
                                                                <label for="partner_name">Company Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $partner->company_name }}
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="partner_mobile">Partner Mobile No.</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $partner->phone }}
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="partner_id">Partner ID</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->partner_id }}
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="partner_id">Group Fare ID</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->gf_id }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Flight Type</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->flight_type }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Departure</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->departure }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Arrival</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->arrival }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Departure Date</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->departure_date }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Arrival Date</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->arrival_date }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Adults</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->adults }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="partner_id">Child</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                {{ $group_fare->child }}
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <form action="{{ route('admin.add-group-fare', $group_fare->id) }}" method="POST">
                                                            @csrf
                                                            <label for="dep_time">Departure Time</label>
                                                            <input type="time" name="dep_time" placeholder="Enter Departure Time" value="{{ $group_fare->dep_time }}" class="form-control">
                                                            <label for="arr_time">Arrival Time</label>
                                                            <input type="time" name="arr_time" placeholder="Enter Arrival Time" value="{{ $group_fare->arr_time }}" class="form-control">
                                                            <label for="fare">Fare</label>
                                                            <input type="text" name="fare" placeholder="Enter Fare" value="{{ $group_fare->fare }}" class="form-control">
                                                            <button class="btn btn-primary btn-sm btn-block mt-2">Submit</button>
                                                        </form>
                                                    </div>
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
