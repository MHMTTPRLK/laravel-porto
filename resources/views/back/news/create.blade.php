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
            <form method="post" action="{{route('admin.news.store')}}" enctype="multipart/form-data">
            @csrf
            <!-- admin.İçerikler.store yapma amacımız resource da böyle default tanımlanabiliyor.-->
                <!-- İçerik Başlığı-->
                <div class="form-group">
                    <label>İçerik Başlığı</label>
                    <input type="text" name="title" class="form-control" required/>
                </div>
                <!-- İçerik Kategori-->
                <div class="form-group">
                    <label>İçerik Kategori</label>
                    <select class="form-control" name="category" required>
                        <option value="">Seçim Yapınız</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <!-- İçerik Fotografı-->
                <div class="form-group">
                    <label>İçerik Fotografı</label>
                    <input type="file" name="image" class="form-control" required/>
                </div>
                <!-- İçerik Durum-->
                <div class="form-group">
                    <label>İçerik Durum</label>
                    <select class="form-control" name="status" required>
                        <option value="">Seçim Yapınız</option>
                        <option value="0">Pasif</option>
                        <option value="1">Aktif</option>

                    </select>

                </div>
                <!-- İçerik Yazarı-->
                <div class="form-group">
                    <label>İçerik Yazarı</label>
                    <input type="text" name="author" class="form-control" required/>
                </div>
                <!-- İçerik İçeriği-->
                <div class="form-group">
                    <label>İçerik İçeriği</label>
                    <textarea name="editor" class="form-control" ></textarea>

                </div>
                <!-- İçerik Button-->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Oluştur</button>
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
    <script>

    </script>

@endsection


