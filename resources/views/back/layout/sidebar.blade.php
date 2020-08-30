<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3></h3>
        <ul class="nav side-menu">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-home"></i>
                    Anasayfa

                </a>
            </li>
            <li>
                <a href="{{route('admin.categorie.index')}}">
                    <i class="fa fa-life-saver"></i>
                    Kategori Ayarları

                </a>
            </li>
            <li>
                <a href="{{route('admin.about.index')}}">
                    <i class="fa fa-book "></i>
                    Hakkımızda

                </a>

            </li>
            <li><a><i class="fa fa-image"></i> Slider  Ayarları <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin.slider.index')}}">Sliderları Görüntüle</a></li>
                    <li><a href="{{route('admin.slider.create')}}">Slider Ekle</a></li>

                </ul>
            </li>
            <li><a><i class="fa fa-institution"></i> İçerik   Ayarları <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin.news.index')}}">İçerikleri Görüntüle</a></li>
                    <li><a href="{{route('admin.news.create')}}">İçerik Ekle</a></li>

                </ul>
            </li>
            <li><a><i class="fa fa-list"></i>Menu   Ayarları <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin.menu.index')}}">Menuleri Görüntüle</a></li>
                    <li><a href="{{route('admin.menu.create')}}">Menu Ekle</a></li>

                </ul>
            </li>
            <li>
                <a href="{{route('admin.contact.index')}}">
                    <i class="fa fa-envelope"></i>
                    Mailler

                </a>
            </li>
            <li><a><i class="fa fa-cogs"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin.config.index')}}">Genel Ayarlar</a></li>
                    <li><a href="{{route('admin.info.index')}}">İletişim Ayarları</a></li>
                    <li><a href="{{route('admin.social.index')}}">Sosyal Medya Ayarları</a></li>
                </ul>
            </li>


        </ul>
    </div>


</div>
<!-- /sidebar menu -->

