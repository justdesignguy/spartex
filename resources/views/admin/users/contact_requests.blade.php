@extends('admin.layout.master')
@section('css')
    <link href="{{ asset('admin/theme/lib/datatables/css/jquery.dataTables.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Requests</li>
        </ol>
        <h6 class="slim-pagetitle">Contact Requests</h6>
    </div>
    <div class="section-wrapper">
        @include('admin.layout.partials.flash_messages')
        <div class="row">
            <div class="col-lg-12">
                <span class="pull-right float-right ml-auto">
                    <a href="{{ route('admin.contact_requests_export') }}" class="btn btn-info btn-sm"
                       title="Add New">
                        <i class="fa fa-download" aria-hidden="true"></i> Export
                    </a>
                </span>
            </div>
        </div>
        <hr>
        <div class="table-wrapper">
            <table id="dataTable" class="table display responsive nowrap">
                <thead>
                <tr>
                    <th class="wd-40p">Name</th>
                    <th class="wd-40p">Email</th>
                    <th class="wd-20p">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><a href="{{ route('admin.contact_request_detail', $item->id) }}" class="btn btn-dark btn-icon"><div><i class="fa fa-eye"></i></div></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('footer_scripts')
    <script src="{{ asset('admin/theme/lib/datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/theme/lib/datatables-responsive/js/dataTables.responsive.js') }}"></script>
    <script>
        $(function () {
            'use strict';
            $('#dataTable').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: ''
                }
            });
        });
    </script>
@endsection
