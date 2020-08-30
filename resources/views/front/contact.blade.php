@extends('front.layout.master')
@section('title','Contact Page')
@section('content')
<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-7">
                @if(session('success'))


                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="mt-xl mb-none">Bize Ulaşın</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>
                <p class="lead mb-xl mt-lg">Bize Ulaşmak için aşagdaki formu eksiksiz doldurup iletişime geçebilirsiniz.</p>

                <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                    <strong>Tebrikler!</strong> Mesajınız Gönderildi.
                </div>

                <div class="alert alert-danger hidden mt-lg" id="contactError">
                    <strong>Hata!</strong> Mesajınız Gönderilmedi.
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>

                <form id="contactForm" action="{{route('contact.post')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" placeholder="Name Surname" value="" maxlength="100" class="form-control input-lg" name="name" id="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" placeholder="Email" value=""  data-msg-email="Emailinizi kontrol ediniz.." maxlength="100" class="form-control input-lg" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">

                                <select class="form-control" name="topic" style="height: 50px" required>
                                    <option>Konu</option>
                                    <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                                    <option @if(old('topic')=="İstek") selected @endif >İstek</option>
                                    <option @if(old('topic')=="Genel") selected @endif>Genel</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea maxlength="5000" placeholder="Mesajınız" data-msg-required="Lütfen mesajınızı giriniz.." rows="5" class="editor1" name="message" id="message" required>
                                    {{old('message')}}
                                </textarea>
                            </div>
                        </div>
                        <script>
                            CKEDITOR.replace( 'message' );
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit"  class="btn btn-primary btn-lg mb-xlg" data-loading-text="Gönderiliyor...">Mesaj Gönder</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4 col-md-offset-1">

                <h4 class="mt-xl mb-none">İletişim Adresleri</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Adres:</strong>  @if($info->address!=null and $info->city!=null and $info->street!=null)
                            {{$info->street.' , '.$info->city.' '.$info->address}}
                        @else
                            1234 Street Name, City Name, United States
                        @endif</li>
                    <li><i class="fa fa-phone"></i> <strong>Telefon:</strong> @if($info->tel!=null)
                            {{$info->tel}}
                        @else
                        (800) 123-4567
                        @endif </li>
                    <li><i class="fa fa-phone"></i> <strong>GSM:</strong>@if($info->gsm!=null)
                            {{$info->gsm}}
                        @else
                        (800) 123-4567
                        @endif </li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:{{$info->email}}"> @if($info->email!=null)
                                {{$info->email}}
                            @else
                                mail@example.com
                            @endif</a></li>
                </ul>

                <h4 class="pt-xl mb-none">Mesai Saatleri</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i>Hafta İçi: @if($info->hour1!=null)
                            {{$info->hour1}}
                        @else
                            08.00 - 17.00
                        @endif</li>
                    <li><i class="fa fa-clock-o"></i>Hafta Sonu: @if($info->hour2!=null)
                            {{$info->hour2}}
                        @else
                            09.00-14.00
                        @endif</li>

                </ul>

            </div>
        </div>
    </div>



</div>
@endsection

