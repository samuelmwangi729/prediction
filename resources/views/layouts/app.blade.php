
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="ie-panel">
      <a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
      </div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                  <ul class="list-inline list-inline-sm">
                    <li><a class="link link-classic" href="#" style="text-shadow: 1px 2px blue,2px 3px red">{{ config('app.name') }}</a></li>
                    <li><a class="link link-classic" href="#">Help</a></li>
                    <li><a class="link link-classic" href="contact-us.html">Contacts</a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered">
                    <li><a class="badge badge-primary" href="/register">registration</a></li>
                    <li><a class="link link-icon link-icon-left link-classic" href="/login"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your Account</span></a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Safe <br> Betting</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With 100% Risk-Free Guarantee</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Get started</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x672.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="/register">Join Us</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
          <!-- Page Footer-->
          <footer class="section footer-classic footer-classic-dark text-center">
            designed and hosted by <a href="https://blusoft.co.ke">blusoft kenya</a>
          </footer>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Javascript-->
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
</body>
</html>
