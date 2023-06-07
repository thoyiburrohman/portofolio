<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Thoyiburrohman" />
    <meta name="description" content="My Portofolio" />
    <meta name="token" content="{{ csrf_token() }}" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- title -->
    <title>Thoyiburrohman | @yield('title')</title>

    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- icon -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-5.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

</head>

<body>

    @yield('content')
    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('libs/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('js/pages/sweet-alerts.init.js') }}"></script>

    @stack('scripts')
</body>

</html>
