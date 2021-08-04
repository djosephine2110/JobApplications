<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="career, erakomp, IT, tech, e-commerce">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <title>ERAKOMP CAREER</title>
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/compro/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/compro/css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/compro/css/main.css">
  <link rel="stylesheet" href="https://cdn.erakomp.co.id/compro/css/responsive.css">

</head>
<style>
  .hero-area .intro-img {
    padding: 6% 0 !important;
  }
</style>

<body>

  <!-- Header Section Start -->
  <header id="home" class="hero-area">
    <div class="overlay">
      <span></span>
      <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <h1 style="font-size: 18px;  color:black !important;">
            <a  class="typewrite" data-period="2000" data-type='["ERAKOMP CAREER"]' style="font-size: 18px; font-weight:bold; color:black !important;">
              <span class="wrap"></span>
            </a>
          </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">

            <li class="nav-item">
              <a class="btn btn-singin" href="/">Back To Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row space-100">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="contents">
            <h2 class="head-title">Welcome To Erakomp Career Site</h2>
            <p>Let's join our team! We nee more people like you to be part of Erakomp Family.<br> Please click apply
              button on the top or you can explore job openings below.</p>
            <div class="header-button">

              <a href="/career" rel="nofollow" target="_blank"
                class="btn btn-border page-scroll">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 p-0">
          <div class="intro-img">
            <img src="https://cdn.erakomp.co.id/compro/img/598.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>
  



  






@yield('content')


 
  <!-- Contact Us Section End -->


  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="{{asset('job/jquery-min.js')}}"></script>
  <script src="{{asset('job/bootstrap.min.js')}}"></script>

  <script src="{{asset('job/main.js')}}"></script>
</body>
<script>
    var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
</script>
</html>