@extends('admin.layout.master')
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.contact_requests') }}">Contact Requests</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
        <h6 class="slim-pagetitle">Contact Request Detail</h6>
    </div>
    <div class="section-wrapper">
        <div class="form-layout form-layout-6">
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    First Name:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->first_name ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Last Name:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->last_name ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Email Address:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->email ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Mobile Number:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->mobile_number ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Country:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->country ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    How did you hear about us?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->how_did_you_hear_about_as ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Message:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $request->message ?? "--" }}
                </div>
            </div>
        </div>
    </div>
@endsection
