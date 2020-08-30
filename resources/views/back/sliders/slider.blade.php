@extends('back.layout.master')
@section('title','Slider Settings')
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

        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="aranan" placeholder="Arama...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara</button>
                    </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Slider Yönetim Sayfası  <small>Mehmet Parlak - Developer</small></h2>


                            <div class="clearfix"></div>
                        </div>
                        <div class="card-body">
                            <div id="orderSuccess" style="display: none" class="alert alert-success">
                                Sıralama Başarıyla Güncellendi.
                            </div>
                        <div class="x_content">
                            <table class="table" id="dataTable" >
                                <thead>
                                <tr>
                                    <th>Sıralama</th>
                                    <th>Slider Ad</th>
                                    <th >Slider Sira</th>
                                    <th >Slider Durum</th>
                                    <th>Slider Resim</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="orders">
                                @foreach($sliders as $slider)

                                <tr id="page_{{$slider->id}}">
                                    <th scope="row" style="width: 5px !important; ">

                                        <i class="fa fa-arrows-v handle fa-2x" style="cursor: move">

                                                {{$slider->slider_order}}


                                        </i>

                                    </th>

                                    <td>{{$slider->slider_name}}</td>
                                    <td>{{$slider->slider_order}}</td>

                                    <td>
                                        <input class="switch"  slider-id="{{$slider->id}}"  width="100px" type="checkbox" data-on="Aktif" data-off="Pasif"
                                           data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                        @if($slider->status==1) checked @endif
                                        >
                                    <td>
                                        <img  width="200px" src="{{asset($slider->slider_image)}}">
                                    </td>
                                    <td>
                                        <a href="{{route('homepage')}}"  target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('admin.slider.update',$slider->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.slider.delete',$slider->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/font-awesome/css/font-awesome.min.css">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- aktiflik vs pasiflik status-->
    <script>
        $(function() {
            $('.switch').change(function() {
                id= $(this)[0].getAttribute('slider-id');
                statu=$(this).prop('checked');
                alert('Durum Değişti');
                $.get("{{route('admin.slider.switch')}}", {id:id,statu:statu},function(data, status){
                    console.log(data);
                });
            })
        })
    </script>
    <!-- sıralama slider_order-->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            $('#orders').sortable({
                handle:'.handle',
                update:function () {
                    var siralama =  $('#orders').sortable('serialize');
                    $.get("{{route('admin.slider.orders')}}?"+siralama,function (data,status) {});
                    $('#orderSuccess').show();
                    setTimeout(function () {
                        $('#orderSuccess').hide();
                    },1000)
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 1200);


                    console.log(data);
                }
            });
        </script>


        <script type="text/javascript">
            function autoRefresh() {
                window.location.reload();
            }
        </script>


@endsection
