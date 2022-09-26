@extends('admin.layout.master')
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.email_templates') }}">Email Templates</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
        <h6 class="slim-pagetitle">Edit Email Template</h6>
    </div>
    <div class="section-wrapper">
        @include('admin.layout.partials.flash_messages')
        <form method="POST" action="{{ route('admin.email_template.update', $template->id) }}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Subject: <span class="tx-danger">*</span></label>
                            {!! Form::text('subject', $template->subject ?? old('subject'), ['class' => 'form-control', 'placeholder' => 'Enter Subject', 'data-validation' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Variables</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(config('emailvariables')[$template->identifier] as $key => $value)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            {!! Form::textarea('content', $template->content ?? old('content'), ['class' => 'form-control wysiwyg_editor']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-primary bd-0">Update</button>
                    <a href="{{ route('admin.email_templates') }}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
