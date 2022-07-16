@extends('admin.layout.master')
@section('css')
    <link href="{{ asset('admin/theme/lib/datatables/css/jquery.dataTables.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
        <h6 class="slim-pagetitle">Product List</h6>
    </div>
    <div class="section-wrapper">
        @include('admin.layout.partials.flash_messages')
        <div class="row">
            <div class="col-lg-12">
                <span class="pull-right float-right ml-auto">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-sm"
                       title="Add New">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                </span>
            </div>
        </div>
        <hr>
        <div class="table-wrapper">
            <table id="dataTable" class="table display responsive nowrap">
                <thead>
                <tr>
                    <th class="wd-40p">Title</th>
                    <th class="wd-10p">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-info btn-sm" title="Edit">
                                <div><i class="fa fa-edit"></i></div>
                            </a>
                            <a href="javascript:;" onclick="confirmDelete('{{ route("admin.product.delete",$item->id) }}')" class="btn btn-danger btn-sm" title="Delete">
                                <div><i class="fa fa-trash"></i></div>
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
