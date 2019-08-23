<footer class="site-footer">
        <div class="container">
  
  
          <div class="row">
            <div class="col-lg-9">
              <div class="row">
                <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">For Professional</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Find Jobs</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Search Jobs</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">For Client</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Professional Account</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Find professional</a></li>
                    <li><a href="#">Contest</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">About</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">News</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">Terms</h3>
                  <ul class="list-unstyled">
                    <li><a href="about.html">Terms and Conditions</li>
                    <li><a href="#">Terms &amp; Copyright Policy</a></li>
                    <li><a href="contact.html">Code of Conduct</a></li>
                    <li><a href="contact.html">Fees and Charges</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <h3 class="footer-heading mb-4">Apps</h3>
              <a href="#">
                  <img style="margin-bottom: 10px" src="https://www.f-cdn.com/assets/img/footer/google-play-66442243.svg" width="136px" height="40px" alt="Google Play Store Badge">
              </a>
              <a href="#">
                  <img style="margin-bottom: 10px" src="https://www.f-cdn.com/assets/img/footer/app-store-1f36bbd8.svg" width="136px" height="40px" alt="Apple App Store Badge">
                  </a>
                  <div>
                    <a href="#"><i class="fab fa-facebook fa-1x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-1x"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-1x"></i></a>
                  </div>
              <!-- <ul class="list-unstyled">
                <li>
                  <span class="d-block text-white">Address</span>
                  13, Tokunbo Alli St, Toyin St, Ikeja, Lagos St.
                </li>
                <li>
                  <span class="d-block text-white">Telephone</span>
                  +234 703 305 3930
                </li>
                <li>
                  <span class="d-block text-white">Email</span>
                  info@clientrefill.com
                </li>
              </ul> -->
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Clientrefill
              </p>
            </div>
  
          </div>
        </div>
      </footer>
      @if (Auth::check())

      @else
         @include('partials.modal') 
      @endif
      