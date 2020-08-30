<!DOCTYPE html>
<html lang="tr">
<head>
    <META HTTP-EQUIV="Content-language" CONTENT="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

    <!-- jQuery -->
    <script src="{{asset('admin/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Select2 -->
    <link href="{{asset('admin/')}}/vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{asset('admin/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- title icon -->
    <link rel="shortcut icon" href="{{asset('Back/')}}/yonetim_images/code.jpg"type="image/x-icon" />


    <link href="{{asset('admin/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/')}}/build/css/custom.min.css" rel="stylesheet">
    @toastr_css
    @yield('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-code"></i> <span>Mehmet Parlak</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">

                        @if(Session::get('profilePhoto'))

                        <img src="{{asset(Session::get('profilePhoto'))}}" alt=""class="img-circle profile_img">
                        @else
                        <img src="{{asset('resim/')}}/resimyok.jpg" alt=""class="img-circle profile_img">
                        @endif
                    </div>
                    <div class="profile_info">

                        <h2>{{Session::get('userData')}} </h2>
                        @if(Session::get('userDatam')==1)
                                Yetki:<strong>Yönetici</strong>
                        @else
                            Yetki:<strong>Kullanıcı</strong>
                        @endif

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                @yield('sidebar')


            <!-- /menu footer buttons -->
            @yield('menu_footer')
            <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                @if(Session::get('profilePhoto'))

                                    <img src="{{asset(Session::get('profilePhoto'))}}" alt="">
                                    {{Session::get('userData')}}
                                @else
                                    <img src="{{asset('resim/')}}/resimyok.jpg" alt="">
                                    {{Session::get('userData')}}
                                @endif
                               


                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="profil.php"> Profile</a></li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('admin/')}}/production/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('admin/')}}/production/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('admin/')}}/production/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset('admin/')}}/production/images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


