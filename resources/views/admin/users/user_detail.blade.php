@extends('admin.layout.master')
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users') }}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
        <h6 class="slim-pagetitle">User Detail</h6>
    </div>
    <div class="section-wrapper">
        <div class="form-layout form-layout-6">
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Name:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->name ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Email Address:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->email ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Plan:
                </div>
                <div class="col-7 col-sm-8">
                    {{ \App\Models\User::PLAN[$user->plan_type] ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Country:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->countryDetail->name ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Mobile Number:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->mobile_number ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Whatsapp Number:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->whatsapp_number ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Preferred Communication Mode:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->preferred_communication_mode ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Company Name:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->company_name ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Job Title:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->job_title ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Importer Exporter Code (IEC):
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->iec_code ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Business Identification Number (BIN):
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->bin_code ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    What is the type of your business?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->type_of_business ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    How long have you been in business?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->how_long_in_business ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Nature of business?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->nature_of_business ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Category of collection?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->category_of_collection ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    What is the price point of the brand?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->brand_price_point ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    On which month do you start sourcing for S/S?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->which_month_start_sourcing_for_ss ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    On which month do you start sourcing for F/W?:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->which_month_start_sourcing_for_fw ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Business Description:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->business_description ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Company Website:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->company_website ?? "--" }}
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Company Instagram:
                </div>
                <div class="col-7 col-sm-8">
                    {{ $user->company_instagram_url ?? "--" }}
                </div>
            </div>
        </div>
    </div>
@endsection
