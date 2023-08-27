@extends('admin.layouts.default');
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Password </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                </div>
                <div class="card-body">

                    @if(count($errors))
                    @foreach($errors->all() as $error)
                    <p class="alert alert-danger  alert-dismissible fade show">{{$error}}</p>
                    @endforeach
                    @endif
                    <form class="form-valide" id="myForm" action="{{ route('admin.changepassowrd.update') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Old Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="old_password" id="old_password" class="form-control"
                                        placeholder="Enter your old password" value="">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">New Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="new_password" id="password" class="form-control"
                                        placeholder="Enter New Password" value="">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Confrim Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="confirm_password" id="confirm_password" class="form-control"
                                        placeholder="Enter Confrim Password" value="">
                                </div>
                            </div>
                   
                            <div class="text-end">
                                <a href="{{ route('admin.profile.show') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
