@extends('admin.layout.master')
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.categories') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
        <h6 class="slim-pagetitle">Edit Category</h6>
    </div>
    <div class="section-wrapper">
        @include('admin.layout.partials.flash_messages')
        <form method="POST" action="{{ route('admin.category.update', $category->id) }}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @include('admin.categories.form')
        </form>
    </div>
@endsection
