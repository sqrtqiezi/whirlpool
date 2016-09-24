@section('style-in-header')
	@parent
	<link rel="stylesheet" type="text/css"
	      href="{!! asset('css/sweetalert.css') !!}">
@stop

@section('script-in-header')
	@parent
	<script src="{!! asset('js/sweetalert.js') !!}"></script>
@stop

@section('script-in-footer')
	@parent
	@include('Alerts::alerts')
@stop

