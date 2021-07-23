@extends('layouts.posting')
@section('content')
  <!-- Blog Section -->
  <section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-text section-header text-center">
            <div>
              <h2 class="section-title">Job Posting</h2>
              <div class="desc-text">
                <p>Please check job posting below, but if you don't find any job you are looking for, you are still
                  welcome to apply to our company</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row">
        <!-- Start Col -->
        @foreach($posts as $post)
         @if($post->status === "Post")
        <div class="col-lg-4 col-md-6 mb-3 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper">
            <div class="blog-item-img">
              <a href="/details/{{$post->id}}">
                <img src="https://cdn.erakomp.co.id/compro/img/5330999.jpg" class="img-fluid" alt="">
              </a>
            </div>
            <div class="blog-item-text">
              <h3><a href="/details/{{$post->id}}">{{$post->title}}</a></h3>
              <p>{{$post->description}}</p>
              <a href="" class="read-more">{{$post->created_at->format('h:m:s')}}</a>
            </div>
            <div class="author">
              
              <span class="date float-right"><i class="zmdi zmdi-calendar-check"></i>
                <a href="#">{{$post->created_at->format('l, Y/m/d')}}</a></span>
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        </div>
        <!-- End Col -->
        <!-- Start Col -->

        <!-- End Col -->
        @endif
        @endforeach
      </div>
      <!-- End Row -->
    </div>
  </section>
  <!-- blog Section End -->


 
  @endsection