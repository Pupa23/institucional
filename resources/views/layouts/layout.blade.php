<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
<header id="header" class="fixed-top header-inner-pages">
    @include('layouts.navbar')
</header>
<main id="main">
    @yield('main');
</main>
</body>
<footer id="footer">
    {{-- <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
           @include('layouts.footer') --}}
</footer>
@include('layouts.vendor')
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>
</html>
