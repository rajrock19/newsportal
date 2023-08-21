@php
    $url_1= $url_2=0;
    $url = request()->route()->uri;
    $url = explode('/', $url);
    if(count($url) > 1){
        $url_1 = $url[0];
        $url_2 = $url[1];
    }elseif(count($url) == 1){

    }
@endphp

<ul>
    <!-- <li class="menu-title"><span>Main</span></li> -->
    <li class="{{ $url_1 == '0' && $url_2 == '0'  ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
    </li>

    {{-- <li class= "{{ $url_2 == 'package' ? 'active' : '' }} {{ $url_2 == 'packages' ? 'active' : '' }}"><a href="#">
        <i class="feather-package"></i> <span >Package</span></a> --}}
        {{-- <ul style="{{ $url_2 == 'package' ? 'display: block;' : '' }} {{ $url_2 == 'packages' ? 'display: block;' : '' }}"> --}}
            {{-- <li class="{{ $url_2 == 'package' ? 'active' : '' }}">
                <a href="{{ route('admin.package.index') }}"><span >Package</span></a>
            </li> --}}
          {{--  <li  class="{{ $url_2 == 'packages' ? 'active' : '' }}">
                <a href="{{ route('admin.package-activation.index') }}"><span >Package Activation</span></a>
            </li>--}}
        {{-- </ul> --}}
    {{-- </li> --}}

    <li class= "{{ $url_2 == 'package' ? 'active' : '' }} {{ $url_2 == 'packages' ? 'active' : '' }}"><a href="">
        <i class="fa fa-product-hunt"></i> <span >Packages</span> </span></a>

    </li>
   {{-- <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="#"><i class="fa fa-money"></i> <span >Booking Request</span></span></i>
        </a>
    </li>--}}
    <li class="{{ $url_2 == 'batches' ? 'active' : '' }}">
        <a href=""><i class="fas fa-clipboard"></i> <span >Batches</span></span></i>
        </a>
    </li>
    <li class="{{ $url_2 == 'appoinments' ? 'active' : '' }}">
        <a href=""><i class="feather-calendar me-1"></i>
            <span>Appointments</span> <span class="new-appointment-count badge badge-success"></span></a>
    </li>
      <li class= "{{ $url_2 == 'customer' ? 'active' : '' }} {{ $url_2 == 'instructor' ? 'active' : '' }} {{ $url_2 == 'dietitian' ? 'active' : '' }} {{ $url_2 == 'staff' ? 'active' : '' }}"><a href="#">
         <i class="fa fa-users"></i> <span >Member Management</span> <span class="menu-arrow"></span></a>
        <ul style="{{ $url_2 == 'customer' ? 'display: block;' : '' }} {{ $url_2 == 'instructor' ? 'display: block;' : '' }} {{ $url_2 == 'dietitian' ? 'display: block;' : '' }} {{ $url_2 == 'staff' ? 'display: block;' : '' }}">
        <li class="{{ $url_2 == 'customer' ? 'active' : '' }}">
            <a href=""><i class="fa fa-users"></i> <span >Customers</span></a>
        </li>
        <li  class="{{ $url_2 == 'instructor' ? 'active' : '' }}">
            <a href=""><i class="fa fa-user"></i> <span >Instructors</span></a>
        </li>
        <li  class="{{ $url_2 == 'dietitian' ? 'active' : '' }}">
            <a href=""><i class="fas fa-chalkboard-teacher"></i> <span >Dietitian</span></a>
        </li>
        <li  class="{{ $url_2 == 'dietyoga' ? 'active' : '' }}">
            <a href=""><i class="fas fa-utensils"></i>
                <span >DietYoga</span></a>
        </li>
        <li  class="">
            <a href=""><span class="fa-stack">
                <i class="fas fa-users fa-stack-1x"></i>
                <i class="fas fa-plus fa-stack-2x"></i>
                </span>
                <span >Add Staff</span></a>
        </li>
        </ul>
       </li>
     {{-- <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="{{ route('admin.banner.index') }}"><i class="fab fa-bimobject"></i> <span >Attendance</span></a>
      </li> --}}
      <li class="{{ $url_2 == 'transaction' ? 'active' : '' }}">
        <a href=""><i class="fa fa-money"></i> <span >Package Expired</span></span></i>
        </a>
      </li>
      <li class="{{ $url_2 == 'transaction' ? 'active' : '' }}">
        <a href=""><i class="fa fa-money"></i> <span >Transactions</span></span></i>
        </a>
      </li>
 

   





</ul>

@push('scripts')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
