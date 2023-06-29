@extends('layouts.app')

@section('title')
    News page
@endsection

@section('content')
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
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
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
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
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
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
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
                            <div class="post-img"><img src="{{ asset('assets/img/blog/blog-4.jpg') }}" class="img-fluid"
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
@endsection
