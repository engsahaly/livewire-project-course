@extends('front.master')

@section('title', 'Projects')
@section('projects-active', 'active')

@section('header-content')
    @include('front.partials.sub-header', ['pageName' => 'Projects'])
@endsection

@section('content')
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
                <h1 class="text-center mb-5">Recently Completed Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Web Design</li>
                        <li class="mx-2" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-1.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-1.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-2.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-2.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-3.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-3.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-4.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-4.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-5.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-5.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('front-assets') }}/img/portfolio-6.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1"
                                    href="{{ asset('front-assets') }}/img/portfolio-6.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
