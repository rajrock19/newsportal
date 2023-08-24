@extends('admin.layouts.default');
@section('content')
<div class="container">
    <div class="col-md-6">
        <div class="row">
            <div class="card">
                <div class="card-header">
                   <h3>Profile</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <p><h4 style="display: inline-block">Name:</h4>{{auth()->user()->name}}</p>
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <p><h4 style="display: inline-block">Email:</h4>{{auth()->user()->email}}</p>
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <img src="{{ asset('upload/adminmages/' . auth()->user()->image) }}" class="img-fluid rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle" alt="">
                        </div>
                        <hr>
                        <div class="col-md-6">
                           <a href="{{route('admin.profile.updatepage')}}" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
