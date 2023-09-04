<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">About Us<span></span></p>
                <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                    Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna
                    dolore erat amet</p>
                @if (count($skills) > 0)
                    @foreach ($skills as $skill)
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">{{ $skill->name }}</p>
                                <p class="mb-2">{{ $skill->progress }}%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar"
                                    aria-valuenow="{{ $skill->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('front-assets') }}/img/about.png">
            </div>
        </div>
    </div>
</div>
<!-- About End -->
