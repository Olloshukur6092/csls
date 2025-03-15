 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="{{route('home')}}" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
{{-- <<<<<<< HEAD --}}
             {{-- <img src="assets/img/team/CslsLogo.jpg" alt=""> --}}
{{-- ======= --}}
              <img src="{{asset('assets/img/logo/logo.PNG')}}" alt="">
{{-- >>>>>>> df7d843779561ea80001e1882ae9b3a6a5f075b6 --}}
             {{-- <h1 class="d-flex align-items-center">Csls</h1> --}}
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="{{route('home')}}" class="active">{{ __('lang.home') }}</a></li>
                 <li><a href="{{ route('about') }}">{{ __('lang.about') }}</a></li>
                 <li><a href="{{ route('service') }}">{{__('lang.services')}}</a></li>
                 <li><a href="{{route('news')}}">{{__('lang.yangiliklar')}}</a></li>
                 {{-- <li><a href="{{ route('team') }}">{{ __('lang.team') }}</a></li> --}}
                 {{-- <li><a href="blog.html">Blog</a></li> --}}
                 <li><a href="{{ route('contact') }}">{{__('lang.contact')}}</a></li>
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
