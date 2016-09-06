<!-- form start -->
	{!! csrf_field() !!}
	<div class="box-body">

		{{-- 分类 --}}
		<div
				class="form-group {!! $typeError = $errors->has('type') ? 'has-error' : null !!}">
			<label for="inputEmail3" class="col-sm-2 control-label">分类</label>

			<div class="col-sm-10">
				<?php $type = isset($news->getWrappedObject->type) ? $news->getWrappedObject->type : old('type'); ?>
				<select name="type" class="form-control" title="选择分类">
					<option value="">选择分类</option>
					<option
							value="{!! \Whirlpool\News\Entities\News::TYPE_COMPANY !!}" {!! $type == \Whirlpool\News\Entities\News::TYPE_COMPANY ? ' selected' : null !!}>
						公司内讯
					</option>
					<option
							value="{!! \Whirlpool\News\Entities\News::TYPE_MEDIA !!}"  {!! $type == \Whirlpool\News\Entities\News::TYPE_MEDIA ? ' selected' : null !!}>
						媒体报道
					</option>
					<option
							value="{!! \Whirlpool\News\Entities\News::TYPE_PROMOTION !!}"  {!! $type == \Whirlpool\News\Entities\News::TYPE_PROMOTION ? ' selected' : null !!}>
						促销活动
					</option>
				</select>
				@if($typeError)
					<span class="help-block">分类必须选择</span>
				@endif
			</div>
		</div>
		{{-- /.分类 --}}

		{{-- 标题 --}}
		<div
				class="form-group {!! $titleError = $errors->has('title') ? 'has-error' : null !!}">
			<label for="inputEmail3" class="col-sm-2 control-label">标题</label>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3"
				       placeholder="标题" name="title" value="{!! $news->title or old('title') !!}">
				@if($titleError)
					<span class="help-block">标题必须填写</span>
				@endif
			</div>
		</div>
		{{-- /.标题 --}}

		{{-- 内容 --}}
		<div class="form-group {!! $contentError = $errors->has('content') ? 'has-error' : null !!}">
			<label for="inputPassword3"
			       class="col-sm-2 control-label">内容</label>

			<div class="col-sm-10">
				<!-- 加载编辑器的容器 -->
				{{-- 务必不换行，否则会被 ueditor 转换成 p 标签 --}}
				<script id="container" name="content" type="text/plain">{!! $news->content or old('content') !!}</script>

				<!-- 实例化编辑器 -->
				<script type="text/javascript">
					var ue = UE.getEditor('container');
					ue.ready(function () {
						ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
					});
				</script>
				@if($contentError)
					<span class="help-block">内容必须填写</span>
				@endif
			</div>

		</div>
		{{-- /.内容 --}}

	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right"
		        style="margin: 0 10px">保存
		</button>
		<a href="{!! \URL::previous() !!}"
		   class="btn btn-default pull-right" style="margin: 0 10px">返回</a>
	</div>
	<!-- /.box-footer -->
