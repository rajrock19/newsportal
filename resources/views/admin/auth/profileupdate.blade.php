@extends('admin.layouts.default');
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Profile </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Profile</h4>
                </div>
                <div class="card-body">
                    <form class="form-valide" id="myForm" action="{{ route('admin.profile.update') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter name" value={{auth()->user()->name}}>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Enter name" value={{auth()->user()->email}}>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        placeholder="" value={{auth()->user()->mobile}}>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Image <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" name="image" id="image" class="form-control"
                                        placeholder="Enter name" value="">
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name"> <span class="text-danger">*</span></label>
                                <div class="input-group">
                            <img src="{{ asset('upload/adminmages/' . auth()->user()->image) }}"  id="showimage" alt="">
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
@push('scripts')
<script>
    $(document).ready(function(){
        $('#image').change(function(e){
           var reader =new FileReader();
           reader.onload = function(e){
            $('#showimage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endpush