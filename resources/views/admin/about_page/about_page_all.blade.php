@extends('admin.layouts.default');
@section('content')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">About Page </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Page</h4>
                </div>
                <div class="card-body">
                    <form class="form-valide" id="myForm" action="{{ route('admin.homeslider.update') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="id" value="{{$about->id}}">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Enter name" value="{{$about->title}}">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Short Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="short_title" id="short_title" class="form-control"
                                        placeholder="Enter name" value="{{$about->short_title}}">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Short Description<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea type="text" name="short_description" id="short_description" class="form-control"
                                        placeholder="Enter name" value="">{{$about->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label> Long Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="long_description" name="long_description" placeholder="Enter Description" ></textarea>

                            </div>
                            {{-- <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Long Description<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="long_description" id="long_description" class="form-control"
                                        placeholder="Enter name" value="{{$about->long_description}}">
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-xl-12 col-xxl-12 form-group">
                                <label for="name">Aboout Image<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" name="about_image" id="about_image" class="form-control"
                                        placeholder="Enter name" value="{{$about->long_description}}">
                                </div>
                            </div>
                            <div class="col-md-2 col-xl-2 col-xxl-2 form-group">
                                <label for="name"> <span class="text-danger">*</span></label>
                                <div class="input-group">
                            <img src="{{(!empty($about->about_image))? url($about->about_image):url('upload/no_image.jpg')}}"  height="150px" width="200px" id="showimage" alt="">
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
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#about_image').change(function(e){
           var reader =new FileReader();
           reader.onload = function(e){
            $('#showimage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
        })
    });


    $(function(){
    $('textarea[name="long_description"]').summernote({
        placeholder: 'Enter Description...',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    $(".form-valide").validate({
        ignore: [],
        errorClass: "invalid-feedback animated fadeInUp",
        errorElement: "div",
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
    });
});

</script>
@endpush