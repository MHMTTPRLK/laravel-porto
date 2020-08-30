@extends('front.layout.master')
@section('title','İlk Proje')
@section('content')
<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-7">
                <h1 class="mt-xl mb-none">{!! $abouts->name !!}</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>
                <p>{!! $abouts->about_content !!}</p>
            </div>
            <div class="col-md-4 col-md-offset-1">

                <h4 class="mt-xl mb-none">Video Tanıtım</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <div class="embed-responsive embed-responsive-16by9 mb-xl">
                    <iframe width="300" height="200" src="https://www.youtube.com/embed/{{$abouts->about_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
                </div>

                <blockquote class="blockquote-secondary">
                    <p class="font-size-lg">"{!! $abouts->about_vizyon !!}"</p>
                    <footer>Mehmet Parlak <cite> - Developer</cite></footer>

                </blockquote>

                <h4 class="mt-xlg">Misyonumuz</h4>

                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <ul class="list list-unstyled list-primary list-borders">

                    <li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2020 - </strong>{!! $abouts->about_misyon !!} </li>

                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
