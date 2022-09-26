@extends('admin.layout.master')
@section('css')
    <link href="{{ asset('admin/theme/lib/datatables/css/jquery.dataTables.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email Templates</li>
        </ol>
        <h6 class="slim-pagetitle">Email Template List</h6>
    </div>
    <div class="section-wrapper">
        @include('admin.layout.partials.flash_messages')
        <div class="table-wrapper">
            <table id="dataTable" class="table display responsive nowrap">
                <thead>
                <tr>
                    <th class="wd-40p">Template</th>
                    <th class="wd-10p">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($templates as $item)
                    <tr>
                        <td>{{ \App\Models\EmailTemplate::IDENTIFIER[$item->identifier] }}</td>
                        <td>
                            <a href="{{ route('admin.email_template.edit', $item->id) }}" class="btn btn-info btn-sm" title="Edit">
                                <div><i class="fa fa-edit"></i></div>
                            </a>
                        </td>
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
