@extends('back.layout.master')
@section('title','Slider Update')
@section('sidebar')
    @include('back.layout.sidebar')
@endsection @section('menu_footer')
    @include('back.layout.menu_footer')
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Slider DüzenlemeSayfası</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Arama...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">


                            <ul class="nav navbar-right panel_toolbox">
                                <li class="dropdown">

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <form action="{{route('admin.slider.update.post',$sliders->id)}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                                @csrf
                                <!-- Slider Ad -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="slider_name" value="{{$sliders->slider_name}}">
                                    </div>
                                </div>

                                <!-- Slider Resim -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img  style="width: 200px; height: 200px;" src="{{asset($sliders->slider_image)}}">

                                    </div>
                                </div>
                                <!-- Slider Resim -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file"   class="form-control col-md-7 col-xs-12" name="slider_image">

                                    </div>
                                </div>
                                <!-- Buttons-->
                                <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" name="slider_Guncelle" class="btn btn-primary" >Güncelle</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
