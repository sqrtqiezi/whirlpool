@section('style-in-header')
	@parent
	<link rel="stylesheet" href="{!! asset('adminlte/css/jquery.fileupload.css') !!}">
	<link rel="stylesheet" href="{!! asset('adminlte/fancybox/jquery.fancybox.css') !!}">
@stop

@section('script-in-footer')
	@parent
	<script src="{!! asset('adminlte/js/jquery.ui.widget.js') !!}"></script>
	<script src="{!! asset('adminlte/js/jquery.fileupload.js') !!}"></script>
	<script src="{!! asset('adminlte/fancybox/jquery.fancybox.js') !!}"></script>
	<script>
		$(function () {
			$('#fileupload').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('.progress-bar').css(
							'width',
							progress + '%'
					);
				},
				send: function (e, data) {
					// 显示进度
					$('#fileupload-progress').show();
				},
				always: function (e, data) {
					// 隐藏进度
					$('#fileupload-progress').fadeOut(2);
					var response = data.jqXHR.responseJSON;
					// 5xx
				  if(!response) {
					  alert('服务器错误，请联系管理员');
				  } else {
				  	// JSON response
					  // 成功
					  if (response.error == 0) {
					  	// 显示预览
						  $('#fileupload-preview').show().find('img').attr('src', response.thumbnail);
						  $('#fileupload-preview').find('a').attr('href', response.thumbnail)
								  .attr('title', response.origin_name);
						  // 预览暂存到 request 中
						  $('#preview-url-hidden').val(response.thumbnail);
						  // 填充隐藏表单
						  $('#thumbnail-input').val(response.file);
						  // 隐藏错误提示
						  $('#fileupload-group').removeClass('has-error');
					  } else {
					  	// 错误提示
						  $('#fileupload-group').addClass('has-error');
						  $('#ajax-message').text(response.message).show();
					  }
				  }
				}
			});

			$('#fileupload-preview').popover({html: true});
			// fancybox
			$("#fileupload-preview a").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',
				helpers : {
					title : {
						type : 'inside'
					}
				}
			});
		});
	</script>
@stop
