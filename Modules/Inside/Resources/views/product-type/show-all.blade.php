@extends('inside::layouts.master')
@section('content')
    <?php
    $searchOptions = array(
        'category_name_search' => 'Tên quận huyện',
    );
    ?>
    <style>
        .table.table-hover thead tr th:nth-child(1)
        {
            width: 20%;
        }
        .table.table-hover thead tr th:nth-child(2),
        .table.table-hover thead tr th:nth-child(3)
        {
            width: 15%;
        }
        .table.table-hover thead tr th:nth-child(4),
        .table.table-hover thead tr th:nth-child(5),
        .table.table-hover thead tr th:nth-child(7)
        {
            width: 13%;
        }

        .table.table-hover thead tr th:nth-child(6)
        {
            width: 11%;
        }

    </style>
     <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo $title ?></h1>
    </div>

    <div id="page-content">
        <div class="panel">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-left">
                            <a  href="{!! url("inside/{$controllerName}/add"); !!}" class="btn btn-primary btn-labeled fa fa-plus">Thêm mới</a>
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
                                        Sản phẩm
                                        {{ DisplayColumnSort::show('product_type_name') }}
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
                                    {{ $row->product_type_name }}
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->date_created);
                                    echo $date->format('m-d-Y H:i a');
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->date_modified);
                                    echo $date->format('m-d-Y H:i a');
                                    ?>
                                </td>
                                <td align="center">
                                    <a  href="{!! url("/inside/{$controllerName}/edit/{$row->product_type_id}"); !!}"
                                        class="add-tooltip btn btn-primary btn-icon icon-lg btn-xs" data-placement="top"
                                        data-original-title="Chỉnh sửa"><i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{!! "/inside/{$controllerName}/delete/{$row->product_type_id}" !!}"
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