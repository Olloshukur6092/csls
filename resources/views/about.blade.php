@extends('layouts.app')

@section('title')
About page
@endsection

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about/Evroprotocol.webp');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->                  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/team/adjastergai.jpg"
             class="img-fluid" alt=""> 
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>{{__('lang.bizning_jamoa_haqida')}}</h3>           
              <p>{{__('lang.malakali')}}
            </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> 24/7 xodimlarimiz aloqada </li>
                <li><i class="bi bi-check-circle-fill"></i>Evroprotokol</li>
                <li><i class="bi bi-check-circle-fill"></i>Sug'urta pulini undirib berish
                <li><i class="bi bi-check-circle-fill"></i>Avtobaxolash</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{__('lang.Why_Choose_Us')}}</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/team/adjaster.jpg')"> </div>

          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">{{__('lang.ishonchli_yuridik')}}</h3>
                    <h4 class="mb-3">{{__('lang.malakali_yuristlar')}}.</h4>
                    <p>
                        {{__('lang.malakali_yurist')}}
                        {{-- Malakali yurist maslahati zarur vaziyatga duch keldingizmi?
                        Qayerdan yurist topishni bilmayapsiz yoki konsultatsiyaga borishga vaqtingiz yo'qmi?
                        Normativ hujjatlardan javob topishga harakat qildingiz ammo amaliy tajribaga mos tushadigan javob topaolmadingizmi? --}}

                    </p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">{{__('lang.eng_yaxshi_yurist')}}.</h3>
                    <h4 class="mb-3">{{__('lang.hoziroqSavol')}}</h4>
                    <p>{{__('lang.YechimOddiy')}}</p>
                  </div>
                </div>
                <!-- End slide item -->

                {{-- <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Aliquid non alias minus</h3>
                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                  </div>
                </div><!-- End slide item --> --}}

                {{-- <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                  </div>
                </div><!-- End slide item --> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>{{__('lang.biroz_qochish')}}.</p>
            <a class="cta-btn" href="https://web.telegram.org/a/#1816929200">Harakatga chaqirish</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{__('lang.bizning_jamoa')}}</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              {{-- <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div> --}}
              {{-- <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div> --}}
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/11.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://t.me/Myinsurance_005"><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jamoa</h4>
                <span>{{__('lang.yurist')}}</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/rustam.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://t.me/Myinsurance_005"><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rustam</h4>
                <span>{{__('lang.marketolog')}}</span>
              </div>
            </div>
          </div>

          <!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              {{-- <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div> --}}
              {{-- <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div> --}}
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->



@endsection


