@extends('inside::layouts.master')
@section('content')
    <?php $title = "Loại sản phẩm" ?> 
    <ol class="breadcrumb">
        <li>
            <a href="{!! "/inside/{$controllerName}/show-all" !!}">
                {!! $title !!}
            </a>
        </li>
        <li class="active">Thêm mới</li>
    </ol>
    <div id="page-content">
        <form role="form" class="form-horizontal" method="post">
            @csrf
            <div class="panel">
                    <!--Panel body-->
                    <div class="panel-body">
                        <!--Tabs content-->
                                <div class="form-group">
                                        <label for="category_name" class="col-sm-2 control-label">Chuyên mục</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="category_name" class="form-control">      
                                        <span class="help-block has-error">{!! $errors->first("category_name") !!}</span>
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