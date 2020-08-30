@extends('back.layout.master')
@section('title','Social ')
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
                <h3>Ayarlar</h3>
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
                            <h2>Sosyal Medya Ayarlar</h2>
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

                            <form action="{{route('admin.social.update')}}"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                               @csrf
                                <!-- Site Facebook -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="facebook" value="{{$social->facebook}}" >
                                    </div>
                                </div>
                                <!-- Site Twitter -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="twitter" value="{{$social->twitter}}">
                                    </div>
                                </div>
                                <!-- Site Youtube -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  class="form-control col-md-7 col-xs-12" name="youtube" value="{{$social->youtube}}">
                                    </div>
                                </div>
                                <!-- Site Linkedin -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="linkedin" value="{{$social->linkedin}}">
                                    </div>
                                </div>
                                <!-- Site İnstagram -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstagram<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  class="form-control col-md-7 col-xs-12" name="instagram" value="{{$social->instagram}}">
                                    </div>
                                </div>
                                <!-- Site Google -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Github<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="github" value="{{$social->github}}">
                                    </div>
                                </div>
                                   <div class="form-group">
                                       <button type="submit" class="btn btn-block btn-md btn-success">Güncelle</button>
                                   </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
