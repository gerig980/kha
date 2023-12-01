<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    
    @include('layouts.backend.partials.header-assets')
    <body>
        <div id="layout-wrapper">
            @include('layouts.backend.partials.header')
            @include('layouts.backend.partials.navbar-menu')
            <div class="vertical-overlay"></div>
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    @include('layouts.backend.partials.footer')
                </div>
            </div>
       
            <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </button>
            @include('layouts.backend.partials.footer-assets')
    </body>
</html>