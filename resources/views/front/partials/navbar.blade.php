<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('front.index') }}" class="navbar-brand p-0">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="{{ asset('front-assets') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('front.index') }}" class="nav-item nav-link @yield('index-active')">Home</a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link @yield('about-active')">About</a>
            <a href="{{ route('front.services') }}" class="nav-item nav-link @yield('services-active')">Service</a>
            <a href="{{ route('front.projects') }}" class="nav-item nav-link @yield('projects-active')">Project</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @yield('team-testmonials-active')" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('front.team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ route('front.testmonials') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ route('front.contact') }}" class="nav-item nav-link @yield('contact-active')">Contact</a>
        </div>
        <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>
