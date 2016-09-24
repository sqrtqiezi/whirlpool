@section('style-in-header')
	@parent
	<link rel="stylesheet" type="text/css"
	      href="{!! asset('adminlte/datepicker/datepicker3.css') !!}">
@stop

@section('script-in-footer')
	@parent
	<script
			src="{!! asset('adminlte/datepicker/bootstrap-datepicker.js') !!}"></script>
	<script
			src="{!! asset('adminlte/datepicker/bootstrap-datepicker.zh-CN.js') !!}"></script>
	<script>
		$(function () {
			// datepicker
			$('#created-at').on('click', function () {
				$('.datepicker').css('z-index', 1024);
			}).datepicker({
				keyboardNavigation: false,
				forceParse: false,
				autoclose: true,
				language: 'zh-CN',
				zIndexOffset: 1024,
				format: 'yyyy-mm-dd'
			});
		});
	</script>
@stop
