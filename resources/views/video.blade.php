@extends('layouts.video')
@section('content')
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <a href="https://www.erakomp.co.id/"><img
            src="https://erakomp.oss-ap-southeast-5.aliyuncs.com/assets/img/erakomp_logo.png" alt="" width="60"
            height="60"></a>
      </div>
      <div class="links">
        <a href="/index" >Home</a>

        <a href="/gallery">Gallery</a>
        <a href="/video" class="mainlink">Testimony</a>
        <a href="/career">Career</a>

      </div>
    </div>
    <!-- <section>
        <p style="font-size: 120px; text-align: center; font-family: 'Staatliches', cursive; font-weight: bold; color:white;"><mark>SORRY THIS PAGE IS UNDER CONSTRUCTION</mark></p>
      </section>-->

    <section>
      <video id="slider" style="border:3px solid black; background-color:rgba(0, 0, 0, 0.8); background-size:60%;  position: absolute;
           top:5%;
           left:10%;
           width: 80%;
           height: 80%;" autoplay loop>
        <source src="https://cdn.erakomp.co.id/assets/video/1.mp4" type="video/mp4">
      </video>
      <ul class="navigation">
        <li onclick="videoUrl('https://cdn.erakomp.co.id/assets/video/1.mp4')">
          <p style="text-align: center; font-weight: bold;">RSU Pengayoman</p><img
            src="https://cdn.erakomp.co.id/assets/video/video1.PNG" alt="" style="opacity: 1;">
        </li>
        <li onclick="videoUrl('https://cdn.erakomp.co.id/assets/video/2.mp4')">
          <p style="text-align: center; font-weight: bold;">PT Ciputra Development</p><img
            src="https://cdn.erakomp.co.id/assets/video/video2.PNG" alt="" style="opacity: 1;">
        </li>
        <li onclick="videoUrl('https://cdn.erakomp.co.id/assets/video/3.mp4')">
          <p style="text-align: center; font-weight: bold;">PT Batan</p><img
            src="https://cdn.erakomp.co.id/assets/video/3.PNG" alt="" style="opacity: 1;">
        </li>

      </ul>
    </section>
    <script type="text/javascript">
      function videoUrl(getVid) {
        document.getElementById("slider").src = getVid;
      }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <div class="footer">
      <h2 style="color: white; font-weight: bold; font-size: large;">&#169; PT. Erakomp Infonusa. All Right Reserved.
      </h2>
      <div class="footerlinks">
        <a href="https://www.facebook.com/erakomp.co.id/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/erakomp" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/in/erakompinfonusa/" class="fa fa-linkedin"></a>
        <a href="https://www.youtube.com/channel/UCfuOPCONEg-BPwQI5cMWwig" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/erakomp/" class="fa fa-instagram"></a>
      </div>
    </div>

@endsection