<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @if (count($services) > 0)
                @foreach ($services as $service)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="{{ $service->icon }} text-primary mb-4"></i>
                            <h5 class="mb-3">{{ $service->name }}</h5>
                            <p class="m-0">{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Feature End -->
