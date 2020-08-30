
<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="{{route('homepage')}}" class="logo mb-md">
                    <img alt="Porto Website Template" class="img-responsive" width="97" height="32" src="img/demos/law-firm/logo-law-firm-footer.png">
                </a>
                <h5 class="mb-sm">Porto Law Firm</h5>
                <ul class="list list-icons mt-xl">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong>

                        @if($info->address!=null and $info->city!=null and $info->street!=null)
                            {{$info->street.' , '.$info->city.' '.$info->address}}
                        @else
                            1234 Street Name, City Name, United States
                        @endif
                    </li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"> @if($info->email!=null)
                                {{$info->email}}
                            @else
                                mail@example.com
                            @endif</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-md-offset-1">

            </div>
            <div class="col-md-3">
                <h5 class="mb-sm">Toll Free</h5>
                <span class="phone">@if($info->tel!=null)
                        {{$info->tel}}
                    @else
                    (800) 123-4567
                    @endif</span>
                <ul class="social-icons mt-lg">
                    @php
                    $socials=['facebook','twitter','instagram','linkedin','youtube','github'];
                    @endphp
                    @foreach($socials as $social)
                        @if($sosyal->$social!=null)
                    <li class="social-icons-facebook"><a href="{{$sosyal->$social}}" target="_blank" title="{{$social}}"><i class="fa fa-{{$social}}"></i></a></li>
                            @endif
                            @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="center">© Copyright {{date('Y')}}}. All Rights Reserved. | <a href="{{route('contact')}}">Contact</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="{{asset('porto/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="{{asset('porto/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('porto/')}}/vendor/common/common.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="{{asset('porto/')}}/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="{{asset('porto/')}}/vendor/isotope/jquery.isotope.min.js"></script>
<script src="{{asset('porto/')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('porto/')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('porto/')}}/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('porto/')}}/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('porto/')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('porto/')}}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('porto/')}}/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="{{asset('porto/')}}/js/demos/demo-law-firm.js"></script>

<!-- Theme Custom -->
<script src="{{asset('porto/')}}/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

@yield('js')
@toastr_js
@toastr_render
</body>
</html>
