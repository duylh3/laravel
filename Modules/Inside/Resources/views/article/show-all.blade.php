@extends('inside::layouts.master')
@section('content')

    <style>
        .table.table-hover thead tr th:nth-child(1)
        {
            width: 10%;
        }
        .table.table-hover thead tr th:nth-child(2)
        {
            width: 20%;
        }
        .table.table-hover thead tr th:nth-child(3)
        {
            width: 40%;
        }
        .table.table-hover thead tr th:nth-child(4),
        .table.table-hover thead tr th:nth-child(5),
        .table.table-hover thead tr th:nth-child(7)
        {
            width: 8%;
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
                                        Chuyên mục
                                        {{ DisplayColumnSort::show('category_id') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Tiêu đề
                                        {{ DisplayColumnSort::show('article_title') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Mô tả
                                        {{ DisplayColumnSort::show('article_description') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Thời gian tạo
                                        {{ DisplayColumnSort::show('date_created') }}
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
                                    {{ $row->category_name}}
                                </td>
                                <td>
                                    {{ $row->article_title }}
                                </td>
                                <td>
                                    {{ $row->article_description }}
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->date_created);
                                    echo $date->format('m-d-Y');
                                    ?>
                                </td>
                                <td align="center">
                                    <a  href="{!! url("/inside/{$controllerName}/edit/{$row->article_id}"); !!}"
                                        class="add-tooltip btn btn-primary btn-icon icon-lg btn-xs" data-placement="top"
                                        data-original-title="Chỉnh sửa"><i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{!! "/inside/{$controllerName}/remove" !!}"
                                       class="isConfirmDeleted add-tooltip btn btn-danger btn-icon icon-lg btn-xs"
                                       data-placement="top" data-original-title="Xóa">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        $('.isConfirmDeleted').click(function (event) {
        event.preventDefault();
        var r = confirm("Bạn chắc chắn xác nhận hành động này?");
        if (r == true) {
            var eleClicked = $(this); 
            $.ajax({
                type: 'GET',
                url: '/inside/article/remove',
                data: {id: 1},
                           success:function(data){
                                console.log('1')
           }
            });
        }});
    </script>
@endsection