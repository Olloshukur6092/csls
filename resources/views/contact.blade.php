@extends('layouts.app')
@section('title')
    Contact Page
@endsection
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container position-relative" data-aos="fade-up">

                <div class="row gy-4 d-flex justify-content-end">

                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>{{ __('lang.location') }}:</h4>
                                <p>Toshkent sh., Sofdil koʻchasi, 40-uy (Indeks)</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@adjaster.uz</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+998 77 095 0007</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="my-3">
                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $item)
                                    <div class="alert alert-danger">
                                        <span>{{ $error }}</span>
                                    </div>
                                @endforeach
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('sendMessage') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="tel" class="form-control" name="number" id="number"
                                        placeholder="Your Number" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->
        <section id="map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.762295844287!2d69.23294707666446!3d41.20515564778666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae611ec23b0bf5%3A0x6757dfd12763b5a4!2zNjY0UCs2NDgsIFNhZmRpbCBTdHJlZXQgMjAzNiwgMTAwMTIzLCDQotC-c2hrZW50LCBUb3Noa2VudCwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1742017531755!5m2!1sru!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                {{-- <iframe
                    src="https://maps.app.goo.gl/w8UMXVsdNPbSA2E5A"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
        </section>
    </main><!-- End #main -->
@endsection
