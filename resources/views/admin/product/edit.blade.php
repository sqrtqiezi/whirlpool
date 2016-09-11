@extends('admin.layout.app')

@include('admin.components.alert')

@section('header')
	@include('UEditor::head')
@endsection

@section('content')
	<form class="form-horizontal"
	      action="{!! route('panel.product.update', $product->id) !!}"
	      method="post">
		<input type="hidden" name="_method" value="patch">
		{!! csrf_field() !!}
		@include('admin.product.form')
	</form>
@endsection

@section('style-in-header')
	@parent
	<link rel="stylesheet" href="{!! asset('adminlte/css/jquery.fileupload.css') !!}">
	<link rel="stylesheet" href="{!! asset('adminlte/fancybox/jquery.fancybox.css') !!}">
@append

@section('script-in-footer')
	@parent
	<script src="{!! asset('adminlte/js/jquery.ui.widget.js') !!}"></script>
	<script src="{!! asset('adminlte/js/jquery.fileupload.js') !!}"></script>
	<script src="{!! asset('adminlte/fancybox/jquery.fancybox.js') !!}"></script>
	<script>
		$(function () {
			// 分类选择
			$('#type-select').on('change', function () {
				$('#jump-input').val($(this).val());
				$('#jump').submit();
			});

			// 背景大图
			$('#fileupload').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#fileupload-progress .progress-bar').css(
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
							$('#background-input').val(response.file);
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

			// 参数图(上)
			$('#fileupload-2').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#fileupload-2-progress .progress-bar').css(
							'width',
							progress + '%'
					);
				},
				send: function (e, data) {
					// 显示进度
					$('#fileupload-2-progress').show();
				},
				always: function (e, data) {
					// 隐藏进度
					$('#fileupload-2-progress').fadeOut(2);
					var response = data.jqXHR.responseJSON;
					// 5xx
					if(!response) {
						alert('服务器错误，请联系管理员');
					} else {
						// JSON response
						// 成功
						if (response.error == 0) {
							// 显示预览
							$('#fileupload-2-preview').show().find('img').attr('src', response.thumbnail);
							$('#fileupload-2-preview').find('a').attr('href', response.thumbnail)
									.attr('title', response.origin_name);
							// 预览暂存到 request 中
							$('#preview-2-url-hidden').val(response.thumbnail);
							// 填充隐藏表单
							$('#background-2-input').val(response.file);
							// 隐藏错误提示
							$('#fileupload-2-group').removeClass('has-error');
						} else {
							// 错误提示
							$('#fileupload-2-group').addClass('has-error');
							$('#ajax-message').text(response.message).show();
						}
					}
				}
			});

			// 参数图(下)
			$('#fileupload-3').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#fileupload-3-progress .progress-bar').css(
							'width',
							progress + '%'
					);
				},
				send: function (e, data) {
					// 显示进度
					$('#fileupload-3-progress').show();
				},
				always: function (e, data) {
					// 隐藏进度
					$('#fileupload-3-progress').fadeOut(2);
					var response = data.jqXHR.responseJSON;
					// 5xx
					if(!response) {
						alert('服务器错误，请联系管理员');
					} else {
						// JSON response
						// 成功
						if (response.error == 0) {
							// 显示预览
							$('#fileupload-3-preview').show().find('img').attr('src', response.thumbnail);
							$('#fileupload-3-preview').find('a').attr('href', response.thumbnail)
									.attr('title', response.origin_name);
							// 预览暂存到 request 中
							$('#preview-3-url-hidden').val(response.thumbnail);
							// 填充隐藏表单
							$('#background-3-input').val(response.file);
							// 隐藏错误提示
							$('#fileupload-3-group').removeClass('has-error');
						} else {
							// 错误提示
							$('#fileupload-3-group').addClass('has-error');
							$('#ajax-3-message').text(response.message).show();
						}
					}
				}
			});

			// 核心技术图片
			$('#fileupload-4').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
				previewMaxWidth: 100,
				previewMaxHeight: 100,
				previewCrop: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#fileupload-4-progress .progress-bar').css(
							'width',
							progress + '%'
					);
				},
				send: function (e, data) {
					// 显示进度
					$('#fileupload-4-progress').show();
				},
				always: function (e, data) {
					// 隐藏进度
					$('#fileupload-4-progress').fadeOut(2);
					var response = data.jqXHR.responseJSON;
					// 5xx
					if(!response) {
						alert('服务器错误，请联系管理员');
					} else {
						// JSON response
						// 成功
						if (response.error == 0) {
							var $keyId = $.data(document.body, 'core-tech-id') || 0;
							var previewNode = $('<div/>', {
								class: 'row',
								style: 'margin-top: 10px;',
								html: $('<div/>', {
									class: 'col-xs-3',
									html: $('<img/>', {
										style: 'max-width: 100px; max-height: 100px;',
										src: response.thumbnail
									}).add($('<input/>', {
										type: 'hidden',
										name: 'core_tech_detail[' + $keyId +'][image]',
										value: response.file
									})).add($('<input/>', {
										type: 'hidden',
										name: 'core_tech_detail[' + $keyId +'][preview]',
										value: response.thumbnail
									}))
								}).add($('<div/>', {
											class: 'col-xs-6 form-group',
											html: $('<div/>', {
												class: 'row',
												html: $('<label/>', {
													class: 'col-sm-2 control-label text-primary',
													text: '描述'
												}).add(
														$('<div/>', {
															class: 'col-sm-10',
															html: $('<input/>', {
																type: 'text',
																class: 'form-control',
																placeholder: '与图片相关的描述',
																name: 'core_tech_detail[' + $keyId +'][description]'
															})
														})
												)
											})
										}).add($('<div/>', {
											class: 'col-xs-3',
											html: $('<span/>', {
												html: $('<i/>', {
													class: 'fa fa-remove'
												}).on('click', function () {
													previewNode.remove()
												})
											})
										}))
								)
							}).appendTo('#core-tech-detail-preview');
							$.data(document.body, 'core-tech-id', $keyId + 1);
//							// 显示预览
//							$('#fileupload-4-preview').show().find('img').attr('src', response.thumbnail);
//							$('#fileupload-4-preview').find('a').attr('href', response.thumbnail)
//									.attr('title', response.origin_name);
//							// 预览暂存到 request 中
//							$('#preview-4-url-hidden').val(response.thumbnail);
							// 填充隐藏表单
//							$('#background-4-input').val(response.file);
							// 隐藏错误提示
//							$('#fileupload-4-group').removeClass('has-error');
						} else {
							// 错误提示
							$('#fileupload-4-group').addClass('has-error');
							$('#ajax-4-message').text(response.message).show();
						}
					}
				}
			});

			// 细节展示
			$('#fileupload-5').fileupload({
				type: 'POST',
				url: '{!! route('panel.api.upload') !!}',
				autoUpload: true,
				disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
				previewMaxWidth: 100,
				previewMaxHeight: 100,
				previewCrop: true,
				// 进度条
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#fileupload-5-progress .progress-bar').css(
							'width',
							progress + '%'
					);
				},
				send: function (e, data) {
					// 显示进度
					$('#fileupload-5-progress').show();
				},
				always: function (e, data) {
					// 隐藏进度
					$('#fileupload-5-progress').fadeOut(2);
					var response = data.jqXHR.responseJSON;
					// 5xx
					if(!response) {
						alert('服务器错误，请联系管理员');
					} else {
						// JSON response
						// 成功
						if (response.error == 0) {
							var $keyId = $.data(document.body, 'detail-id') || 0;
							var previewNode = $('<div/>', {
								class: 'row',
								style: 'margin-top: 10px;',
								html: $('<div/>', {
									class: 'col-xs-3',
									html: $('<img/>', {
										style: 'max-width: 100px; max-height: 100px;',
										src: response.thumbnail
									}).add($('<input/>', {
										type: 'hidden',
										name: 'detail[' + $keyId +'][image]',
										value: response.file
									})).add($('<input/>', {
										type: 'hidden',
										name: 'detail[' + $keyId +'][preview]',
										value: response.thumbnail
									}))
								}).add($('<div/>', {
											class: 'col-xs-6 form-group',
											html: $('<div/>', {
												class: 'row',
												html: $('<label/>', {
													class: 'col-sm-2 control-label text-primary',
													text: '描述'
												}).add(
														$('<div/>', {
															class: 'col-sm-10',
															html: $('<input/>', {
																type: 'text',
																class: 'form-control',
																placeholder: '图片标题 ',
																name: 'detail[' + $keyId +'][title]'
															}).add($('<input/>', {
																type: 'text',
																class: 'form-control',
																placeholder: '图片描述',
																style: 'margin-top: 10px;',
																name: 'detail[' + $keyId +'][description]'
															}))
														})
												)
											})
										}).add($('<div/>', {
											class: 'col-xs-3',
											html: $('<span/>', {
												html: $('<i/>', {
													class: 'fa fa-remove'
												}).on('click', function () {
													previewNode.remove()
												})
											})
										}))
								)
							}).appendTo('#detail-preview');
							$.data(document.body, 'detail-id', $keyId + 1);
//							// 显示预览
//							$('#fileupload-4-preview').show().find('img').attr('src', response.thumbnail);
//							$('#fileupload-4-preview').find('a').attr('href', response.thumbnail)
//									.attr('title', response.origin_name);
//							// 预览暂存到 request 中
//							$('#preview-4-url-hidden').val(response.thumbnail);
							// 填充隐藏表单
//							$('#background-4-input').val(response.file);
							// 隐藏错误提示
//							$('#fileupload-4-group').removeClass('has-error');
						} else {
							// 错误提示
							$('#fileupload-4-group').addClass('has-error');
							$('#ajax-4-message').text(response.message).show();
						}
					}
				}
			});

			// fancybox
			var fancyBoxOptions = {
				openEffect	: 'elastic',
				closeEffect	: 'elastic',
				helpers : {
					title : {
						type : 'inside'
					}
				}
			};
			$("#fileupload-preview a").fancybox(fancyBoxOptions);

			$("#fileupload-2-preview a").fancybox(fancyBoxOptions);

			$("#fileupload-3-preview a").fancybox(fancyBoxOptions);

			// 移除已有的 node
			$('.parent-needs-remove').on('click', function() {
				$(this).parents('.detail-priview').remove();
			});
			$('.parent-needs-remove').on('click', function() {
				$(this).parents('.core-tech-priview').remove();
			});


		});
	</script>
@append
