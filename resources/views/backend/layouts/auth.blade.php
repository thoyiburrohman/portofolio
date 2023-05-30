<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="My Admin Template" name="description" />
    <meta content="Thoyiburrohman" name="author" />
    <meta name="token" content="{{ csrf_token() }}" />

    <title>Dashboard | My Admin</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Library Css -->
    @stack('styles')
    <!-- End Library Css -->

    <!-- Required Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/cyan.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- End Required Css -->




</head>

<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">


            @yield('content')

        </div>

    </div>

    <!-- Right Sidebar -->
    @include('backend.partials.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Required JS -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min') }}.js"></script>
    <!-- End Required JS -->

    <!-- Library JS -->
    @stack('scripts')
    <!-- End Library JS -->

    <!-- Init JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End Init JS -->

</body>

</html>
