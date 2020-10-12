<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=" {{asset('plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('dist/css/adminlte.min.css')}} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- top nav -->
            @include('includes.top-nav')
        <!-- top nav -->

        <!-- left nav -->
        @include('includes.left-nav')
        <!-- left nav -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!--main content -->
            @yield('content')
            <!--main content -->
        </div>
        <!-- Content Wrapper. Contains page content -->

        <!--main content -->
        @include('includes.settings')
        <!-- main content -->

        <!-- foter here -->
        @include('includes.footer')
        <!-- foter here -->


    </div>
   <!-- Scripts here -->
   @include('includes.scripts')

   <!-- Scripts here -->
</body>
</html>
