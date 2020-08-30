@extends('back.layout.master')
@section('title','Tüm Kategoriler')
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



            <div class="row">
                <!-- Category Create Form -->
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Yeni Kategori Oluştur</h6>
                        </div>
                        <div class="x_panel card-body">
                            <form method="post" action="{{route('admin.categorie.create')}}">
                                @csrf
                                <div class="form-group">

                                    <label>Kategori Adı</label>
                                    <input type="text" class="form-control" name="category_name" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  btn-block " >Ekle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Category Show Table -->
                <div class="col-md-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                        </div>
                        <div class="x_panel card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Kategori Adı</th>
                                        <th>İçerik Sayısı</th>
                                        <th>Durum</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categorys as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->newsCount()}}</td>
                                        <td>
                                            <input class="switch"  category-id="{{$category->id}}" width="100px" type="checkbox" data-on="Aktif" data-off="Pasif" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                                   @if($category->status==1) checked @endif >
                                        </td>
                                        <td>
                                            <a category-id="{{$category->id}}" title="Kategori Düzenle" class="btn btn-sm btn-primary edit-click"><i class="fa fa-pencil text-white"></i></a>
                                            <a category-id="{{$category->id}}" category-name="{{$category->name}}" category-count="{{$category->newsCount()}}"    title="Kategori Sil" class="btn btn-sm btn-danger remove-click"><i class="fa fa-trash  text-white"></i></a>
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

    <!-- Edit Modal -->
    <div id="edit-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Kategoriyi Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.categorie.update')}}">
                        @csrf
                        <div class="form-group">
                            <label>Kategori Adı</label>
                            <input  id="category" type="text" class="form-control" name="category_name"/>
                            <input  id="category-id" type="hidden"  name="id"/>
                        </div>
                        <div class="form-group">
                            <label>Kategori Slug</label>
                            <input id="slug" type="text" class="form-control" name="category_slug"/>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div id="delete-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Kategoriyi Sil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  id="body"class="modal-body">
                    <div  class="alert alert-danger" id="articleAlert">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                    <form action="{{route('admin.categorie.delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="deleteId"/>
                        <button  id="deleteButton" type="submit" class="btn btn-success">Sil</button>
                    </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
        $(function () {
            //edit-click
            $('.edit-click').click(function () {
                id= $(this)[0].getAttribute('category-id');
                $.ajax({
                    type:'GET',
                    url:'{{route('admin.categorie.getdata')}}',
                    data:{id:id},
                    success:function (data) {
                        console.log(data);
                        $('#category').val(data.name);
                        $('#category-id').val(data.id);
                        $('#slug').val(data.slug);
                        $('#edit-Modal').modal();
                    }

                });
            });
            //remove-click
            $('.remove-click').click(function () {
                id= $(this)[0].getAttribute('category-id');
                count= $(this)[0].getAttribute('category-count');
                ad= $(this)[0].getAttribute('category-name');
                if(id==1)
                {
                    $('#articleAlert').html(ad+' Kategori Sabit Kategoridir Silinemez.! Silinen Diger Kategorilere Ait Makaleler Buraya Eklencektir.');
                    $('#body').show();
                    $('#deleteButton').hide();
                    $('#delete-Modal').modal();
                    return;
                }
                $('#deleteButton').show();
                $('#deleteId').val(id);
                $('#articleAlert').html('Bu Kategoriye Ait Makale bulunmamaktadır. Yine de Silmek İstediğinize Emin misiniz ?');
                //$('#articleAlert').html('');
                $('#body').show();

                if(count>0)
                {
                    $('#articleAlert').html('Bu Kategoriye Ait  '+count+' makale bulunmaktadır. Silmek İstediğinize Emin misiniz ?');
                    $('#body').show();
                }
                $('#delete-Modal').modal();

            });
        })
    </script>
    <script>
        //status update switch
        $(function() {
            $('.switch').change(function() {
                id= $(this)[0].getAttribute('category-id');
                statu=$(this).prop('checked');
                alert('Durum Değişti');
                $.get("{{route('admin.categorie.switch')}}", {id:id,statu:statu},function(data, status){
                    console.log(data);
                });
            })
        })
    </script>

@endsection





