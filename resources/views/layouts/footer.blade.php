 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
              <span>Csls</span>
            </a>
            <p>{{__('lang.footer')}}</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>{{__('lang.linklar')}}</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{route('home')}}">{{ __('lang.home') }}</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{route('about')}}">{{ __('lang.about') }}</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{route('service')}}">{{__('lang.services')}}</a></li>

            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            {{-- <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
            </ul> --}}
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
                Toshkent sh,  <br>
              {{__('lang.rayon')}}  <br>
                Xuroson ko'chasi 35/14 <br><br>
              <strong>Phone:</strong> +998 94 132 52 00<br>
              <strong>Email:</strong> info@csls.uz<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
           <strong><span>Consulting services & legal support</span></strong>.&copy;2023, {{__('lang.Barcha_huquqlar_himoyalangan')}}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Csls-bootstrap-business-template/ -->
         {{__('lang.Website_developed_by')}}:  <a href="https://infinityinnovation.uz/">Infinityinnovation</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->
