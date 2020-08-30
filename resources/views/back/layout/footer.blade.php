<!-- footer content -->
<footer>
    <div class="pull-right">
        Mehmet Parlak- Bootstrap Admin Template
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>



<!-- Bootstrap -->
<script src="{{asset('admin/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('admin/')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('admin/')}}/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('admin/')}}/build/js/custom.min.js"></script>

<!-- CkeDitor finder -->
@yield('js')
@toastr_js
@toastr_render
</body>
</html>

