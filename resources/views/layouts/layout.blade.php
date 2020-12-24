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
        @include('layouts.footer')
    </footer>
    @include('layouts.vendor')
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
</html>