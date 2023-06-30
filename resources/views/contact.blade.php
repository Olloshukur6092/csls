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
                                <p>Toshkent sh, Mirzo-Ulug'bek tumani, Xuroson ko'chasi 35/14</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@csls.uz</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>(94) 132 52 00</p>
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47931.96965927916!2d69.26793412220403!3d41.33609056162945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4431777da7b%3A0x289db26806f061e!2z0JzQuNGA0LfQvi3Qo9C70YPQs9Cx0LXQutGB0LrQuNC5INGA0LDQudC-0L0sINCi0LDRiNC60LXQvdGCLCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1688002101586!5m2!1sru!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
