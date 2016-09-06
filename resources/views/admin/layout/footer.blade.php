
<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->
	<div class="pull-right hidden-xs">
		Anything you want
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; 2016 <a href="#">{!! $siteConfig->brand or '某公司' !!}</a>.</strong> All rights
	reserved.
</footer>

{{-- 右边栏 --}}
@yield('sidebar-right')
{{-- /.右边栏 --}}

<!-- REQUIRED JS SCRIPTS -->

@section('script-in-footer')
<!-- jQuery 2.2.3 -->
<script
		src="{!! asset('adminlte/js/jquery-2.2.3.min.js') !!}"></script><!-- Bootstrap 3.3.6 -->
<script src="{!! asset('adminlte/bootstrap/js/bootstrap.min.js') !!}"></script><!-- AdminLTE App -->
<script src="{!! asset('adminlte/js/app.min.js') !!}"></script>
@show
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. --></body></html>
