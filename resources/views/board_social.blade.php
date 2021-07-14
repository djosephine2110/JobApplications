@extends('layouts.listing')
@section('content')
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <h3 class="color-green"><a href="blog-category-01.html" title="">Job Listings</a></h3>
                            </div><!-- end title -->
                            @foreach($posts as $post)
                            
                            @if($post->category === 'Social Media')
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="https://cdn.erakomp.co.id/assets/joblisting/images/20943993.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->
                               
                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="/details/{{$post->id}}" title="">{{$post->title}}</a></h4>
                                    <p>{{$post->description}}</p>
                                    <small><a href="blog-category-01.html" title="">{{$post->created_at}}</a></small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                           
                            @endif
                            @endforeach

                        </div><!-- end blog-list -->
                    </div><!-- end col -->

                    @endsection