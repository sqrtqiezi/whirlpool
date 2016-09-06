<!-- form start -->  {!! csrf_field() !!}
<div class="box-body" xmlns:http="http://www.w3.org/1999/xhtml">

	{{--省份--}}
	<div
			class="form-group {!! $locationError = $errors->has('location') ? 'has-error' : null !!}">
		<label for="inputEmail3" class="col-sm-2 control-label">省份</label>
		<?php $location = isset($terminal->getWrappedObject->location) ? $terminal->getWrappedObject->location : old('location'); ?>
		<div class="col-sm-10">
			<select name="location" class="form-control" title="省份">
				<option value="">选择省份</option>
				@foreach(Whirlpool\Terminal\Entities\Terminal::LOCATIONS as $key => $value)
					<option
							value="{!! $key !!}" {!! $key == $location ? ' selected' : null !!}>{!! $value !!}</option>
				@endforeach
			</select>
			@if($locationError)
				<span class="help-block">省份必须选择</span>
			@endif
		</div>
	</div>
	{{--/.省份--}}

	{{-- 终端店名 --}}
	<div
			class="form-group {!! $nameError = $errors->has('name') ? 'has-error' : null !!}">
		<label for="inputEmail3" class="col-sm-2 control-label">网点</label>

		<div class="col-sm-10">
			<input type="text" class="form-control" placeholder="网点" name="name"
			       value="{!! $terminal->name or old('name') !!}">
			@if($nameError)
				<span class="help-block">网点必须填写</span>
			@endif
		</div>
	</div>
	{{-- /.终端店名 --}}

	{{-- 详细地址 --}}
	<div
			class="form-group {!! $addressError = $errors->has('address') ? 'has-error' : null !!}">
		<label for="inputEmail3" class="col-sm-2 control-label">详细地址</label>

		<div class="col-sm-10">
			<input type="text" class="form-control" placeholder="详细地址" name="address"
			       value="{!! $terminal->address or old('address') !!}">
			@if($addressError)
				<span class="help-block">详细地址必须填写</span>
			@endif
		</div>
	</div>
	{{-- /.详细地址 --}}

	{{-- 联系电话 --}}
	<div
			class="form-group {!! $telephoneError = $errors->has('telephone') ? 'has-error' : null !!}">
		<label for="inputEmail3" class="col-sm-2 control-label">联系电话</label>

		<div class="col-sm-10">
			<input type="text" class="form-control" placeholder="联系电话"
			       name="telephone"
			       value="{!! $terminal->telephone or old('telephone') !!}">
			@if($telephoneError)
				<span class="help-block">联系电话必须填写</span>
			@endif
		</div>
	</div>
	{{-- /.联系电话 --}}

	{{--封面图--}}
		@include('admin.components.image-upload-input')
	{{--/.封面图--}}

</div>  <!-- /.box-body -->
<div class="box-footer">
	<button type="submit" class="btn btn-primary pull-right"
	        style="margin: 0 10px">保存
	</button>
	<a href="{!! \URL::previous() !!}" class="btn btn-default pull-right"
	   style="margin: 0 10px">返回</a>
</div>  <!-- /.box-footer -->
