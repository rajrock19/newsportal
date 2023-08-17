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

    <li class= "{{ $url_2 == 'package' ? 'active' : '' }} {{ $url_2 == 'packages' ? 'active' : '' }}"><a href="{{route('admin.package.index')}}">
        <i class="fa fa-product-hunt"></i> <span >Packages</span> </span></a>

    </li>
   {{-- <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="#"><i class="fa fa-money"></i> <span >Booking Request</span></span></i>
        </a>
    </li>--}}
    <li class="{{ $url_2 == 'batches' ? 'active' : '' }}">
        <a href="{{route('admin.batches.index')}}"><i class="fas fa-clipboard"></i> <span >Batches</span></span></i>
        </a>
    </li>
    <li class="{{ $url_2 == 'appoinments' ? 'active' : '' }}">
        <a href="{{ route('admin.appointments.index') }}"><i class="feather-calendar me-1"></i>
            <span>Appointments</span> <span class="new-appointment-count badge badge-success"></span></a>
    </li>
      <li class= "{{ $url_2 == 'customer' ? 'active' : '' }} {{ $url_2 == 'instructor' ? 'active' : '' }} {{ $url_2 == 'dietitian' ? 'active' : '' }} {{ $url_2 == 'staff' ? 'active' : '' }}"><a href="#">
         <i class="fa fa-users"></i> <span >Member Management</span> <span class="menu-arrow"></span></a>
        <ul style="{{ $url_2 == 'customer' ? 'display: block;' : '' }} {{ $url_2 == 'instructor' ? 'display: block;' : '' }} {{ $url_2 == 'dietitian' ? 'display: block;' : '' }} {{ $url_2 == 'staff' ? 'display: block;' : '' }}">
        <li class="{{ $url_2 == 'customer' ? 'active' : '' }}">
            <a href="{{ route('admin.customer.index') }}"><i class="fa fa-users"></i> <span >Customers</span></a>
        </li>
        <li  class="{{ $url_2 == 'instructor' ? 'active' : '' }}">
            <a href="{{ route('admin.instructor.index') }}"><i class="fa fa-user"></i> <span >Instructors</span></a>
        </li>
        <li  class="{{ $url_2 == 'dietitian' ? 'active' : '' }}">
            <a href="{{ route('admin.dietitian.index') }}"><i class="fas fa-chalkboard-teacher"></i> <span >Dietitian</span></a>
        </li>
        <li  class="{{ $url_2 == 'dietyoga' ? 'active' : '' }}">
            <a href="{{ route('admin.dietyoga.index') }}"><i class="fas fa-utensils"></i>
                <span >DietYoga</span></a>
        </li>
        <li  class="{{ $url_2 == 'staff' ? 'active' : '' }}">
            <a href="{{ route('admin.staff.index') }}"><span class="fa-stack">
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
        <a href="{{ route('admin.user-subcriptions.index') }}"><i class="fa fa-money"></i> <span >Package Expired</span></span></i>
        </a>
      </li>
      <li class="{{ $url_2 == 'transaction' ? 'active' : '' }}">
        <a href="{{ route('admin.user-transaction.index') }}"><i class="fa fa-money"></i> <span >Transactions</span></span></i>
        </a>
      </li>
      {{-- <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="#"><i class="fa fa-file-text-o"></i> <span >Report</span></span></i>
        </a>
      </li>--}}

    {{-- <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="#"><i class="fa fa-envelope-square"></i> <span >Newsletter</span></span></i>
        </a>
    </li>
   <li class="{{ $url_2 == '' ? 'active' : '' }}">
        <a href="#"><i class="fa fa-key"></i> <span >Roles and Permissions</span></span></i>
        </a>
    </li>--}}
{{--
     <li class= "{{ $url_2 == 'instructor' ? 'active' : '' }}">
        <a href="#"><i class="feather-user-plus"></i> <span >Instructors</span><span class="menu-arrow"></span></a>
        <ul style="{{ $url_2 == 'instructor' ? 'display: block;' : '' }}">
        <li class="{{ $url_2 == 'instructor' ? 'active' : '' }}">
        <a href="{{ route('admin.instructor.index') }}"><i class="feather-user-plus"></i> <span >Instructor</span></a>
        </li>


        </ul>
    </li> --}}
   {{-- <li class="{{ $url_2 == 'patient' ? 'active' : '' }}">
        <a href="{{ route('admin.customer.index') }}"><i class="feather-users"></i> <span >Customers</span></a>
    </li>--}}
    <li class="{{ $url_2 == 'banner' ? 'active' : '' }}">
        <a href="{{ route('admin.banner.index') }}"><i class="fab fa-bimobject"></i> <span >Banner</span></a>
    </li>

    <li class="{{ $url_2 == 'category' ? 'active' : '' }}">
        <a href="{{url('admin/category')}}"><i class="fa fa-caret-square-o-up"></i> <span >Category</span></span></i>
        </a>
    </li>

    {{--<li class="{{ $url_2 == 'time' ? 'active' : '' }}">
        <a href="{{ route('admin.nutrition_time.index') }}"><i class="fa fa-caret-square-o-up"></i> <span >Nutrition Time Table</span></span></i>
        </a>
    </li>--}}

    <li class="{{ $url_2 == 'explore' ? 'active' : '' }}">
        <a href="{{url('admin/explore/program')}}"><i class="fa fa-caret-square-o-up"></i> <span >Explore Program</span></span></i>
        </a>
    </li>
    <li class="{{ $url_2 == 'program' ? 'active' : '' }}">
        <a href="{{url('admin/requirement/program')}}"><i class="fa fa-tasks"></i> <span >Requirement Program</span></span></i>
        </a>
    </li>
    <li class="{{ $url_2 == 'food' ? 'active' : '' }}">
        <a href="{{url('admin/food')}}"><i class="fas fa-hamburger"></i> <span>Food</span></span></i>
        </a>
    </li>
    <li class="{{ $url_2 == 'allergy' ? 'active' : '' }}">
        <a href="{{route('admin.allergy.index')}}"><i class="fas fa-allergies"></i> <span>Allergy</span></span></i>
        </a>
    </li>
    {{--<li class="{{ $url_2 == 'report' ? 'active' : '' }}">
        <a href="{{route('admin.customerpdf.report')}}"><i class="fa fa-file"></i> <span>Report</span></span></i>
        </a>
    </li>--}}
    <li class="{{ $url_2 == 'settings' ? 'active' : '' }} {{ $url_2 == 'specialist' ? 'active' : '' }}{{ $url_2 == 'page' ? 'active' : '' }}">
        <a href=#><i class="fa fa-cog" ></i> <span>Settings</span><span class="menu-arrow"></span></i>
        </a>
        <ul style="{{ $url_2 == 'settings' ? 'display: block;' : '' }} {{ $url_2 == 'specialist' ? 'display: block;' : '' }}{{ $url_2 == 'page' ? 'display: block;' : '' }}">
         <li class="{{ $url_2 == 'settings' ? 'active' : '' }}">
                <a href="{{ route('admin.general_setting.index') }}"><i class="fa fa-sliders" ></i><span>General</span></a>
            </li>
			<li class="{{ $url_2 == 'page' ? 'active' : '' }}">
                <a href="{{ route('admin.page.index') }}"><i class="fa fa-file-text" ></i><span>Pages</span></a>
            </li>

        </ul>
      </li>



</ul>

@push('scripts')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function () {
        // Send an Ajax request to retrieve the new appointment count
        $.ajax({
            type: 'GET',
            url: '{!! route('admin.appointments.getNewAppointmentCount') !!}',    //'/admin/appointments/new-count',
            _method: 'getNewAppointmentCount',
            dataType: 'json',
            success: function (data) {
                // Update the count in the sidebar
                $('.new-appointment-count').text(data.newAppointmentCount);
                $('.new-appointment-count').show();
            },
            error: function (xhr, status, error) {
                // Handle errors here
                console.log('Error:', error);
            }
        });
    });
</script>

{{-- @endpush
$.ajax({
    type: 'post',
    url: '{!! route('admin.nutrition_time.destroy', '+id+') !!}',
    data: {
        _token: '{{ csrf_token() }}',
        _method: 'delete',
        id: id
    }, --}}
