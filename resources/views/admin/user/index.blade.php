@extends('admin.layout.admin')

@section('title') Users @endsection

@section('css')
    <link href="{{asset('admin/plugins/custom/datatables/datatables.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
@endsection



@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        <li>{{session()->get('success')}}</li>
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        <li>{{session()->get('error')}}</li>
                    </ul>
                </div>
        @endif
        <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Users
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->

                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th style="width: 150px">Type</th>
                            <th style="width: 150px">Name</th>
                            <th style="width: 150px">Email</th>
                            <th>Email Verified at</th>
                            <th>Mobile</th>
                            <th>Country</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->type == 0 ? 'Front User' : 'Admin User'}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->email_verified_at? $user->email_verified_at->format('d M, Y H:i:s') : 'Not Verified'}}</td>
                                <td>{{$user->mobile_no}}</td>
                                <td>{{$user->country}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection


@section('script')
    <script src="{{asset('admin/plugins/custom/datatables/datatables.bundle.js?v=7.0.5')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script type="text/javascript">
        "use strict";
        var KTDatatablesBasicPaginations = function() {

            var initTable1 = function() {
                var table = $('#kt_datatable');

                // begin first table
                table.DataTable({
                    responsive: true,
                    pagingType: 'full_numbers',
                });
            };

            return {

                //main function to initiate the module
                init: function() {
                    initTable1();
                },

            };

        }();

        jQuery(document).ready(function() {
            KTDatatablesBasicPaginations.init();
        });
    </script>
@endsection
