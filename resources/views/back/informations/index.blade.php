@extends('back.layout.master')
@section('title','Information ')
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
                            <h2>İletişim Ayarları</h2>
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

                            <form action="{{route('admin.info.update')}}"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                               @csrf
                                <!-- Site Telefon -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numaranız <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="tel" value="{{$info->tel}}" >
                                    </div>
                                </div>
                                <!-- Site GSM -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GSM Numaranız  <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="gsm" value="{{$info->gsm}}">
                                    </div>
                                </div>
                                <!-- Site Fax -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fax Numaranız <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="fax" value="{{$info->fax}}">
                                    </div>
                                </div>
                                <!-- Site mail -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Adresiniz<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="email" value="{{$info->email}}">
                                    </div>
                                </div>
                                <!-- Site Adres -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adresniz <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="address" value="{{$info->address}}">
                                    </div>
                                </div>
                                <!-- Site İl-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şehir<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="city" value="{{$info->city}}">
                                    </div>
                                </div>
                                <!-- Site İlçe-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe/Cadde<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="street" value="{{$info->street}}">
                                    </div>
                                </div>
                                <!-- Site Mesai -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalışma Saatleri(Hafta İçi)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="hour" value="{{$info->hour}}" >
                                    </div>
                                </div>
                                <!-- Site Mesai -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalışma Saatleri(Hafta Sonu)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="hour2" value="{{$info->hour1}}" >
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
