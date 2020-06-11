
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
    <link rel="stylesheet" type="text/css" href="/fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
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

      <!-- All Sports-->
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row isotope-wrap row-30">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true">Select<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link active" data-isotope-filter="*" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-01"></span></span><span class="isotope-filters-list-text">All sports</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="football" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-07"></span></span><span class="isotope-filters-list-text">Football</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="tennis" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-06"></span></span><span class="isotope-filters-list-text">Tennis</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="basketball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-04"></span></span><span class="isotope-filters-list-text">Basketball</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="ice-hockey" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-08"></span></span><span class="isotope-filters-list-text">Ice Hockey</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="volleyball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-09"></span></span><span class="isotope-filters-list-text">Volleyball</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="badminton" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-03"></span></span><span class="isotope-filters-list-text">Badminton</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="baseball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-05"></span></span><span class="isotope-filters-list-text">Baseball</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="ping-pong" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-02"></span></span><span class="isotope-filters-list-text">Table Tennis</span> <span class="isotope-filters-list-count"></span></a></li>
                  <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="cycling" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-10"></span></span><span class="isotope-filters-list-text">Cycling</span> <span class="isotope-filters-list-count"></span></a></li>
                </ul>
                <div class="isotope-filters-info">
                  <p class="isotope-filters-info-text"> All Sports</p>
                </div>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12">
              <div class="row isotope row-30" data-isotope-layout="masonry" data-column-class=".col-1" data-isotope-group="gallery">
                <div class="col-1 isotope-item isotope-sizer"></div>
                <!-- Football-->
                <div class="col-lg-12 isotope-item" data-filter="football">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Football 
                      </h5>
                      <div>
                        <ul class="list-inline list-inline-xs">
                          <li><a class="button button-xs button-red-outline active" href="#">Live</a></li>
                          <li><a class="button button-xs button-red-outline" href="#">Upcoming</a></li>
                          <li><a class="button button-xs button-red-outline" href="#">Today’s events</a></li>
                        </ul>
                      </div>
                    </div>
                  </article>

                  <div class="sport-table-header">
                    <p>National Championship (6)
                    </p>
                  </div>
                  @foreach($free as $free)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $free->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $free->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $free->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $free->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($free->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($free->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($free->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Tennis-->
                <div class="col-lg-12 isotope-item" data-filter="tennis">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Tennis
                      </h5>
                    </div>
                  </article>

                   @foreach($tennis as $tennis)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $tennis->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $tennis->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $tennis->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $tennis->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($tennis->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($tennis->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($tennis->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Basketball-->
                <div class="col-lg-12 isotope-item" data-filter="basketball">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Basketball
                      </h5>
                    </div>
                  </article>

                  @foreach($basketball as $basketball)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $basketball->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $basketball->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $basketball->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $basketball->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($basketball->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($basketball->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($basketball->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Ice Hockey-->
                <div class="col-lg-12 isotope-item" data-filter="ice-hockey">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Ice Hockey
                      </h5>
                    </div>
                  </article>
                  @foreach($icehockey as $icehockey)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $icehockey->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $icehockey->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $icehockey->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $icehockey->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($icehockey->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($icehockey->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($icehockey->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Volleyball-->
                <div class="col-lg-12 isotope-item" data-filter="volleyball">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Volleyball
                      </h5>
                    </div>
                  </article>
                  @foreach($volleyball as $volleyball)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $volleyball->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $volleyball->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $volleyball->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $volleyball->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($volleyball->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($volleyball->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($volleyball->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Badminton-->
                <div class="col-lg-12 isotope-item" data-filter="badminton">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Badminton
                      </h5>
                    </div>
                  </article>
                  @foreach($bandminton as $bandminton)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $bandminton->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $bandminton->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $bandminton->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $bandminton->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($bandminton->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($bandminton->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($bandminton->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Baseball-->
                <div class="col-lg-12 isotope-item" data-filter="baseball">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Baseball
                      </h5>
                    </div>
                  </article>
                  @foreach($baseball as $baseball)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $baseball->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $baseball->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $baseball->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $baseball->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($baseball->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($baseball->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($volleyball->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Table tennis-->
                <div class="col-lg-12 isotope-item" data-filter="ping-pong">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Table Tennis
                      </h5>
                    </div>
                  </article>
                  @foreach($tabletennis as $tabletennis)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $tabletennis->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $tabletennis->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $tabletennis->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $tabletennis->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($tabletennis->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($tabletennis->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($tabletennis->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- Cycling-->
                <div class="col-lg-12 isotope-item" data-filter="cycling">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Cycling
                      </h5>
                    </div>
                  </article>

                  @foreach($cycling as $cycling)
                  <div class="sport-table">
                    <div class="sport-table-tr">
                      <div class="row sport-row align-items-center row-15">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                          <div class="sport-table-icon">
                            <div class="sprite sprite-sport-icon-07"></div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-md-4 col-lg-3">
                          <div class="sport-table-title">
                            <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">{{ $cycling->teams }}</span></div>
                            <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>Start</span></span>
                              <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>{{ $cycling->startTime }}</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Pick</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $cycling->prediction }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">League</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>{{ $cycling->league }}</span></span>
                          </div>
                        </div>
                        <div class="sport-table-title">
                          <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Outcome</span></div>
                          <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>
                            @if($cycling->outcome==0)
                            <span class="badge badge-danger" style="color: red !important">Pending...</span>
                            @endif
                            @if($cycling->outcome==1)
                            <span class="badge badge-warning" style="color: green !important"> <i class="fa fa-check-circle"></i>Won</span>
                            @endif
                            @if($cycling->outcome==2)
                            <span class="badge badge-danger" style="color: red !important"><i class="fa fa-times-circle"></i>&nbsp;Lost</span>
                            @endif</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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