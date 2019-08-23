@extends('layouts.indexmaster')

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
  {{-- <script src="js/header.js"></script> --}}
    <div class="site-blocks-cover section1"  data-aos="fade" data-stellar-background-ratio="0.5" >
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-12">
            <h1 class="mb-2 text-white"><span class="frontText">You've got a product or service?<br>
			Grow your sales &amp; clients.</span></h1>

            <h2 class="mb-2 text-white perfectbiz" style="float:left;">Find a perfect business or service provider for your products &amp; services.</h2><br>
            <p class="mb-2 text-white w-75 hidden" id="iam">I want</p><br>
            <p class="mb-2 text-white w-75 hidden" id="ineed">I need</p>
            <div class="job-search" style="padding-top:20%">
			<span class="btn butt-index first-butt hidden1" id="clientt"><b>I want a product</b></span>
			<span class="btn butt-index second-butt hidden1" id="proff"><b>I want to provide a service</b></span>
			<!--<span class="btn butt-index first-butt hidden" id="servicee"><b>Service</b></span><span class="btn butt-index second-butt hidden" id="businesss"><b>Business</b></span>-->

            </div>
            <div class="homeimageheader">
              <form>
                <div class="form-group"
                <input type="text" name="firstname">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="site-section bg-light">
          <div class="container">
            <div class="row justify-content-start text-left mb-5">
              <div class="col-md-9" data-aos="fade">
                <h2 class="font-weight-bold text-black">Category</h2>
              </div>
              <div class="col-md-3" data-aos="fade" data-aos-delay="200">
                <a href="{{route('viewads')}}" class="btn btn-primary py-3 btn-block"><span class="h5">+</span> Post Ad</a>
              </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">

               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Advertising & Marketing</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>
               </div>

             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Agriculture, Fishing & Forestry</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">
                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Art & Design</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">

               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Automotive & Aviation</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>
               </div>

             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Banking, Finance & Insurance</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Construction</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">

               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Digital, Media & Communications</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>
               </div>

             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Education & Training</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Energy & Utilities</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">

               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Entertainment & Events</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>
               </div>

             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Healthcare</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Hospitality & Hotel</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Internet & Telecommunications</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Law</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Law Enforcement & Security</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Logistics & Transportation</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Manufacturing</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Mining, Oil & Metals</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">NGO</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Real Estate</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Recruitment</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Retail, Fashion & FMCG</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Technology</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>

            <div class="row" data-aos="fade">
             <div class="col-md-12">
               <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                  <div class="mb-4 mb-md-0 mr-5">
                   <div class="job-post-item-header d-flex align-items-center">
                     <h2 class="mr-3 text-black h4">Travel, Tourism, & Leisure</h2>

                   </div>
                   <div class="job-post-item-body d-block d-md-flex">
                     <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Business</a></div>
                     <div><span class="fl-bigmug-line-big104"></span> <span>Lagos, Nigeria</span></div>
                   </div>
                  </div>

                  <div class="ml-auto">

                    <a href="category-single.html" class="btn btn-primary py-2">View Category</a>
                  </div>

               </div>
             </div>
            </div>
          </div>
        </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Why Client<strong>refill</strong> </h2>
          </div>
        </div>
        <div class="row hosting">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                </div>
                <h2 class="h5">Search Millions of Jobs</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-big104"></span>
                </div>
                <h2 class="h5">Location Search</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
                </div>
                <h2 class="h5">Top Careers</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
                </div>
                <h2 class="h5">Search Expert Candidates</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-clipboard68"></span>
                </div>
                <h2 class="h5">Easy To Manage Jobs</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5">Online Reviews</h2>
              </div>
              <div class="unit-3-body">
                <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis dolorem eos.</p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="site-section block-4 bg-light">

      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Happy Clients</h2>
          </div>
        </div>

        <div class="nonloop-block-4 owl-carousel" data-aos="fade">
          <div class="item col-md-8 mx-auto">

            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Elizabeth Graham</h3>
                  <p class="block-38-subheading">Creative Director, XYG Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>

          </div>
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_2.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Jennifer Greive</h3>
                  <p class="block-38-subheading">Lead Designer, Mig Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>

          <div class="item col-md-8 mx-auto">

            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Elizabeth Graham</h3>
                  <p class="block-38-subheading">Creative Director, XYG Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>

          </div>
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/person_2.jpg" alt="Image placeholder">
                  <h3 class="block-38-heading">Jennifer Greive</h3>
                  <p class="block-38-subheading">Lead Designer, Mig Company</p>
                </div>
                <div class="block-38-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>   
@endsection