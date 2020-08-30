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
            <h6 class="m-0 font-weight-bold text-primary float-left"><strong>{{$news->count()}} Makale Mevcut</strong>
            </h6>
            <h6 class="m-0 font-weight-bold text-primary float-right">
                <a href="{{route('admin.news.index')}}"  class="btn btn-success btn-sm float-right" ><i class="fa fa-check">  Aktif Makaleler</i></a>

            </h6>


        </div>
        <div class=" x_panel card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotograf</th>
                        <th>Makale Başlığı</th>
                        <th>Kategori</th>
                        <th>Görüntülenme Sayısı</th>
                        <th>Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td>
                                <img src="{{asset($new->image)}} " width="200px">
                            </td>
                            <td>{{$new->title}}</td>
                            <td>{{$new->getCategory->name}}</td>
                            <td>{{$new->hit}}</td>
                            <td>{{$new->created_at->diffForHumans()}}</td>

                            <td>
                                <a href="{{route('admin.recover.news',$new->id)}}"  title="Geri Al" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i></a>
                                <a href="{{route('admin.hard.delete.news',$new->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

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

