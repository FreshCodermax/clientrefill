
@extends('layouts.loginmaster')


@section('title')
    Jobs Category
    
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

    <div class="site-section" style="background-color: #f2f2f2">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Jobs Category</h2>
          </div>
        </div>

        
        <div class="row hosting">
            @foreach ($cats as $cat)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="{{$cat->id}}00">
                    <a href="{{route('viewjob', ['catname'=>$cat->catname])}}" style="color:black;">
                    <div class="unit-3 h-100 bg-white">

                    <div class="d-flex align-items-center mb-3 unit-3-heading">
                        <div class="unit-3-icon-wrap mr-4">
                        <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                            <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                        </svg><i class="fas fa-bullhorn"></i>
                        </div>
                        <h2 class="h5">{{$cat->catname}}</h2>
                    </div>
                    <div class="unit-3-body">
                        <p><a href="#" class="tagzz">Ads</a> <a href="#" class="tagzz">Executive Marketing</a> <a href="#" class="tagzz">Media</a> <a href="#" class="tagzz">Digital Marketing</a></p>
                    </div>
                    </div>
                </a>
                </div>
            @endforeach
          </div>

          
         
            
          
          
          {{--  <div class="grid-container4" style="float: right">
            <div class="pagination" data-total-count="400" data-take="10">
              {{$cat->links()}}
            </div>
          </div>  --}}

        </div>

      </div>
    </div>
    @include('partials.footer')
  </div>
  @endsection

  @section('script')
  <script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };

    function initAutocomplete() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
          {types: ['geocode']});

      // When the user selects an address from the dropdown, populate the address
      // fields in the form.
      autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();

      for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
      }

      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
        }
      }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
      async defer></script>
  @endsection