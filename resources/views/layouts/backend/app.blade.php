<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">--}}
    {{--    <meta name="author" content="Coderthemes">--}}
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon_1.ico')}}">
    <title>@yield('title') - {{ config('app.name', 'Doctor') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('topcss')
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="{{asset('backend/assets/js/modernizr.min.js')}}"></script>
    @stack('css')
    @stack('topjs')

</head>

<body class="fixed-left">
<div id="app">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
    @include('layouts.backendparts.topbar')
    <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

    @include('layouts.backendparts.leftsidebar')
    <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @yield('content')
            </div> <!-- content -->

            <footer class="footer">
                © 2020. All rights reserved.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
    @include('layouts.backendparts.rightbar')
    <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->
</div>
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<!-- Scripts -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('backend/assets/js/detect.js')}}"></script>
<script src="{{asset('backend/assets/js/fastclick.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('backend/assets/js/waves.js')}}"></script>
<script src="{{asset('backend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.scrollTo.min.js')}}"></script>



<script src="{{asset('backend/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.app.js')}}"></script>
@include('sweetalert::alert')
@stack('js')
</body>
</html>
