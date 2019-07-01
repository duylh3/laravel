@extends('inside::layouts.master')
@section('content')
<?php $title = "Thêm bài viết" ?>
<ol class="breadcrumb">
    <li>
        <a href="{!! "/inside/{$controllerName}/show-all" !!}">
           {!! $title !!}
    </a>
</li>
<li class="active">Thêm mới</li>
</ol>
<div id="page-content">
    <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="panel">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="category_id">
                        Chuyên mục
                    </label>
                    <div class="col-sm-5">
                        <select name='category_id' class='form-control'>
                            @foreach ($categories as $item)
                            <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="article_title">
                        Tiêu đề
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="article_title" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="article_image">
                        Hình ảnh
                    </label>
                    <div class="col-sm-5">
                        <img id="image" name="article_image" src="#"/>
                        <input type='file' onchange="readURL(this);" name="image" />
                    </div>
                </div>   
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="article_description">
                        Mô tả
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="article_description" class="form-control col-sm-5">
                    </div>
                </div>	
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="article_content">
                        Nội dung
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="editor1" name="article_content"></textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary btn-labeled fa fa-save"> Lưu</button>
                <button type="reset" class="btn btn-default btn-labeled fa fa-refresh"> Hủy</button>
            </div>
    </form>
</div>

<script src="{{ asset('inside/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('inside/plugins/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('/inside/plugins/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('/inside/plugins/ckfinder/ckfinder.html?type=Images') }}',        
        filebrowserUploadUrl: '{{ asset('/inside/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',      
    } );
</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#image')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
            }
            }

</script>
@endsection