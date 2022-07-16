<div class="form-layout">
    <div class="row mg-b-25">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                {!! Form::select('category_id', $categories, $product->category_id ?? old('category_id'), ['class' => 'form-control select2', 'placeholder' => '', 'data-validation' => 'required']) !!}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                {!! Form::text('title', $product->title ?? old('title'), ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter title', 'data-validation' => 'required']) !!}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label">Slug: <span class="tx-danger">*</span></label>
                {!! Form::text('slug', $product->slug ?? old('slug'), ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Enter slug', 'data-validation' => 'required']) !!}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Short Description: <span class="tx-danger">*</span></label>
                {!! Form::textarea('short_description', $product->short_description ?? old('short_description'), ['class' => 'form-control', 'placeholder' => 'Enter short content', 'data-validation' => 'required', 'rows' => 3]) !!}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                {!! Form::textarea('description', $product->description ?? old('description'), ['class' => 'form-control wysiwyg_editor']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                <input type="file" accept="image/*" class="file-upload dropify" data-show-remove="false"
                       @if(isset($product->image)) data-default-file="{{ showProductImage($product->image) }}" @endif
                       name="image" data-validation="@if(!isset($product->image)) required @endif mime size"
                       data-validation-allowing="jpg, png, jpeg" data-validation-max-size="2M"/>
            </div>
        </div>
    </div>
    <div class="form-layout-footer">
        <button type="submit" class="btn btn-primary bd-0">@if(isset($product)) Update @else Submit @endif</button>
        <a href="{{ route('admin.products') }}" class="btn btn-secondary bd-0">Cancel</a>
    </div>
</div>
@section('footer_scripts')
    <script>
        $(function () {
            'use strict';
            /* SET SLUG ON LOST FOCUS OF TITLE WITH SLUG CONDITIONS */
            $("#title").focusout(function (i, d) {
                var title = $.trim($("#title").val());
                if (title.length > 0) {
                    title = title.toLowerCase();
                    title = title.replace(/[^a-z0-9\s]/gi, '').replace(/  +/g, ' ').replace(/[_\s]/g, '-');
                    if (title.length > 60) {
                        title = title.substring(0, 59).replace(/-+$/, '');
                        $(".slug-error").text("Maximum length of slug is 60");
                    } else {
                        $(".slug-error").text("");
                    }
                }
                $("#slug").val(title);
            });

            /* CONVERT TO LOWER CASE ON SLUG LOST FOCUS */
            $("#slug").focusout(function (e) {
                var slug = $.trim($("#slug").val().toLowerCase());
                $("#slug").val(slug);
            });

            /* ALLOW ONLY LOWER CASE, UPPER CASE AND NUMERIC ON SLUG KEY PRESS */
            $("#slug").keypress(function (e) {
                var regex = new RegExp("^[A-Za-z0-9-]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }
                e.preventDefault();
                return false;
            });
        });
    </script>
@endsection
