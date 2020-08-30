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

        </div>
        <div class=" x_panel card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </div>
            @endif
            <form method="post" action="{{route('admin.news.update',$news->id)}}" enctype="multipart/form-data">
            @method('PUT')  <!--Güncelleme işleminde route için methodu belirledik.-->
            @csrf
            <!-- admin.makaleler.store yapma amacımız resource da böyle default tanımlanabiliyor.-->
                <!-- İçerik Başlığı-->
                <div class="form-group">
                    <label>İçerik Başlığı</label>

                    <input type="text" name="title" class="form-control"  value="{{$news->title}}" required/>
                </div>
                <!-- İçerik Author-->
                <div class="form-group">
                    <label>İçerik Author</label>

                    <input type="text" name="author" class="form-control"  value="{{$news->author}}" required/>
                </div>
                <!-- İçerik Kategori-->
                <div class="form-group">
                    <label>İçerik Kategori</label>
                    <select class="form-control" name="category" required>
                        <option  value="">Seçim Yapınız</option>
                        @foreach($categories as $category)
                            <option @if($news->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <!-- İçerik Fotografı-->
                <div class="form-group">
                    <label>İçerik Fotografı</label> <br>
                    <img src="{{asset($news->image)}}" class="img-thumbnail" width="300"/>

                    <input type="file" name="image" class="form-control"/>
                </div>
                <!-- İçerik İçeriği-->
                <div class="form-group">
                    <label>İçerik İçeriği</label>
                    <textarea name="editor" class="form-control" >{{$news->title}}</textarea>

                </div>
                <!-- İçerik Button-->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">İçerikyi Güncelle</button>
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Ckeditor-->
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection




