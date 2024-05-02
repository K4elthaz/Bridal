<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>{{ config('app.name') }} | {{$page['title']}}</title>
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">

    <link href="/css/fonts.css" rel="stylesheet" />
    <link href="/vendor/soft_ui/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/vendor/soft_ui/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="/vendor/soft_ui/assets/css/nucleo-svg.css" rel="stylesheet" />

    {{-- datatables --}}
	<link rel="stylesheet" href="/vendor/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/vendor/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="/vendor/datatables/datatables-buttons/css/buttons.bootstrap4.min.css">
    {{-- select 2 --}}

  	<link rel="stylesheet" href="/vendor/select2/select2/css/select2.min.css">
  	<link rel="stylesheet" href="/vendor/select2/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	{{-- <link rel="stylesheet" href="/vendor/soft_ui/assets/css/bootstrap.min.css"> --}}
    <link id="pagestyle" href="/css/modified.css" rel="stylesheet" />
    <link id="pagestyle" href="/css/app.css" rel="stylesheet" />
    <link id="pagestyle" href="/css/mobile_table.css" rel="stylesheet" />
        
    @yield('page_css')
</head>

<body class="g-sidenav-show bg-gray-100">

    @include('layouts.sidebar')
    <main class="main-content position-relative border-radius-lg " style="min-height: 500px;">
        @include('layouts.header')
        <div class="container">
            @yield('content')
        </div>
    </main>
    {{-- jquery --}}
    <script src="/vendor/soft_ui/assets/js/core/jquery.min.js"></script>
    {{-- <script src="/vendor/soft_ui/assets/js/modified/jquery_slim.min.js"></script> --}}
    {{-- Soft UI --}}
    <script src="/vendor/soft_ui/assets/js/core/popper.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/core/bootstrap.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    <script src="/vendor/soft_ui/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
    
    {{-- datatables --}}
    <script src="/vendor/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/vendor/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/vendor/datatables/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/vendor/datatables/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendor/datatables/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/vendor/datatables/datatables-buttons/js/buttons.colVis.min.js"></script>
    {{-- modal --}}
    <script src="/vendor/soft_ui/assets/js/modified/popper.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/modified/bootstrap4.min.js"></script>
    {{-- Custom JS --}}
    {{-- select2 --}}
    <script src="/vendor/select2/select2/js/select2.full.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('page_script')
</body>

</html>