<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    

    <style>
        body {
  background: #efefef;
}

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border-top: 1px solid rgba(0,0,0,0.08);
  border-right: 1px solid rgba(0,0,0,0.1);
  border-bottom: 1px solid rgba(0,0,0,0.12);
  border-left: 1px solid rgba(0,0,0,0.08);
  box-shadow: 0 3rem 5rem -2rem rgba(0, 0, 0, 0.2);
}

.form-control {
  font-size: 16px;
  padding: 10px;
  box-sizing: border-box;
  height: auto;
  border-radius: 1px;
}
/* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  top: 26px;
  padding: 14px 30px 14px 20px;
  background-color: rgba(0,0,0,0.05);
  pointer-events: none;
  border-right: 1px solid rgba(0,0,0,0.1);
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}

/* add padding  */
.left-addon input  { padding-left:  65px; }

.form-signin input {
  margin-bottom:15px;
  height:44px;
}

.form-signin .forgot-password {
  display: block;
  padding-top:2px;
  padding-bottom:2px;
  margin-top:-8px;
  margin-bottom:30px;
  font-size:12px;
}

.account-signup {
  max-width: 380px;
  padding: 15px 35px;
  margin: 0 auto;
  background-color: rgba(0,0,0,0.1);
}
    </style>
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" method="Post" action="{{route('admin.store')}}">
            @csrf
          <h2 class="form-signin-heading">Register</h2>
      
          <div class="inner-addon left-addon">
            <label class="control-label">Name</label>
              <i class="glyphicon glyphicon-globe"></i>
              <input type="text" class="form-control" name="name" placeholder="" required="" autofocus=""/>
          </div>
          <div class="inner-addon left-addon">
             <label class="control-label">Email</label>
              <i class="glyphicon glyphicon-lock"></i>
              <input type="email" class="form-control" name="email" placeholder="" required="" autofocus=""/>
          </div>
          <div class="inner-addon left-addon">
            <label class="control-label">Password</label>
             <i class="glyphicon glyphicon-lock"></i>
             <input type="password" class="form-control" name="password" placeholder="" required="" autofocus=""/>
         </div>
           <a class="forgot-password" href="#">I forgot my password</a>   
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in!</button>
        </form>
        <p class="account-signup">Already have an account? <a href="{{route('admin.login')}}">Sign In here</a>
      </div>
      <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script src="{{ asset('assets/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('js/vendors.min.js')}}"></script>
    <script src="{{asset('js/pages/chat-popup.js')}}"></script>
      <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
      <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>
      <script type="text/javascript">
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
              </script>
</body>
</html>