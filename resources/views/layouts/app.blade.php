{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>Corona Admin</title> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/css/vendor.bundle.base.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}"
        type="text/css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="assets/backend/vendors/jvectormap/jquery-jvectormap.css"
    type="text/css"> --}}
    {{-- <link rel="stylesheet" href="assets/backend/vendors/flag-icon-css/css/flag-icon.min.css"
    type="text/css"> --}}
    {{-- <link rel="stylesheet" href="assets/backend/vendors/owl-carousel-2/owl.carousel.min.css"
    type="text/css"> --}}
    {{-- <link rel="stylesheet" href="assets/backend/vendors/owl-carousel-2/owl.theme.default.min.css"
    type="text/css"> --}}
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    {{-- <link rel="stylesheet" href="assets/backend/css/style.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}" type="text/css">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/hilt.jpeg') }}" />

    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
    <div class="container-scroller">
        @include('layouts.sidenav')

        <div class="container-fluid page-body-wrapper">
            @include('layouts.navigation')
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- @yield('content') --}}
                    {{ $slot }}

                </div>
                @include('layouts.footer')
            </div>
        </div>



    </div>
    <script src="{{ asset('assets/backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script> --}}
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/backend/js/off-canvas.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/js/misc.js') }}"></script>
    {{-- <script src="assets/backend/js/settings.js"></script> --}}
    {{-- <script src=" assets/backend/js/todolist.js"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/backend/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
