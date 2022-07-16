<div class="form-layout">
    <div class="row mg-b-25">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                {!! Form::text('title', $category->title ?? old('title'), ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter title', 'data-validation' => 'required']) !!}
            </div>
        </div>
    </div>
    <div class="form-layout-footer">
        <button type="submit" class="btn btn-primary bd-0">@if(isset($category)) Update @else Submit @endif</button>
        <a href="{{ route('admin.categories') }}" class="btn btn-secondary bd-0">Cancel</a>
    </div>
</div>
