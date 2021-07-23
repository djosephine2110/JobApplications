@extends('layouts.posting')
@section('content')
  <!-- Contact Us Section -->
  <section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-text section-header text-center">  
            <div>   
              <h2 class="section-title">{{$posts->title}}</h2>
              <p>{{$posts->created_at->format('l, d-M-Y')}}</p>
              <div class="desc-text">
                <p>{{$posts->description}}</p>  
              </div>
            </div> 
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row">
        <!-- Start Col -->
        <div class="col-lg-6 col-md-12">
        <p style="font-size: 20px; font-weight:bold;">Requirements</p>
        <hr>
        <p style="font-size: 16px; font-weight:bold;">Education(s):</p>
        <p>{{$posts->education}}</p>
        <br>
        <p style="font-size: 16px; font-weight:bold;">Experience(s):</p>
        <p>{{$posts->experience}}</p>
       <a href="/career"><button class="btn btn-common mt-3">Apply</button></a>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
          
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-4 col-md-12 ">
          <div class="contact-img">
            <img src="https://cdn.erakomp.co.id/compro/css/5215677.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
    </div>
  </section>
  <!-- Contact Us Section End -->


  @endsection