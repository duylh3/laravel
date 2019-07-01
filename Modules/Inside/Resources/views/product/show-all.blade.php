@extends('inside::layouts.master')
@section('content')
     <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo $title ?></h1>
    </div>
    <div id="page-content">
        <div class="panel">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-left">
                            <a  href="{!! url("inside/{$controllerName}/add"); !!}" class="btn btn-primary btn-labeled fa fa-plus"> Thêm mới</a>
                            <button style="display: none" type="button" class="btn btn-default btn-labeled fa fa-remove remove" url="{!! "/{$controllerName}/remove" !!}">
                                Xóa
                            </button>
                        </div>
                    </div>
                    <div class="fixed-table-container">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <div class="th-inner">
                                        Tên sản phẩm
                                        {{ DisplayColumnSort::show('product_name') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Giá
                                        {{ DisplayColumnSort::show('product_price') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Mô tả
                                        {{ DisplayColumnSort::show('product_description') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Thời gian tạo
                                        {{ DisplayColumnSort::show('date_created') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Thời gian chỉnh sửa
                                        {{ DisplayColumnSort::show('date_modified') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">Action</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginate as $row)
                            <tr>
                                <td>
                                    {{ $row->product_name }}
                                </td>
                                <td>
                                    {{ $row->product_price }}
                                </td>
                                <td>
                                    {{ $row->product_description }}
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->date_created);
                                    echo $date->format('m-d-Y');
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->date_modified);
                                    echo $date->format('m-d-Y');
                                    ?>
                                </td>
                                <td align="center">
                                    <a  href="{!! url("/inside/{$controllerName}/edit/{$row->product_id}"); !!}"
                                        class="add-tooltip btn btn-primary btn-icon icon-lg btn-xs" data-placement="top"
                                        data-original-title="Chỉnh sửa"><i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{!! "/inside/{$controllerName}/delete/{$row->product_id}" !!}"
                                       class="isConfirmDeleted add-tooltip btn btn-danger btn-icon icon-lg btn-xs"
                                       data-placement="top" data-original-title="Xóa">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-6">
                               
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <script>
        $('.note').click(function(){
            $.get($(this).attr('data-href'), {}, function (data) {
                $('#otherContents .modal-body').html(data);
            });
        })

        $('.number-applied').click(function(){
            $.get($(this).attr('data-href'), {}, function (data) {
                $('#listApplicants .modal-body').html(data);
            });
        })
    </script>


@endsection