@extends('admin.layouts.default');
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Home Slider </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Home Slider</h4>
                </div>
                <div class="card-body">
                    <form class="form-valide" id="myForm" action="{{ route('admin.homeslider.update') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="id" value="{{$homeslide->id}}">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Enter name" value="{{$homeslide->title}}">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Short Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="short_title" id="short_title" class="form-control"
                                        placeholder="Enter name" value="{{$homeslide->short_title}}">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Home Slider <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" name="home_slide" id="home_slide" class="form-control"
                                        placeholder="Enter name" value="{{$homeslide->video_url}}">
                                </div>
                            </div>
                            <div class="col-md-2 col-xl-2 col-xxl-2 form-group">
                                <label for="name"> <span class="text-danger">*</span></label>
                                <div class="input-group">
                            <img src="{{(!empty($homeslide->home_slide))? url($homeslide->home_slide):url('upload/no_image.jpg')}}"  height="150px" width="200px" id="showimage" alt="">
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Video Url <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="video_url" id="video_url" class="form-control"
                                        placeholder="" value="{{$homeslide->video_url}}">
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
        $('#video_url').change(function(e){
           var reader =new FileReader();
           reader.onload = function(e){
            $('#showimage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endpush