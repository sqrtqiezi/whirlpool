<!DOCTYPE html><!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{!! $siteConfig->brand or '某公司' !!}管理后台</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta
			content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
			name="viewport">
@section('style-in-header')
	<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet"
		      href="{!! asset('adminlte/bootstrap/css/bootstrap.min.css') !!}">
		<!-- Font Awesome -->
		<link rel="stylesheet"
		      href="{!! asset('css/font-awesome.min.css') !!}">
		<!-- Ionicons -->
		<link rel="stylesheet"
		      href="{!! asset('css/ionicons.min.css') !!}">
		<!-- Theme style -->
		<link rel="stylesheet"
		      href="{!! asset('adminlte/css/AdminLTE.min.css') !!}">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
					page. However, you can choose any other skin. Make sure you
					apply the skin class to the body tag so the changes take effect.
		-->
		<link rel="stylesheet"
		      href="{!! asset('adminlte/css/skins/skin-blue.min.css') !!}">
		<style rel="stylesheet" type="text/css">
			.datepicker {
				z-index: 999 !important;
			}
		</style>
@show

@section('script-in-header')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script
				src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	@show

	@yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<header class="main-header">

		<!-- Logo -->
		<a href="{{ route('home') }}" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>W</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg">
				<img style="width: 100px;" src="{{ asset('images/logo.png') }}" alt="">
			</span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
				@yield('menu-messages')
				@yield('menu-notifications')
				@yield('menu-tasks')
				<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="{!! asset('adminlte/img/user2-160x160.jpg') !!}"
							     class="user-image" alt="User Image">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs">{{ app('auth')->user()->user_name }}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="{!! asset('adminlte/img/user2-160x160.jpg') !!}"
								     class="img-circle" alt="User Image">

								<p>
									{{ app('auth')->user()->user_name }}
									<small>{{ app('auth')->user()->updated_at }}</small>
								</p>
							</li>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
								<a href="{!! route('panel.reset-password') !!}" class="btn btn-default btn-flat">修改密码</a>
								</div>
								<div class="pull-right">
									<a href="{!! url('panel/logout') !!}"
									   class="btn btn-default btn-flat">退出登录</a>
								</div>
							</li>
						</ul>
					</li>
					@yield('sidebar-right-button')
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="{!! asset('adminlte/img/user2-160x160.jpg') !!}"
					     class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p style="padding: 10px 0;">{{ app('auth')->user()->user_name }}</p>
				</div>
			</div>
        @include('admin.layout.sidebar')
		<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>
