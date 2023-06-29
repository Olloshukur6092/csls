@extends('layouts.app')
@section('title')
    Home Page
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Csls</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>{{ __('lang.paragraph_home_yurist') }}</p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ Route('about') }}" class="btn-get-started">{{__('lang.Boshlash')}}</a>
                        <a href="https://youtu.be/nu4KNJVCZqA"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>{{__('lang.watch_video')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{__('lang.Why_Choose_Us')}}</h2>

                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-xl-5 img-bg" style="background-image: url('assets/img/about/right.jpg')"></div>
                    <div class="col-xl-7 slides  position-relative">

                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Ishonchli Yuridik yordam</h3>
                                        <h4 class="mb-3">Malakali yuristlar xizmatidan onlayn foydalaning.</h4>
                                        <p>
                                            Malakali yurist maslahati zarur vaziyatga duch keldingizmi?
                                            Qayerdan yurist topishni bilmayapsiz yoki konsultatsiyaga borishga vaqtingiz yo'qmi?
                                            Normativ hujjatlardan javob topishga harakat qildingiz ammo amaliy tajribaga mos tushadigan javob topaolmadingizmi?
                                        </p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                      <h3 class="mb-3">O'zbekistonning eng yaxshi yurist va advokatlari javob beradilar.</h3>
                                      <h4 class="mb-3">Hoziroq savol bering</h4>
                                      <p>Yechimi oddiy: Professional advokatlar xizmatidan yuridik.uz yordamida onlayn foydalaning. Xizmatimiz sizni qanoatlantirmasa, pulingizni qaytarib beramiz</p>
                                    </div>
                                  </div>
                                  <!-- End slide item -->

                                {{-- <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Aliquid non alias minus</h3>
                                        <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.
                                        </h4>
                                        <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque
                                            velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim
                                            dolorum fugiat aut.</p>
                                    </div>
                                </div> --}}

                                <!-- End slide item -->

                                {{-- <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                                        <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum
                                            soluta nihil est. Eum similique neque autem ut.</h4>
                                        <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem.
                                            Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.
                                        </p>
                                    </div>
                                </div> --}}
                                <!-- End slide item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Choose Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{__('lang.bizning_xizmatlar')}}</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Firma ochish ruyhatdan utkazish ustav nizom yaratish</a></h4>
                            <p class="description">
                                Korhonalardag ichki hujjatlarni tartibga solish
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Patentlash tovar belgisini ro'yxatdan o'tkazish</a></h4>
                            <p class="description">Ariza, shikoyat xati, davo arizasi, apellatsiya, kassasiya yozib berish.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Shartnomalar tuzib berish konsultatsiya berish</a></h4>
                            <p class="description">-Deklarantlik</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Qarz undirish xizmatlari</a></h4>
                            <p class="description">Yuristlarimiz xizmati</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Doimiy huquqiy ximoyalash xizmatlari.</a></h4>
                            <p class="description">Korhonalardag ichki hujjatlarni tartibga solish</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i>
                        </div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Xujjatlarni Huquqiy ekspertizadan o'tkazish</a></h4>
                            <p class="description"></p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>{{__('lang.abd')}}</h3>
                        <p>{{__('lang.expertlar')}}.</p>
                        <a class="cta-btn" href="#">{{__('lang.boglanish')}}Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Powerful Features for <br>Your Business</h3>

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                    <span>Sit amet consectetur adipisicing</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                    <span>Ipsum Rerum Explicabo</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                    <span>Sit amet consectetur adipisicing</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                    <span>Ipsum Rerum Explicabo</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="phone-wrap">
                            <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>

            <div class="details">
                <div class="container" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias
                                doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
                            <a href="#about" class="btn-get-started">Get Started</a>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Features Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
{{--
        <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Recent Blog Posts</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, December 12</span>
                                <span class="post-author"> / Julia Parker</span>
                            </div>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                            <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                                eum ipsa est officiis. Modi qui magni est...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Fri, September 05</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                            <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda.
                                Quisquam omnis doloribus...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, July 27</span>
                                <span class="post-author"> / Lisa Hunter</span>
                            </div>
                            <h3 class="post-title">Quia assumenda est et veritati</h3>
                            <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis
                                repellat sed quae consectetur magnam...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('assets/img/blog/blog-4.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, Sep 16</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
                            <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum
                                quia eligendi...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}

        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/news/news_banner.webp');">
                <div class="container position-relative d-flex flex-column align-items-center">

                    <h2>News</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>News</li>
                    </ol>

                </div>
            </div><!-- End Breadcrumbs -->
            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-posts" class="recent-posts">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Kun Yangiliklari</h2>

                    </div>

                    <div class="row gy-5">
                        @php
                            $news = [
                                'news1' => 'Toshkent jamoat transporti uchun Humo plastik kartasidan qilingan to‘lovlar bir necha bor
                                    qayta yechib olingan yoki bloklangan holatlari uchramoqda. ATTO hamda Humo rahbarlari texnik
                                    nosozlik sabab shunday vaziyat yuzaga kelayotganini ma’lum qildi.',
                                'news2' => 'Prigojin Rossiya armiyasi mag‘lubiyatga uchrayotganini aytgandi. Amalda esa Ukrainaning
                                    muvaffaqiyatlari hali ham juda kamtarona.',
                                'news3' => 'Prezident o‘zbekistonlik mehnat muhojirlarining qahramonligini e’tirof etdi. Suv mavzusi kun
                                    tartibiga chiqmoqda. Yangihayotning Yangi Darxonidagi yangi uyda lift quladi. Milliard
                                    so‘mni talon-toroj qilgan amaldor lavozimiga qaytdi va shov-shuvdan keyin yana bo‘shatildi.
                                    Ortda qolayotgan haftaning shu va boshqa xabarlari – Kun.uz dayjestida.',
                                'news4' => 'O‘zLiDePdan prezidentlikka nomzod Shavkat Mirziyoyev qashqadaryolik saylovchilar bilan
                                    uchrashuvda xorijdagi yurtdoshlarimizni qo‘llab-quvvatlashga oid rejalarni ma’lum qildi,
                                    deya xabar bermoqda Kun.uz muxbiri.',
                            ];
                        @endphp
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-box">
                                <div class="post-img"><img src="assets/img/news/about.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="meta">
                                    <span class="post-date">14:39 / 26.06.2023</span>
                                    <span class="post-author"> / KUN.UZ</span>
                                </div>
                                <h3 class="post-title">Avtobus va metroga Humo kartasi orqali to‘lov qilishda muammo paydo
                                    bo‘ldi - buning sababi nimada?</h3>
                                <p>{{ Str::substr($news['news1'], 0, 140) }}...</p>
                                <a href="https://kun.uz/uz/news/2023/06/26/avtobus-va-metroga-humo-kartasi-orqali-tolov-qilishda-muammo-paydo-boldi-buning-sababi-nimada"
                                    class="readmore stretched-link" target="_blank"><span>Batafsil</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-box">
                                <div class="post-img"><img src="assets/img/news/2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="meta">
                                    <span class="post-date">14:36 / 26.06.2023</span>
                                    <span class="post-author"> / KUN.UZ</span>
                                </div>
                                <h3 class="post-title">Frontdagi vaziyat: Prigojinning isyoni Rossiyaning Ukrainadagi
                                    harakatlariga ta’sir ko‘rsatmagan</h3>
                                <p>{{ Str::substr($news['news2'], 0, 140) }}...</p>
                                <a href="https://kun.uz/uz/news/2023/06/26/frontdagi-vaziyat-prigojinning-isyoni-rossiyaning-ukrainadagi-harakatlariga-tasir-korsatmagan"
                                    class="readmore stretched-link" target="_blank"><span>Batafsil</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="post-box">
                                <div class="post-img"><img src="assets/img/news/3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="meta">
                                    <span class="post-date">18:45 / 25.06.2023</span>
                                    <span class="post-author"> / KUN.UZ</span>
                                </div>
                                <h3 class="post-title">E’tirof etilgan migrantlar, Qo‘shtepa kanaliga munosabat va Navoiydagi
                                    kambek - hafta dayjesti</h3>
                                <p>{{ Str::substr($news['news3'], 0, 140) }}...</p>
                                <a href="https://kun.uz/uz/news/2023/06/25/etirof-etilgan-migrantlar-qoshtepa-kanaliga-munosabat-va-navoiydagi-kambek-hafta-dayjesti"
                                    class="readmore stretched-link" target="_blank"><span>Batafsil</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ asset('assets/img/news/4.jpg') }}" class="img-fluid"
                                        alt=""></div>
                                <div class="meta">
                                    <span class="post-date">13:58 / 23.06.2023</span>
                                    <span class="post-author"> / KUN.UZ</span>
                                </div>
                                <h3 class="post-title">Xorijda mehnat qilayotgan o‘zbekistonliklar haqiqiy qahramon - Shavkat
                                    Mirziyoyev</h3>
                                <p>{{ Str::substr($news['news4'], 0, 140) }}...</p>
                                <a href="https://kun.uz/uz/news/2023/06/23/xorijda-mehnat-qilayotgan-ozbekistonliklar-haqiqiy-qahramon-shavkat-mirziyoyev"
                                    class="readmore stretched-link" target="_blank"><span>Batafsil</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Recent Blog Posts Section -->
        </main>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@endsection
