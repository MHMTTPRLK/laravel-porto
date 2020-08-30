@extends('back.layout.master')
@section('title','Configs')
@section('sidebar')
     @include('back.layout.sidebar')
@endsection
@section('menu_footer')
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
                            <h2>Genel Ayarlar</h2>
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

                            <form action="{{route('admin.config.update')}}"  method="POST" id="demo-form2"   enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                                @csrf
                                    <!-- Title,Active -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Site Title -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="title" value="{{$config->title}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Site Aktifliği<span class="required"> *  </span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control" name="active">
                                                        <option @if($config->active==1) selected @endif value="1">Açık</option>
                                                        <option @if($config->active==0) selected @endif value="0">Kapalı</option>
                                                    </select>
                                                </div>

                                        </div>

                                    </div>
                                    </div>
                                    <!-- Descripton,Keywords -->
                                    <div class="row">
                                      <div class="col-md-6">
                                          <!-- Site Description -->
                                          <div class="form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklama<span class="required">*</span>
                                              </label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="description" value="{{$config->description}}">
                                              </div>
                                          </div>
                                      </div>
                                    <div class="col-md-6">
                                        <!-- Site Keywords -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Keywords<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="keywords" value="{{$config->keywords}}">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Url,Author -->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <!-- Site Url -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Url <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="site_url" value="{{$config->site_url}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Site Author -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="author" value="{{$config->author}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Logo,Favicon -->
                                    <div class="row">
                                      <div class="col-md-6">
                                          <!-- Logo Seç -->
                                          <div class="form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ayar Logo Seç <span class="required">*</span>
                                              </label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input type="file"   class="form-control col-md-7 col-xs-12" name="logo">
                                              </div>
                                          </div>
                                      </div>
                                    <div class="col-md-6">
                                        <!-- Favicon Seç -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Favicon Seç <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file"   class="form-control col-md-7 col-xs-12" name="favicon">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- GoogleMap,Analystic -->
                                    <div class="row">
                                    <div class="col-md-6">
                                        <!-- Site GoogleMap -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GoogleMap<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="googlemap" value="{{$config->googlemap}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Site Analystic -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Analystic<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="analystic" value="{{$config->analystic}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Smptp port,smptp password -->
                                    <div class="row">
                                    <div class="col-md-6">
                                        <!-- Site SMPT -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMPTP Port<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="smptp_port" value="{{$config->smptp_port}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Site SMPTP PASSWORD -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMPTP Password<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="smptp_password" value="{{$config->smptp_password}}">
                                            </div>
                                        </div>
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
