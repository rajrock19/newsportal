@extends('admin.layouts.default');
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                   <h3>Profile</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{auth()->user()->name}}</p>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
