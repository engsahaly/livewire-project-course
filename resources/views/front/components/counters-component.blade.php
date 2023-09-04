<!-- Facts Start -->
<div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @if (count($counters) > 0)
                @foreach ($counters as $counter)
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="{{ $counter->icon }} fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">{{ $counter->count }}</h1>
                        <p class="text-white mb-0">{{ $counter->name }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Facts End -->
