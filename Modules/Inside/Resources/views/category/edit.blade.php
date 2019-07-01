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
                    <label class="col-sm-2 control-label" for="category_name">
                        Chuyên mục
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="category_name" value="{{$object->category_name}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary btn-labeled fa fa-save">Lưu</button>
                <button type="reset" class="btn btn-default btn-labeled fa fa-refresh">Hủy</button>
            </div>
    </form>
</div>
@endsection