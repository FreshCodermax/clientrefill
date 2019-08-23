
@extends('layouts.signupmaster')

@section('content')
<div class="site-wrap">
        <div class="site-section bg-light">
          <div class="container">
            <div class="row center">
              <div class="col-md-5" style="margin: auto">
                
    
                <form action="{{ route('register')}}" method="POST" class="p-5 bg-white">
                        {{ csrf_field() }}
                  <div align="center">
                    <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Client<strong>refill</strong></a></h1>
                  </div><br>
                  <p style="text-align: center; font-size: 22px"><b>Sign Up</b></p><br>
                    <a href="new-post.html"><span class="bg-facebook btn btn-primary py-2 px-5 col-md-12"><i class="fab fa-facebook-square fb-icon"></i> <span style="padding-left:20px"><b>Continue with Facebook</b></span></span></a><br>
                  <div class="hr-divider"><span class="hr-divider-text">OR</span></div>
                  @if ($errors->any())
                  <ul class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            @endif
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="email" name="email" id="user-email" class="form-control" required placeholder="Email address">
                      <input type="hidden" id="sec" class="form-control">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="password" name="password" id="user-pass" class="form-control" required placeholder="Password">
                      <div id="pass-secure">
                        <span style="color: #3c763d; font-size: 13px"><i class="far fa-check-circle" style="font-size: 14px; color: #3c763d" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Your password is secure!</span>
                      </div>
                    </div>
                    <ul id="password-checker" style="display: none">
                   <li class="lower-check"><span id="lower-check" class="help-block" style="color: #737373; font-size: 13px; font-weight">One lower case character</span></li>
                  <li class="upper-check"><span id="upper-check" class="help-block" style="color: #737373;  font-size: 13px;">One upper case character</span></li>
                <li class="special-check"><span id="special-check" class="help-block" style="color: #737373; font-size: 13px" id="pass-error">One special character</span></li>
              <li class="digit-check"><span id="digit-check" class="help-block" style="color: #737373; font-size: 13px" id="pass-error">One number</span></li>
          <li class="long-check"><span id="long-check" class="help-block" style="color: #737373; font-size: 13px" id="pass-error">Minimum of 8 characters</span></li>
          </ul>
                  </div>
                  <div class="row form-group" id="password-matcher">
                    <div class="col-md-12">
                      <input type="password" name="password_confirmation" id="confirm-pass" class="form-control" required placeholder="Confirm password">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <div class="g-recaptcha hidden" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired" data-sitekey="6LfZGl0UAAAAAGYRHX2MHLhGUQTl7Cvs_GWq9HGU" id="g-recap" name ="g-recaptcha-response">
                      </div>
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Join Clientrefill" class="btn btn-primary py-2 px-5 col-md-12" >
                      <input type="submit" id="please" value="Please wait..." class="btn btn-primary py-2 px-5 col-md-12 hidden" disabled>
                    </div>
                  </div>
                  <p style="font-size: 13px">By registering you confirm that you accept the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                  <br><hr>
                  <h6 style="text-align: center">Already have an account? <a href="{{route('login')}}">Log In</a></h6>
    
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection
<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>