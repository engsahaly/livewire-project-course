<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('admin-assets') }}/" data-template="vertical-menu-template-free">

@include('admin.partials.head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.partials.sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                @include('admin.partials.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')

                    @include('admin.partials.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('admin.partials.scripts')

</body>

</html>
