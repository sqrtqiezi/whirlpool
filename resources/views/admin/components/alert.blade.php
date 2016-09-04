@section('style-in-header')
	@parent
	<link rel="stylesheet" type="text/css"
	      href="{!! asset('css/sweetalert.css') !!}">
@endsection

@section('script-in-header')
	@parent
	<script src="{!! asset('js/sweetalert.js') !!}"></script>
@endsection

@section('script-in-footer')
	@parent
	@include('Alerts::alerts')
@endsection

