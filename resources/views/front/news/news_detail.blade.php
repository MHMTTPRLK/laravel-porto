@extends('front.layout.master')
@section('title','News')
@section('content')
<body>

<div class="body">

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">

                <div class="col-md-12">

                    <div class="blog-posts single-post mt-xl">

                        <article class="post post-large blog-single-post">

                            <div class="post-content">

                                <h1>{{$newsDetail->title}}</h1>

                                <div class="divider divider-primary divider-small mb-xl">
                                    <hr>
                                </div>

                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#">{{$newsDetail->author}}</a> </span>
                                    <span><i class="fa fa-list"></i> <a href="#">{{$newsDetail->getCategory->name}}</a></span>
                                    <span><i class="fa fa-tag"></i> <a href="#">{{$newsDetail->slug}}</a></span>

                                </div>

                                <img src="{{asset($newsDetail->image)}}" class="img-responsive pull-left mb-xs mr-xl" alt="" style="width: 250px; height: 250px">

                                <p class="lead">{!! $newsDetail->content !!}</p>







                            </div>
                        </article>

                    </div>

                </div>

            </div>

        </div>
    </div>





@endsection
