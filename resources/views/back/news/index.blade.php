@extends('back.layout.master')
@section('title','News')
@section('sidebar')
    @include('back.layout.sidebar')
@endsection @section('menu_footer')
    @include('back.layout.menu_footer')
@endsection
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left" style="float: left; font-weight: bold; font-size: 15px; !important;">
                <strong>{{$news->count()}} Makale Mevcut</strong>
            </h6>
            <h6 class="m-0 font-weight-bold text-primary float-right" style="float: right; font-weight: bold !important;">
                <a href="{{route('admin.trashed.news')}}"  class="btn btn-warning btn-sm float-right" style="float: right" ><i class="fa fa-trash">  Silinen Makaleler</i></a>

            </h6>

        </div>
        <div class="x_panel card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotograf</th>
                        <th>Makale Başlığı</th>
                        <th>Kategori</th>
                        <th>Görüntülenme Sayısı</th>
                        <th>Oluşturma Tarihi</th>
                        <th> Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($news as $new)
                        <tr>
                            <td>
                                <img src="{{asset($new->image)}}" width="200px">
                            </td>
                            <td>{{$new->title}}</td>
                            <td>{{$new->getCategory->name}}</td>
                            <td>{{$new->hit}}</td>
                            <td>{{$new->created_at->diffForHumans()}}</td>
                            <td>
                                <input class="switch"  news_id="{{$new->id}}" width="100px" type="checkbox" data-on="Aktif" data-off="Pasif" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                @if($new->status==1) checked @endif>
                            </td>
                            <td>
                                <a href=""  target="_blank" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{route('admin.news.edit',$new->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('admin.delete.news',$new->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            <!--  resources controller 1.yontemi boyle.
                             <form method="post" action="}">
                                    @csrf
                            @method('DELETE')
                                <button title="Sil"  type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                            </form>
                            -->
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
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function() {
                id= $(this)[0].getAttribute('news_id');
                statu=$(this).prop('checked');
                alert('Durum Değişti');
                $.get("{{route('admin.switch')}}", {id:id,statu:statu},function(data, status){
                    console.log(data);
                });
            })
        })
    </script>
@endsection
