@extends('layouts.bidmaster')
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
            <p>Clientrefill &#62 Category &#62 {{$catname}}</p>
            <div class="row grid-bar-container responsive" style="background-color: #fff; margin-bottom: 12px; border-radius: 3px">
              <div class="grid-item item1"><input type="text" id="search" class="form-control" placeholder="Search"></div>
               <div class="grid-item item6"><input type="text" id="location" class="form-control" placeholder="Location"></div>
               <div class="grid-item item7"><button type="text" id="location" class="form-control rounded bg-info text-white"><b>Search</b></button></div>
            </div>
            <div class="row">
            <div class="col-lg-4 searcher">
              <div class="p-4 mb-3 bg-white"><br>
                <h2 class="h5 text-black mb-3">My Recent Searches</h2><hr>
                <form>
                  <h3 class="h5 text-black mb-3">Filer by:</h3>
                  <p><b>Budget</b></p>
                  <div class="form-group">
                      <div>
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Fixed Price Projects
                   </label>
                  </div>
                  </div>
                  <div class="grid-search-container">
                    <div class="grid-item item3">
                      <input type="text" id="fullname" class="form-control" placeholder="Min">
                    </div>
                    <div class="grid-item item4" style="margin-top: 9px">to
                    </div>
                    <div class="grid-item item5">
                      <input type="text" id="fullname" class="form-control" placeholder="Max">
                    </div>
                  </div>
                  <div class="form-group">
                      <div>
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Hourly Projects
                   </label>
                  </div>
                  </div>
                  <div class="grid-search-container">
                    <div class="grid-item item3">
                      <input type="text" id="fullname" class="form-control" placeholder="Min">
                    </div>
                    <div class="grid-item item4" style="margin-top: 9px">to
                    </div>
                    <div class="grid-item item5">
                      <input type="text" id="fullname" class="form-control" placeholder="Max">
                    </div>
                  </div>
                  <div class="form-group">
                      <select id="job-category" name="Job-category" class="form-control"><option value="Access" selected="selected">Professional</option><option value="Citi" >Client</option><option value="Ecobank" >Business</option></select>
                  </div>
                  <div class="form-group">
                      <div>
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Contest
                   </label>
                  </div>
                  </div>
                  <div class="grid-search-container">
                    <div class="grid-item item3">
                      <input type="text" id="fullname" class="form-control" placeholder="Min">
                    </div>
                    <div class="grid-item item4" style="margin-top: 9px">to
                    </div>
                    <div class="grid-item item5">
                      <input type="text" id="fullname" class="form-control" placeholder="Max">
                    </div>
                  </div><hr>
                  <p><b>Type</b></p>
                  <div class="form-group">
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Fixed Price Projects
                   </label>
                  </div>
                  <div class="form-group">
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Hourly Projects
                   </label>
                  </div>
                  <div class="form-group">
                   <label>
                     <input type="checkbox" name="remember">&nbsp;&nbsp;Contest
                   </label>
                  </div><hr>
                  <p><b>Job State</b></p>
                  <div class="form-group">
                      <div>
                   <label>
                     <input type="radio" name="remember" checked>&nbsp;&nbsp;All open jobs
                   </label>
                  </div>
                  </div>
                  <div class="form-group">
                      <div>
                   <label>
                     <input type="radio" name="remember">&nbsp;&nbsp;All open and closed jobs
                   </label>
                  </div>
                  </div>
                </form>
              </div>
            </div>
    
    
          <div class="col-md-12 col-lg-8 mb-5 bg-white">
            <div class="grid-container">
              <div>
               <div class="grid-container">
                  <div>
                      <form>
                        <div class="row form-group">
                         <button type="text" id="location" class="form-control rounded bg-info text-white"><b>Post to this Category</b></button>
                        </div>
                      </form>
                 </div>
                 </div>
                 </div>
                 <div>
                   <div class="grid-container">
                   <div class="pagination" data-total-count="400" data-take="10">
                     <a class="rad" href="#">&laquo;</a>
                     <a class="active" href="#">1</a>
                     <a href="#">2</a>
                     <a href="#">3</a>
                     <a href="#">4</a>
                     <a href="#">5</a>
                     <a class="radi" href="#">&raquo;</a>
                   </div>
                 </div>
                 </div>
               </div><hr class="pads"></hr>
    
               <div class="grid-container bid-box">
                 <div class="grid-item item1"><span><strong>Setup an eJabberd XMPP Server</strong> 6 days left</span><br>
                   <p>We need to setup a eJabberd XMPP Server to test IEC61850-8-2 Communication. The two drivers are ready to test. They will be able to register their specific xmpp account automatically on the server.</p>
                 </div>
                 <div class="grid-item item2"><span><strong>$20 - $250</strong></span><br>
                   <p>0 bid</p>
                   <a class="bid" href="#" style="font-size: 11px; border: 1px solid #4fb55d; border-radius: 4px; background-color: #4fb55d; color: #fff; padding: 5px 10px;">Bid Now</a>
                 </div>
               </div><hr>
    
               <div class="grid-container bid-box">
                 <div class="grid-item item1"><span><strong>Setup an eJabberd XMPP Server</strong> 6 days left</span><br>
                   <p>We need to setup a eJabberd XMPP Server to test IEC61850-8-2 Communication. The two drivers are ready to test. They will be able to register their specific xmpp account automatically on the server.</p>
                 </div>
                 <div class="grid-item item2"><span><strong>$20 - $250</strong></span><br>
                   <p>0 bid</p>
                   <a class="bid" href="#" style="font-size: 11px; border: 1px solid #4fb55d; border-radius: 4px; background-color: #4fb55d; color: #fff; padding: 5px 10px;">Bid Now</a>
                 </div>
               </div><hr>
    
               <div class="grid-container bid-box">
                 <div class="grid-item item1"><span><strong>Setup an eJabberd XMPP Server</strong> 6 days left</span><br>
                   <p>We need to setup a eJabberd XMPP Server to test IEC61850-8-2 Communication. The two drivers are ready to test. They will be able to register their specific xmpp account automatically on the server.</p>
                 </div>
                 <div class="grid-item item2"><span><strong>$20 - $250</strong></span><br>
                   <p>0 bid</p>
                   <a class="bid" href="#" style="font-size: 11px; border: 1px solid #4fb55d; border-radius: 4px; background-color: #4fb55d; color: #fff; padding: 5px 10px;">Bid Now</a>
                 </div>
               </div><hr>
    
               <div class="grid-container bid-box">
                 <div class="grid-item item1"><span><strong>Setup an eJabberd XMPP Server</strong> 6 days left</span><br>
                   <p>We need to setup a eJabberd XMPP Server to test IEC61850-8-2 Communication. The two drivers are ready to test. They will be able to register their specific xmpp account automatically on the server.</p>
                 </div>
                 <div class="grid-item item2"><span><strong>$20 - $250</strong></span><br>
                   <p>0 bid</p>
                   <a class="bid" href="#" style="font-size: 11px; border: 1px solid #4fb55d; border-radius: 4px; background-color: #4fb55d; color: #fff; padding: 5px 10px;">Bid Now</a>
                 </div>
               </div><hr>
             <div>
               <div style="float: left"><p>Showing 1 to 10 of 20</p></div>
               <div class="grid-container4" style="float: right">
               <div class="pagination" data-total-count="400" data-take="10">
                 <a class="rad" href="#">&laquo;</a>
                 <a class="active" href="#">1</a>
                 <a href="#">2</a>
                 <a href="#">3</a>
                 <a href="#">4</a>
                 <a href="#">5</a>
                 <a class="radi" href="#">&raquo;</a>
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