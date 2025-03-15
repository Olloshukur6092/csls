@extends('layouts.app')
@section('title')

@endsection

@section('content')


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
                            <h4 class="title"><a href="#" class="stretched-link">Avtotransport xizmati</a></h4>
                            <p class="description">
                                Evroprotokol
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Avtosug'urta</a></h4>
                            <p class="description">cheklangan , cheklanmagan
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

@endsection
 <!-- ======= Our Services Section ======= -->
 {{-- <section id="services-list" class="services-list"> --}}
    {{-- <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Services</h2>

      </div>

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
          <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div> --}}
  {{-- </section><!-- End Our Services Section --> --}}
