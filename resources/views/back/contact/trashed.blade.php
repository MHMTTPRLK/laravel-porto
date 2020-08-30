@extends('back.layout.master')
@section('title','Contact Trashed')
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
                        <h6 class="m-0 font-weight-bold text-primary float-left"><strong>{{$contacts->count()}} Makale Mevcut</strong>
                        </h6>
                        <h6 class="m-0 font-weight-bold text-primary float-right">
                            <a href="{{route('admin.contact.index')}}"  class="btn btn-success btn-sm float-right" style="font-size: 15px;"><i class="fa fa-check">  Okunmamış Mailler</i></a>

                        </h6>


                    </div>
                    <div class=" x_panel card-body">
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
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>@if($contact->durum==1)
                                                <i class="fa fa-check-circle green fa-2x text-wihte"></i>
                                            @endif
                                            @if($contact->durum==0)
                                                <i class="fa fa-check-circle  fa-2x text-wihte"></i>
                                            @endif
                                        </td>
                                        <td>
                                            {{$contact->name}}
                                        </td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->topic}}</td>
                                        <td>{{substr($contact->message,0,10)}}...</td>
                                        <td>{{$contact->created_at->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('admin.contact.recover',$contact->id)}}"  title="Geri Al" class="btn btn-sm btn-success"><i class="fa fa-recycle"></i></a>
                                            <a href="{{route('admin.contact.hardDelete',$contact->id)}}" title="Sil"   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

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

