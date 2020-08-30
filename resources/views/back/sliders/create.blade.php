@extends('back.layout.master');
@section('title','Slider Add')
@section('sidebar')
    @include('back.layout.sidebar')
@endsection @section('menu_footer')
    @include('back.layout.menu_footer')
@endsection
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Slider Ekleme Sayfası</h3>
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
                            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach

                                    </div>
                                @endif
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

                                <form action="{{route('admin.slider.create.post')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                    <!-- Slider Ad -->
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text"   class="form-control col-md-7 col-xs-12" name="slider_name">
                                        </div>
                                    </div>

                                    <!-- Slider Durum -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Status <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="heard" class="form-control"  name="status" required>
                                                <option value="">Seçim Yapınız</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                                <
                                            </select>
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
                                        <button type="submit" name="sliderKaydet"class="btn btn-primary">Kaydet</button>
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
@section('js')
    <!-- Ckeditor-->
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );

    </script>
    <script>

    </script>

@endsection
