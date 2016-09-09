<!-- form start -->
	{!! csrf_field() !!}
	<div class="box-body">

		{{-- 分类名称 --}}
		<div
				class="form-group {!! $nameError = $errors->has('name') ? 'has-error' : null !!}">
			<label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3"
				       placeholder="分类名称" name="name" value="{!! $type->name or old('name') !!}">
				@if($nameError)
					<span class="help-block">分类名称必须填写</span>
				@endif
			</div>
		</div>
		{{-- /.分类名称 --}}

		{{-- 分类属性 --}}
		<div
				class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">分类属性</label>

			<div class="col-sm-10">
				<textarea class="form-control" name="attributes" rows="20">{!! $type->attributes or old('attributes') !!}</textarea>
					<span class="help-block">每行一个，如：<br>型号<br>出风量<br>体积<br></span>
			</div>
		</div>
		{{-- /.分类属性 --}}

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
