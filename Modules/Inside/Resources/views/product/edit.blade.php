@extends('inside::layouts.master')
@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">{!! $title !!}</h1>
</div>

<ol class="breadcrumb">
    <li>
        <a href="{!! url("inside/{$controllerName}/show-all"); !!}">
           {!! $title !!}
    </a>
</li>
<li class="active">Chỉnh sửa</li>
</ol>
<div id="page-content">
    <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="panel">
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="product_name">
                        Loại sản phẩm
                    </label>
                    <div class="col-sm-5">
                        <select name='product_type_id' class='form-control'>
                            @foreach ($productTypes as $item)
                            @if($item->product_type_id == $object['product_type_id'])
                            <option value="{{$item->product_type_id}}" selected>{{$item->product_type_name}}</option>
                            @else
                            <option value="{{$item->product_type_id}}">{{$item->product_type_name}}</option>
                            @endif                          
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="product_name">
                        Tên sản phẩm
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="product_name" value="{{$object->product_name}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="image">
                        Hình ảnh
                    </label>
                    <?php
                    $path = '/upload/' . $object['image'];
                    ?>
                    <div class="col-sm-5">
                        <img id="image" style="width: 320px; height: 195px;" name="image" src="{!! $path !!}"/>
                        <input type='file' onchange="readURL(this);" name="image" />
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="product_price">
                        Giá tiền
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="product_price" value="{{$object->product_price}}" class="form-control col-sm-5">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="product_description">
                        Mô tả
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="product_description" value="{{$object->product_description}}" class="form-control col-sm-5">
                    </div>
                </div>	
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="product_content">
                        Nội dung
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="editor1" name="product_content">
                   			{{$object->product_content}}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary btn-labeled fa fa-save">Lưu</button>
                <button type="reset" class="btn btn-default btn-labeled fa fa-refresh">Hủy</button>
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