@section('style-in-header')
	@parent
	<link rel="stylesheet" type="text/css"
	      href="{!! asset('css/sweetalert.css') !!}">
@append

@section('script-in-header')
	@parent
	<script src="{!! asset('js/sweetalert.js') !!}"></script>
@append

@section('script-in-footer')
	@parent
	@include('Alerts::alerts')
@append

