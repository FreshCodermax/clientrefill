<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bid &mdash; Clientrefill</title>
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
    <link rel="stylesheet" href="{{URL::to('css/jquery.pajinatify.css')}}">


    <link rel="stylesheet" href="{{URL::to('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/fl-bigmug-line.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/style.css?v=1.1')}}">

<style>
.pagination a {
  color: black;
  float: right;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;

}
.rad {
border-radius: 5px 0px 0px 5px;
}
.radi {
border-radius: 0px 5px 5px 0px;
}

.pagination a.active {
  background-color: #139ff0;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

  </head>
  <body>

  </body>

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
  <script src="{{URL::to('js/dropzone.js')}}"></script>
  <script src="{{URL::to('js/jquery.pajinatify.js')}}"></script>

  <script src="{{URL::to('js/main.js')}}"></script>

  <script>
        Dropzone.options.myDropzone = {
            url: "/Account/Create",
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,
            acceptedFiles: "image/*",

            init: function () {

                var submitButton = document.querySelector("#submit-all");
                var wrapperThis = this;

                submitButton.addEventListener("click", function () {
                    wrapperThis.processQueue();
                });

                this.on("addedfile", function (file) {

                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='btn btn-lg dark'>Remove File</button>");

                    // Listen to the click event
                    removeButton.addEventListener("click", function (e) {
                      // Make sure the button click doesn't submit the form:
                      e.preventDefault();
                      e.stopPropagation();

                      // Remove the file preview.
                      wrapperThis.removeFile(file);
                      // If you want to the delete the file on the server as well,
                      // you can do the AJAX request here.
                  });

                  // Add the button to the file preview element.
                  file.previewElement.appendChild(removeButton);
              });

              this.on('sendingmultiple', function (data, xhr, formData) {
                  formData.append("Username", $("#Username").val());
              });
          }
      };
  </script>
  <script>
  $(function(){

  $('.pagination').pajinatify();

});
$('.pagination').pajinatify({
  onChange: function (currentPage) {
    console.log(currentPage);
  },
});
</script>
  </body>
</html>
