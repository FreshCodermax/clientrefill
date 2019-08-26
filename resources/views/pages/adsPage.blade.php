
@extends('layouts.loginmaster')
@section('title')
    Post Ads
    
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
    @include('partials.header')

    <div class="site-section bg-light">
      <div class="container">
        <div class="alert" id="message" style="display: none"></div>
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form action="{{route('postads')}}" id="submit" enctype="multipart/form-data" method="POST">

              {{ csrf_field() }}
                

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Choose a name for your project</label>
                  <input type="text" id="project-name" name="projectname" class="form-control" placeholder="eg. Build me andriod app" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="jobcategory">Project category</label>
                  <select id="job-category" required name="jobcategory" class="form-control">
                    <option selected="selected">Select a category</option>
                    
                    @foreach ($cats as $cat)
                        <option value="{{$cat->catname}}">{{$cat->catname}}</option>
                    @endforeach
                    
                    
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="price_range" class="font-weight-bold">Price Range</label>
                  <select name="price_range" id="price_range" class="form-control">
                    <option selected="selected">Select Price Range</option>
                    
                    @foreach ($pricerange as $range)
                       <option value="{{$range->price_ranges}}">{{$range->price_ranges}}</option>
                    @endforeach
                    
                   
                    
                  </select>
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="price" class="font-weight-bold">Price</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="&#8358 20000" required>

                </div>

              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Tell us more about your project</label>
                  <textarea name="aboutproject" required class="form-control" id="about-project" cols="30" rows="4" placeholder="Describe your propose project: Start with a bit about yourself or your business, and include an overview of what you need done."></textarea>
                </div>
              </div>

              <label class="font-weight-bold" for="projectfile">Click browse to upload a file to better describe your ads</label>
              <input type="file" name="projectfile" id="file">
              <span class="alert" id="message" style="display: none"></span>
              
              {{--  <div class="butty">
                  <input  name="projectfile" type="file"/>
                <span class="buttin">Click browse to upload a file to better describe your ad<br> </span>
              </div>  --}}
              <br>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="skill">What skills are required?</label>
                  <textarea name="skill" required class="form-control" id="professions" cols="30" rows="4" placeholder="Enter up to 5 skills that best describe your project. e.g Web developement, Plumbing, Management, Chef, Engineering. Clientrefill will use these skills to find you experienced professionals."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">

                  <input type="submit" value="Post Request" class="btn btn-primary  py-2 px-5">
                 
                  
                  <input type="submit" id="please" value="Please wait..." class="btn btn-primary  py-2 px-5 hidden" disabled>
                </div>
              </div>


            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Recent Posts</h3>
              <p class="mb-0"><a href="#">Tiling Listing</a></p>
              <p class="mb-0"><a href="#">Carpentry Listing</a></p>
              <p class="mb-0"><a href="#">Medical Listing</a></p>
              <p class="mb-0"><a href="#">Project Management Listing</a></p>
              <p class="mb-0"><a href="#">Legal Listing</a></p>
              <p class="mb-0"><a href="#">Home Tutor Listing</a></p>
              <p class="mb-0"><a href="#">Corperate Strategist Listing</a></p>
              <p class="mb-0"><a href="#">Web Development Listing</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>


    
@endsection

@section('script')
<script src="{{URL::to('js/dropzone.js')}}"></script>
<script>
   $(document).ready(function() {
     $('#submit').on('submit' ,function(e) {
      e.preventDefault();
      var URL = $(this).attr('action');
      var errors = [];
      $.ajax({
        url: URL,
        method:"POST",
        data:new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data)
        {
          if(data.message == 0) {
            $('#login').modal('show');
            $('#message').hide();
          }else{
          $('#message').css('display', 'block');
          $('#message').html(data.message[0]);
          $('#message').addClass(data.class_name);
            
          }
          //console.log(data.message);
         



        }
        
      })
      
      
      
     })

     
   })
    </script>
@endsection
