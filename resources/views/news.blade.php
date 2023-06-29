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
                    <h2>Recent Blog Posts</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                            </div>
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
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                            </div>
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
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                            </div>
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
        </section><!-- End Recent Blog Posts Section -->
    </main>
@endsection
