<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="My Admin Template" name="description" />
    <meta content="Thoyiburrohman" name="author" />
    <title>My Project | @yield('title')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Library Css -->
    @stack('styles')
    <!-- End Library Css -->
    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Required Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/cyan.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- End Required Css -->



    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (session()->has('pesan'))
        <div id="flash" data-flash="{{ session('pesan') }}">
        </div>
    @endif
    @if (session()->has('error'))
        <div id="flashError" data-flash="{{ session('error') }}">
        </div>
    @endif
    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- Header --}}
        @include('backend.partials.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.partials.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')

            @include('backend.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

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
    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('js/pages/sweet-alerts.init.js') }}"></script>
    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: flash
            })
        };
        var flashError = $('#flashError').data('flash');
        if (flashError) {
            Swal.fire({
                icon: 'warning',
                title: 'Gagal',
                text: flashError
            })
        };
        $('#btn-hapus').click(function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            });
        });
    </script>
    <!-- Init JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End Init JS -->

</body>

</html>
