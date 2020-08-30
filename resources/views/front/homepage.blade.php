@extends('front.layout.master')
@section('title','İlk Proje')
@section('slider')
@include('front.layout.slider')
@endsection
@section('content')
@include('front.widgets.articleList')
@endsection

