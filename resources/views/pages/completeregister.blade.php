
@extends('layouts.loginmaster')

@section('title')
Complete Registeration
@endsection

@section('content')
<div class="site-wrap">

        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
    
    
        <header class="site-navbar py-1" role="banner">
    
          <div class="container">
            <div class="row align-items-center">
    
              <div class="col-6 col-xl-2">
                <h1 class="mb-0"><a href="{{ url('/') }}" class="text-black h2 mb-0">Client<strong>refill</strong></a></h1>
              </div>
    
              <div class="col-6 col-xl-2 text-right d-block">
    
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
    
              </div>
    
            </div>
          </div>
    
        </header>
    
    
    
    
        <div class="site-section bg-light">
          <div class="container">
            <div class="row">
    
              <div class="col-md-12 col-lg-8 mb-5">
                
                      @if ($errors->any())
                      <ul class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                @endif
    
    
                <form action="{{ route('completeregister')}}" method="POST" class="p-5 bg-white" id="clients" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    
                  <div id="personal">
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <img id="output" src="images/person_1.jpg" style="height: 100px;width: 100px;">
                      <input type="file" name="picture">
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="first_name">First Name</label>
                      <input type="text" id="first_name" name="firstname" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="middle_name">Middle Name</label>
                      <input type="text" id="middle_name" name="middlename" class="form-control" placeholder="Enter Middle Name">
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="lastname">Last Name</label>
                      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter your Last name">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="gender">Gender</label>
                      <select name="gender" id="" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>

                    </div>
                  </div>
    
                  <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                          <label class="font-weight-bold" for="country">Country</label>
                          <select name="country" id="" class="form-control">
                            <option value="Nigeria">Nigeria</option>
                            <option value="London">London</option>
                          </select>
                        </div>

                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="state">State</label>
                            <select name="state" id="" class="form-control">
                              <option value="Lagos">Lagos</option>
                              <option value="Anambra">Anambra</option>
                            </select>
      
                          </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="phone_number">Phone Number</label>
                      <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your phone number">
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="address">Home Address</label>
                      <textarea name="address" class="form-control" id="" cols="30" rows="3" placeholder="Enter your home address"></textarea>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary py-2 px-3" style="float:right;" value="SUBMIT">
                  {{-- <span style="float:right;" id="socialz" class="btn btn-primary py-2 px-3"><strong>Continue</strong></span><br> --}}
                </div>
                
                </form>
                
              </div>
    
              <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Contact Info</h3>
                  <p class="mb-0 font-weight-bold">Address</p>
                  <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
    
                  <p class="mb-0 font-weight-bold">Phone</p>
                  <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
    
                  <p class="mb-0 font-weight-bold">Email Address</p>
                  <p class="mb-0"><a href="#">youremail@domain.com</a></p>
    
                </div>
    
                <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">More Info</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                  <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    
      @include('partials.footer')
      </div>
@endsection
{{-- <script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script> --}}
{{-- <script>
        $(document).ready(function () {
          $(".clientz").toggleClass("actif");
          $(".profs").toggleClass("inactif");
          $(".profs").click(function(e) {
            e.preventDefault()
            $("#clients").hide();
            $("#professionals").show();
            $(".clientz").css("background-color", "#e3e1e1");
            $(".clientz").css("border-color", "#e3e1e1");
            $(".profs").css("background-color", "#26baee");
            $(".profs").css("border-color", "#26baee");
          })
          $(".clientz").click(function(e) {
            e.preventDefault()
            $("#professionals").hide();
            $("#clients").show();
            $(".profs").css("background-color", "#e3e1e1");
            $(".profs").css("border-color", "#e3e1e1");
            $(".clientz").css("background-color", "#26baee");
            $(".clientz").css("border-color", "#26baee");
          })
          $("#socialz").click(function(e) {
            e.preventDefault()
            $("#personal").hide();
            $("#socials").show();
          })
          $("#personalz").click(function(e) {
            e.preventDefault()
            $("#socials").hide();
            $("#personal").show();
          })
          $("#socialz-prof").click(function(e) {
            e.preventDefault()
            $("#personal-prof").hide();
            $("#biz").hide();
            $("#socials-prof").show();
          })
          $("#back-to-personal-prof").click(function(e) {
            e.preventDefault()
            $("#socials-prof").hide();
            $("#biz").hide();
            $("#personal-prof").show();
          })
          $("#biz-prof").click(function(e) {
            e.preventDefault()
            $("#socials-prof").hide();
            $("#personal-prof").hide();
            $("#biz").show();
          })
          $("#back-to-social-prof").click(function(e) {
            e.preventDefault()
            $("#biz").hide();
            $("#personal-prof").hide();
            $("#socials-prof").show();
          })
      
        });
        </script>
       --}}