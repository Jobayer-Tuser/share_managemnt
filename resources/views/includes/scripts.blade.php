    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    
    
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    
    
    
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('js/plugins.min.js')}}"></script>
    <script src="{{asset('js/search.min.js')}}"></script>
    <!-- END THEME  JS-->
    
    
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('js/scripts/data-tables.min.js')}}"></script>
    <script src="{{asset('js/scripts/page-users.min.js')}}"></script>
    
    @stack('script')