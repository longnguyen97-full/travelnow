<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travelnow</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin-screen/vendor/fontawesome-free-6.2.0/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin-screen/css/sb-admin-2.min.css') }}" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body id="page-top">

<div id="app">
    <app-component></app-component>
</div>

@vite('resources/js/app.js')

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('admin-screen/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin-screen/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('admin-screen/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('admin-screen/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('admin-screen/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('admin-screen/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('admin-screen/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
