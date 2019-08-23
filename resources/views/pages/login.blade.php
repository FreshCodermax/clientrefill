@extends('layouts.loginmaster')

@section('title')
  Login
@endsection
@section('content')
<div class="site-wrap">
        <div class="site-section bg-light">
          <div class="container">
            <div class="row center">
              <div class="col-md-5" style="margin: auto">
    
    
                <form action="{{route('sigin')}}" method="POST" class="p-5 bg-white">
                        {{ csrf_field() }}
                  <div align="center">
                    <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Client<strong>refill</strong></a></h1>
                  </div><br>
                  <p style="text-align: center; font-size: 22px"><b>Welcome back</b></p><br>
                    <a href="new-post.html"><span class="bg-facebook btn btn-primary py-2 px-5 col-md-12"><i class="fab fa-facebook-square fb-icon"></i> <span class="fbicon"><b>Login with Facebook</b></span></span></a><br>
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
                      <input type="text" id="email" name="email" class="form-control" required placeholder="Email address or phone">
                      <input type="hidden" id="sec" class="form-control">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                    </div>
                  </div>
                  <div class="row form-group form-check">
                      <div class="col-md-12">
                   <label class="form-check-label">
                     <input class="form-check-input" type="checkbox" name="remember"><span class="remember">Remember me</span>
                   </label><strong><span class="forget"><a href="#">Forgot Password?</a></span></strong>
                  </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Login" id="submit" class="btn btn-primary py-2 px-5 col-md-12" >
                      <input type="submit" value="Please wait..." id="Please" class="btn btn-primary py-2 px-5 col-md-12" disabled style="display: none">
                    </div>
                  </div><br><hr>
                  <h6 style="text-align: center">Dont have an account? <a href="{{route('signup')}}">Sign up</a></h6>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection
