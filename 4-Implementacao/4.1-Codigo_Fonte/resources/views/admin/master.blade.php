<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Dentalsul</title>

    <link href="{{asset('admin/css/bootstrap.min.css', env('HTTPS'))}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-theme.css', env('HTTPS'))}}" rel="stylesheet">
    <link href="{{asset('admin/css/datepicker3.css', env('HTTPS'))}}" rel="stylesheet">
    <link href="{{asset('admin/css/styles.css', env('HTTPS'))}}" rel="stylesheet">

    <script src="{{asset('admin/js/lumino.glyphs.js', env('HTTPS'))}}"></script>

    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/html5shiv.js', env('HTTPS'))}}"></script>
    <script src="{{asset('admin/js/respond.min.js', env('HTTPS'))}}"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">
                <img src="{{ asset('admin/logo.png', env('HTTPS')) }}" height="30" style="margin-top:-4px;"/>
            </a>

            @include('admin.user_menu')

        </div>

    </div><!-- /.container-fluid -->
</nav>

@include('admin.sidebar')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield('content')
</div>    <!--/.main-->

<script src="{{asset('admin/js/jquery-1.11.1.min.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/chart.min.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/chart-data.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/easypiechart.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/easypiechart-data.js', env('HTTPS'))}}"></script>
<script src="{{asset('admin/js/bootstrap-datepicker.js', env('HTTPS'))}}"></script>

<script>
    //    $('#calendar').datepicker({});
    //
    //    !function ($) {
    //        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
    //            $(this).find('em:first').toggleClass("glyphicon-minus");
    //        });
    //        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    //    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
