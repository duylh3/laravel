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
                                        Code
                                        {{ DisplayColumnSort::show('category_code') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Chuyên mục
                                        {{ DisplayColumnSort::show('category_name') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Thời gian tạo
                                        {{ DisplayColumnSort::show('created_date') }}
                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Thời gian chỉnh sửa
                                        {{ DisplayColumnSort::show('modified_date') }}
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
                                    {{ $row->category_code}}
                                </td>
                                <td>
                                    {{ $row->category_name}}
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->created_date);
                                    echo $date->format('m-d-Y H:i a');
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $date = new DateTime($row->modified_date);
                                    echo $date->format('m-d-Y H:i a');
                                    ?>
                                </td>
                                <td align="center">
                                    <a  href="{!! url("/inside/{$controllerName}/edit/{$row->category_id}"); !!}"
                                        class="add-tooltip btn btn-primary btn-icon icon-lg btn-xs" data-placement="top"
                                        data-original-title="Chỉnh sửa"><i class="fa fa-pencil"></i>
                                    </a>
                                   <a href="javascript:void(0)" id="delete-user" data-id="{{$row->category_id }}" class="fa fa-remove delete-user">Delete</a></td>
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
<script type="text/javascript">
     $(document).ready(function () {
           $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('click', '.delete-user', function () {
        var user_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('/inside/category')}}"+'/'+user_id,
            success: function (data) {
                //s$("#user_id_" + user_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});    
</script>
@endsection