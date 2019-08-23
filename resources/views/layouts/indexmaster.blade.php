<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clientrefill &mdash; Connecting businesses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{URL::to('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">


    <link rel="stylesheet" href="{{URL::to('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/fl-bigmug-line.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/style.css?v=1.12')}}">

  </head>
  <body>

    {{-- content of the project --}}
    @yield('content')


  
    <script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::to('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::to('js/jquery-ui.js')}}"></script>
    <script src="{{URL::to('js/popper.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.countdown.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::to('js/aos.js')}}"></script>
  
    <script>
  
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
  
    <script src="js/main.js"></script>
    <!-- <script>
    $(document).ready(function(){
    setInterval(function(){
      $("#ineed").show();
      $("#iam").show();
      $("#clientt").hide();
      $("#proff").hide();
      $("#servicee").hide();
      $("#businesss").hide();
  }, 5000);

  $('#dropdown').hover(function(){
    $('.dropdown-toggle', this).trigger('click');
  });
  })
    </script> -->
  
  </body>
</html>