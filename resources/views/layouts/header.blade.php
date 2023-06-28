 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="index.html" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1 class="d-flex align-items-center">Csls</h1>
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="index.html" class="active">{{ __('lang.home') }}</a></li>
                 <li><a href="{{ route('about') }}">{{ __('lang.about') }}</a></li>
                 <li><a href="{{ route('service') }}">Services</a></li>
                 <li><a href="portfolio.html">Portfolio</a></li>
                 <li><a href="{{ route('team') }}">{{ __('lang.team') }}</a></li>
                 <li><a href="blog.html">Blog</a></li>
                 <li class="dropdown"><a href="#"><span>
                             @if (session()->has('lang') && session()->get('lang'))
                                 {{ Str::upper(session()->get('lang')) }}
                             @else
                                 UZ
                             @endif
                         </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                         @if (session()->has('lang'))

                             @if (session()->get('lang') !== 'uz')
                                 <li><a href="#" onclick="changeLang('uz')">UZ</a></li>
                             @endif
                             @if (session()->get('lang') !== 'ru')
                                 <li><a href="#" onclick="changeLang('ru')">RU</a></li>
                             @endif
                             @if (session()->get('lang') !== 'en')
                                 <li><a href="#" onclick="changeLang('en')">EN</a></li>
                             @endif
                         @else
                             <li><a href="#" onclick="changeLang('ru')">RU</a></li>
                             <li><a href="#" onclick="changeLang('en')">EN</a></li>
                         @endif

                     </ul>
                 </li>
                 <li><a href="{{ route('contact') }}">Contact</a></li>
             </ul>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
 @section('scripts')
     <script type="text/javascript">
         function changeLang(lang) {
             const url = "{{ route('lang') }}";
             window.location.href = url + "?lang=" + lang;
         }
     </script>
 @endsection
