@extends('layouts.listing')
@section('content')
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <a href="/jobposting"><div class="btn btn-primary mb-5" style="background-color: rgb(52, 178, 252); border-radius:50px;">Back</div></a>

                                
                            </div><!-- end title -->
                            <p>{{$posts->created_at->format('l, d-M-Y')}}</p>
                            <p><b>Job Title</b> : {{$posts->title}}</p>
                            <p><b>Job Description</b> : {{$posts->description}}</p>
                            <p><b>Education Requirement</b> : {{$posts->education}} </p>
                            <p><b>Experience(s) Requirement</b> : {{$posts->experience}} years</p>

                            <a href="/career"><div class="btn btn-primary" style="background-color: rgb(52, 178, 252); border-radius:50px;">Apply</div></a>
                        </div><!-- end blog-list -->
                    </div><!-- end col -->

                    @endsection