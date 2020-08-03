<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Széles körű szakmai tapasztalattal, több éves gyakorlattal és kiépült kapcsolatrendszerrel rendelkező cégünk vállalja a hozzánk forduló megbízóink professzionális kiszolgálását, eligazodását a pénzügyi, jogi és üzleti életben.">
        <meta name="author" content="Piemont Consulting Bt.">

        <meta name="keywords" content="Piemont Consulting Bt., Lojalitás, Kecskemét, Könyvelő iroda Kecskemét, könyvelő iroda kecskemét, Lojalitás Bt. Kecskemét, könyvelő iroda, könyvelés, bérszámfejtés, beszámolók, adótanácsadás, bevallások, cégalapítás, TB ügyintézés, SZJA bevallás, hatósági ügyintézés, nyilvántartások vezetése, számviteli szabályzatok elkészítése, adó, adóbevallás, jövedelemadó, ÁFA, APEH, mérleg, eredménykimutatás, egyéni vállalkozók, társasházak könyvelése, kettős könyvvitel, Kecskemét, NYENYI">

        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <!-- fontawesome -->
        <link rel="stylesheet" type="text/css" href="/css/all.min.css">
        <!-- owl carousel default -->
        <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
        <!-- owl carousel -->
        <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
        <!-- magnific-popup -->
        <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
        <!-- custom styles -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <!-- page title -->
        <title>Piemont Consulting Bt.</title>
    </head>
    <body>
        <!-- start preloader -->
        <div class="preloader">
            <p>0</p>
            <!-- start preloader-counter -->
            <div class="preloader-counter"></div>
            <!-- end preloader-counter -->
        </div>
        <!-- end preloader -->
        <!-- start navbar -->
        @include('pages.partials.nav')
        <!-- end navbar -->
        <!-- start scroll -->
        <div class="scroll">
            <span></span>
        </div>
        <!-- end scroll -->
        <!-- start top -->
        <div class="top">
            <a href="#home"><i class="fas fa-long-arrow-alt-up"></i></a>
        </div>
        @yield('content')
        <footer>
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-lg-12 -->
                    <div class="col-lg-12">
                        <!-- start footer-copyright -->
                        <div class="footer-copyright">
                            <p>2020 &copy; Copyright by PIEMONT CONSULTING BT.</p>
                        </div>
                        <!-- end footer-copyright -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->
        <!-- jquery first -->
        <script src="/js/jquery-3.4.1.min.js"></script>
        <!-- jquery migrate -->
        <script src="/js/jquery-migrate-3.0.0.min.js"></script>
        <!-- bootstrap -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- jarallax -->
        <script src="/js/jarallax.min.js"></script>
        <!-- jarallax-video -->
        <script src="/js/jarallax-video.min.js"></script>
        <!-- ofi -->
        <script src="js/ofi.min.js"></script>
        <!-- typed -->
        <script src="/js/typed.min.js"></script>
        <!-- smooth-scroll -->
        <script src="/js/smooth-scroll.min.js"></script>
        <!-- waypoints -->
        <script src="/js/jquery.waypoints.min.js"></script>
        <!-- magnific-popup -->
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <!-- owl carousel -->
        <script src="/js/owl.carousel.min.js"></script>
        <!-- mixitup -->
        <script src="/js/mixitup.min.js"></script>
        <!-- TweenMax -->
        <script src="/js/TweenMax.min.js"></script>
        <!-- EasePack -->
        <script src="/js/EasePack.min.js"></script>
        <!-- easypiechart -->
        <script src="/js/jquery.easypiechart.min.js"></script>
        <!-- counterup -->
        <script src="/js/counterup.min.js"></script>
        <!-- custom scripts -->
        <script src="/js/script.js"></script>
    </body>
</html>
