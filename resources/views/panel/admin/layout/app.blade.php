<!DOCTYPE html>
<html lang="en">
<title>@yield('title',config('app.name').' Admin Dashboard')</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/public/template/admin/images/favicon.png">
    <link href="/public/template/admin/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/template/admin/css/nouislider.min.css">
    <link href="/public/template/admin/css/style.css" rel="stylesheet">
    <link href="/public/assets/admin/css/style.css" rel="stylesheet">
    <link href="/public/assets/admin/css/datatable.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    @yield('page_style','')
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="waviy">
        <span style="--i:1">L</span>
        <span style="--i:2">o</span>
        <span style="--i:3">a</span>
        <span style="--i:4">d</span>
        <span style="--i:5">i</span>
        <span style="--i:6">n</span>
        <span style="--i:7">g</span>
        <span style="--i:8">.</span>
        <span style="--i:9">.</span>
        <span style="--i:10">.</span>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="/" class="brand-logo">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="/public/files/images/logo.png">
                </div>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    {{--Chatbox--
        @include('admin.parts.inc_chatbox')
    --Chatbox--}}
    {{--Topnav--}}
    @include('panel.admin.parts.inc_topnav')
    {{--Topnav--}}

    {{--Sidenav--}}
    @include('panel.admin.parts.inc_sidebar')
    {{--Sidenav--}}


    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        @yield('main','')
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    {{--Footer--}}
    @include('panel.admin.parts.inc_footer')
    {{--Footer--}}


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="/public/template/admin/js/global.min.js"></script>
<script src="/public/template/admin/js/chart.bundle.min.js"></script>
<script src="/public/template/admin/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="/public/template/admin/js/apexchart.js"></script>
<script src="/public/template/admin/js/nouislider.min.js"></script>
<script src="/public/template/admin/js/wNumb.js"></script>

<!-- Datatable -->
<script src="/public/template/admin/js/jquery.dataTables.min.js"></script>
{{--<script src="/public/template/admin/js/jquery.dataTables.init.js"></script>--}}

<script src="/public/template/admin/js/custom.min.js"></script>
<script src="/public/assets/js/pitLib.js"></script>
<script src="/public/template/admin/js/dlabnav-init.js"></script>
{{--<script src="/public/template/panel/js/demo.js"></script>--}}
<script src="/public/template/admin/js/styleSwitcher.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    @if(Session::has('success'))
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
    @endif
    @if(Session::has('error'))
    Swal.fire({
        position: 'top-end',
        icon: 'danger',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
    @endif
</script>
@yield('page_script','')

</body>
</html>
