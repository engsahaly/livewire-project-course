@extends('front.master')

@section('title', 'Services')
@section('services-active', 'active')

@section('header-content')
    @include('front.partials.sub-header', ['pageName' => 'Services'])
@endsection

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
                <h1 class="text-center mb-5">What Solutions We Provide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-search fa-2x"></i>
                        </div>
                        <h5 class="mb-3">SEO Optimization</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-laptop-code fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Web Design</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Social Media Marketing</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-mail-bulk fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Email Marketing</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-thumbs-up fa-2x"></i>
                        </div>
                        <h5 class="mb-3">PPC Advertising</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fab fa-android fa-2x"></i>
                        </div>
                        <h5 class="mb-3">App Development</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                        Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
            <h1 class="text-center mb-5">What Say Our Clients!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('front-assets') }}/img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('front-assets') }}/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('front-assets') }}/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
