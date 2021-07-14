@extends('layouts.listing')
@section('content')
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                
                            </div><!-- end title -->
                            <p>{{$posts->created_at->format('l, d-M-Y')}}</p>
                            <p><b>Job Title</b> : {{$posts->title}}</p>
                            <p><b>Job Description</b> : {{$posts->description}}</p>
                            <p><b>Education Requirement</b> : {{$posts->education}} </p>
                            <p><b>Experience(s) Requirement</b> : {{$posts->experience}} years</p>

                                <div class="btn btn-primary"><a href="/">Apply Now</a></div>

                        </div><!-- end blog-list -->
                    </div><!-- end col -->

                    @endsection