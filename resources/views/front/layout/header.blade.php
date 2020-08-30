<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <!-- Favicon -->
    @if($config->favicon!=null)
    <link rel="shortcut icon" href="{{asset($config->favicon)}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset($config->favicon)}}">
    @else
        <link rel="shortcut icon" href="{{asset('uploadImages/')}}/prlk-blog-favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('porto/')}}/img/apple-touch-icon.png">
    @endif
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/css/theme-shop.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{asset('porto/')}}/vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/css/skins/skin-law-firm.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/css/demos/demo-law-firm.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('porto/')}}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{asset('porto/')}}/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="{{route('homepage')}}">
                                @if($config->logo!=null)
                                <img alt="Porto" width="164" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{asset($config->logo)}}">
                                @else
                                <img alt="Porto" width="164" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{asset('porto/')}}/img/demos/law-firm/logo-law-firm.png">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <ul class="header-extra-info">
                            <li>
                                <div class="feature-box feature-box-call feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icon-call-end icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-none">
                                            @if($info->tel!=null)
                                                {{$info->tel}}
                                            @else
                                            (800) 123-4567
                                        @endif</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="hidden-xs">
                                <div class="feature-box feature-box-mail feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icon-envelope icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-none"><a href="mailto:mail@example.com">
                                                @if($info->email!=null)
                                                    {{$info->email}}
                                                @else
                                                    mail@example.com
                                                @endif
                                               </a></h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
                <div class="container">
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <div class="header-search visible-lg">
                        <form id="searchForm" action="page-search-results.html" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                <span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="icon-magnifier icons"></i></button>
										</span>
                            </div>
                        </form>
                    </div>
                    <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                        <nav>
                            <ul class="nav nav-pills" id="mainNav">
                                <li class="active">
                                    <a href="{{route('homepage')}}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('news')}}">
                                        News
                                    </a>
                                </li>
                                @foreach($menus as $menu)
                                    <li>
                                        <a href="">
                                            {{$menu->title}}
                                        </a>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="{{route('contact')}}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
@yield('slider')
