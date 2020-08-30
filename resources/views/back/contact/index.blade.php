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
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary float-left"><strong>{{$mesajlar->count()}} Mesaj Mevcut</strong>
                    </h6>
                    <h6 class="m-0 font-weight-bold text-primary float-right" style="float: right; font-weight: bold !important;">
                        <a href="{{route('admin.contact.trashed')}}"  class="btn btn-warning btn-sm float-right" style="float: right;font-size: 15px;" ><i class="fa fa-trash">  Silinen Mailler</i></a>

                    </h6>

                </div>
                <div class="x_panel card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th><i class="fa fa-binoculars  fa-2x text-wihte"></i></th>
                                <th>Gönderen</th>
                                <th>Gönderen Email</th>
                                <th>Konu</th>
                                <th>Mesaj</th>
                                <th>Tarih</th>
                                <th></th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($mesajlar as  $mesaj)
                                <tr>
                                    <td>@if($mesaj->durum==1)
                                            <i class="fa fa-check-circle green fa-2x text-wihte"></i>
                                        @endif
                                        @if($mesaj->durum==0)
                                            <i class="fa fa-check-circle  fa-2x text-wihte"></i>
                                        @endif
                                    </td>
                                    <td>{{$mesaj->name}}</td>
                                    <td>{{$mesaj->email}}</td>
                                    <td>
                                        {{$mesaj->topic}}
                                    </td>
                                    <td>
                                        {!! $mesaj->message !!}
                                    </td><td>
                                        {{$mesaj->created_at->diffForHumans()}}
                                    </td>
                                    <td>
                                        <a  contact-id="{{$mesaj->id}}"  title="Mesaj Görüntüle" class="btn btn-sm btn-info show-click"><i class="fa fa-eye  text-white"></i></a>
                                        <a  href="{{route('admin.contact.delete',$mesaj->id)}}" title="Mesaj Sil" class="btn btn-sm btn-danger remove-click"><i class="fa fa-times  text-white"></i></a>
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
    <!-- Show Modal -->
    <div id="show-Modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mesaj İçerigi</h5>

                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.contact.durum')}}">
                        @csrf
                        <div class="form-group">
                            <label>Gönderen Adı</label>
                            <input  id="contact" type="text" class="form-control" name="name" readonly/>
                            <input  id="contact-id" type="hidden"  name="id"/>

                        </div>
                        <div class="form-group">
                            <label>Gönderen Email</label>
                            <input id="email" type="text" class="form-control" name="email" readonly/>
                            <input id="durum" type="hidden" class="form-control" name="durum"  />
                        </div>
                        <div class="form-group">
                            <label>Konu</label>
                            <input id="topic" type="text" class="form-control" name="topic" readonly/>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mesaj</label>
                            <textarea class="form-control" id="message" name="message" readonly></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger">Kapat</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
        $(function () {
            //show-click
            $('.show-click').click(function () {
                id = $(this)[0].getAttribute('contact-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('admin.contact.getdata')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#contact').val(data.name);
                        $('#contact-id').val(data.id);
                        $('#email').val(data.email);
                        $('#durum').val(data.durum);
                        $('#topic').val(data.topic);
                        $('#message').val(data.message);
                        $('#show-Modal').modal();
                    }

                });
            });

        })
    </script>
@endsection


