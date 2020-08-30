@extends('back.layout.master')
@section('title','Menu Edit')
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
                <h3>Menu  Düzenleme Sayfası</h3>
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

                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <form action="{{route('admin.menu.update.post',$menu->id)}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                                @csrf
                                <!-- Menu Ad -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"   class="form-control col-md-7 col-xs-12" name="title" value="{{$menu->title}}">
                                    </div>
                                </div>

                                    <!-- Menu Durum -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Durum <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="heard" class="form-control"  name="status" required>
                                                @if($menu->status==1)
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                                @endif
                                                @if($menu->status==0)
                                                    <option value="0">Pasif</option>
                                                    <option value="1">Aktif</option>
                                                  @endif

                                            </select>
                                        </div>
                                    </div>

                                <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" name="menuGuncelle"class="btn btn-primary" >Güncelle</button>

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
