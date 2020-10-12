<!DOCTYPE html>
<!--
Author : ADN Digital -> Jobayer Al Mahmud Tuser
Company Websiste: http://adndigital.com.bd
Personal Website : http://jobayertuser.tk
-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'Project Tracker')}}</title>
    <link rel="apple-touch-icon" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    
    
    
    <!--START: Datatable Css-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
    <!--End: Datatable Css-->
    
    
    <!-- END: VENDOR CSS-->
    
    
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.min.css')}}">

    
    
    
    <!-- END: Page Level CSS-->
    
    
    
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
    
    @stack('css')
    
  </head>
  <!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

        @include('includes.top-nav')
        
        @include('includes.left-nav')
            <!-- BEGIN: Page Main-->
        <div id="main">
          <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
                <div class="col s12">
                    <div class="container">
            
                        @yield('content')
                    
                    </div>
                    
                  <div class="content-overlay"></div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->
                
        @include('includes.settings')

        @include('includes.footer')

        @include('includes.scripts')
   
    <!-- END PAGE LEVEL JS-->
  </body>
</html>