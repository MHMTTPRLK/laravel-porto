@extends('back.layout.master')
@section('title','Menu Settings')
@section('sidebar')
@include('back.layout.sidebar')
@endsection
@section('menu_footer')
@include('back.layout.menu_footer')
@endsection
@section('content')
<!-- page content -->
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
                            <h2>Menu Yönetim Sayfası  <small>Mehmet Parlak - Developer</small></h2>


                            <div class="clearfix"></div>
                        </div>
                        <div class="card-body">
                            <div id="orderSuccess" style="display: none" class="alert alert-success">
                                Sıralama Başarıyla Güncellendi.
                            </div>
                        <div class="x_content">

                            <table class="table" id="dataTable">
                                <thead>
                                <tr>
                                    <th>Sıralama</th>
                                    <th>Menu  Ad</th>
                                    <th>Menu  Sıra</th>
                                    <th>Menu  Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="orders">
                                @foreach($menus as $menu)
                                <tr id="menu_{{$menu->id}}">
                                    <td scope="row">
                                        <i class="fa fa-arrows-v handle fa-2x" style="cursor: move">

                                            {{$menu->order}}

                                        </i>
                                    </td>
                                    <td scope="row">{{$menu->title}}</td>
                                    <td scope="row">{{$menu->order}}</td>
                                    <td scope="row">
                                    <input class="switch"  menu-id="{{$menu->id}}"  width="100px" type="checkbox" data-on="Aktif" data-off="Pasif"
                                                            data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                                            @if($menu->status==1) checked @endif
                                        ></td>
                                    <td scope="row"></td>

                                    <td>
                                        <a href="{{route('admin.menu.update',$menu->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.menu.delete',$menu->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
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
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- aktiflik vs pasiflik status-->
    <script>
        $(function() {
            $('.switch').change(function() {
                id= $(this)[0].getAttribute('menu-id');
                statu=$(this).prop('checked');
                alert('Durum Değişti');
                $.get("{{route('admin.menu.switch')}}", {id:id,statu:statu},function(data, status){
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
                    $.get("{{route('admin.menu.orders')}}?"+siralama,function (data,status) {});
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
