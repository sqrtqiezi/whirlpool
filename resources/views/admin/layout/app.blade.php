@include('admin.layout.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header" style="height: 45px">
		{{--<h1>--}}
			{{--Page Header--}}
			{{--<small>Optional description</small>--}}
		{{--</h1>--}}
		 {!! \Breadcrumbs::render() !!}
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Your Page Content Here -->
		@yield('content')

	</section>
	<!-- /.content -->
</div>	<!-- /.content-wrapper -->

@include('admin.layout.footer')
