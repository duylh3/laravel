<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"        >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Bưởi Cam</title    >
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset('inside/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('inside/plugins/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset('inside/plugins/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('inside/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset('inside/css/skins/_all-skins.min.css')}}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{asset('inside/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('inside/plugins/bootstrap-daterangepicker/daterangepicker.css')}}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{asset('inside/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="{{asset('inside/plugins/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('inside/plugins/ckfinder/ckfinder.js')}}"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('inside::layouts.header')
            @include('inside::layouts.sidebar')
            <div class="content-wrapper">
                @yield('content')
                <section class="content-header">

                </section>

            </div>
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- jQuery 3 -->
        <script src="{{asset('inside/plugins/jquery/dist/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('inside/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
$.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset('inside/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- daterangepicker -->
        <script src="{{asset('inside/plugins/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('inside/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <!-- datepicker -->
        <script src="{{asset('inside/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('inside/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <!-- Slimscroll -->
        <script src="{{asset('inside/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('inside/plugins/fastclick/lib/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('inside/js/adminlte.min.js')}}"></script>
        <!--         AdminLTE dashboard demo (This is only for demo purposes) 
                <script src="{{asset('inside/js/dashboard.js')}}"></script>
                 AdminLTE for demo purposes 
                <script src="{{asset('inside/js/demo.js')}}"></script>-->
    </body>
    @yield('script')
</html>