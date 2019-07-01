<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('inside/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Bellamy</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li class="active treeview">
                <a href="{!! url('inside/product/show-all') !!}">
                    <i class="fa fa-leaf"></i> <span>Sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('inside/product/show-all') !!}"><i class="fa fa-circle-o"></i>Danh sách</a></li>
                    <li><a href="{!! url('inside/product/add') !!}"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="{!! url('inside/product/show-all') !!}">
                    <i class="fa fa-clipboard"></i> <span>Bài viết</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('inside/article/show-all') !!}"><i class="fa fa-circle-o"></i>Danh sách bài viết</a></li>
                    <li><a href="{!! url('inside/article/add') !!}"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="{!! url('inside/product/show-all') !!}">
                    <i class="fa fa-check-square-o"></i> <span>Chứng chỉ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('inside/product/show-all') !!}"><i class="fa fa-circle-o"></i>Danh sách</a></li>
                    <li><a href="{!! url('inside/product/add') !!}"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="{!! url('inside/product/show-all') !!}">
                    <i class="fa fa-flag-checkered"></i> <span>Chuyên mục</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('inside/category/show-all') !!}"><i class="fa fa-circle-o"></i>Danh sách</a></li>
                    <li><a href="{!! url('inside/category/add') !!}"><i class="fa fa-circle-o"></i>Thêm mới</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>