<!doctype html>
<html lang="en">
    <head>
        @include('admin.layouts.includes.head')
    </head>
    <body>
        <!-- Begin page -->
        <div class="main-wrapper">
            @include('admin.layouts.includes.header')
            <!-- ========== Left Sidebar Start ========== -->
            <div class="sidebar" id="sidebar" style="top: 50px;">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                    <!--- Sidemenu -->
                    @include('admin.layouts.includes.sidebar-menu')
                    <!-- Sidebar -->
                  </div>
                </div>
              </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                  @yield('content')
              {{--  @include('admin.layouts.includes.footer') no footer for now --}}
            </div>
            <!-- end page-wrapper-->
        </div>
        <!-- END main-wrapper -->
        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script> -->
        <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
        {{-- <script type="text/javascript">
                @if(session()->has('error'))
                     toastr.error("", "{{ session()->get('error')}}", {
                                    positionClass: "toast-top-right",timeOut: 5000,
                                    closeButton: !0,debug: !1,newestOnTop: !0,
                                    progressBar: !0,preventDuplicates: !0,onclick: null,
                                    showDuration: "300",hideDuration: "1000",
                                    extendedTimeOut: "1000",showEasing: "swing",
                                    hideEasing: "linear",showMethod: "fadeIn",
                                    hideMethod: "fadeOut",tapToDismiss: !1
                                })
                    @endif
                    @if(session()->has('success'))
                       toastr.success("", "{{ session()->get('success')}}", {
                                    timeOut: 5000,closeButton: !0,
                                    debug: !1,newestOnTop: !0,
                                    progressBar: !0,positionClass: "toast-top-right",
                                    preventDuplicates: !0,onclick: null,
                                    showDuration: "300",hideDuration: "1000",
                                    extendedTimeOut: "1000",showEasing: "swing",
                                    hideEasing: "linear",showMethod: "fadeIn",
                                    hideMethod: "fadeOut",tapToDismiss: !1
                                })
                    @endif
        </script> --}}
     <script type="text/javascript">
      @if(Session::has('message'))
        var type ="{{Session::get('alert-type','info')}}"

        switch(type){
          case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
            case 'success':
            toastr.success("{{Session::get('message')}}");
            break;
            case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
            case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
        }
        @endif
     </script>
       
        @stack('scripts')
      {{--  @yield('footer') --}}
    </body>
</html>
