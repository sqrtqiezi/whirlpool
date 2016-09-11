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
	<div
			class="form-group {!! $thumbnailError = $errors->has('thumbnail') ? 'has-error' : null !!}" id="fileupload-group">
		<label for="inputEmail3" class="col-sm-2 control-label">封面图</label>

		<div class="col-sm-10">

			<!-- The fileinput-button span is used to style the file input field as button -->
			<div class="row">
				<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload">
						<input type="hidden" name="thumbnail" value="{!! $terminal->thumbnail or old('thumbnail') !!}" id="thumbnail-input">
			</span>
				</div>
				<div class="col-xs-10">
					{{-- 进度条 --}}
					<div class="progress progress-xs" style="margin: 15px 0; display: none;" id="fileupload-progress">
						<div class="progress-bar progress-bar-primary" style="width: 0"></div>
					</div>
					{{-- /.进度条 --}}
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-xs-12">
					{{-- 预览 --}}
					<div id="fileupload-preview" style="display:{!! isset($terminal->thumbnail_url) || old('preview_url') ? 'block' : 'none' !!};">
						<a href="{!! $terminal->thumbnail_url or old('preview_url') !!}" title="">
						<img src="{!! $terminal->thumbnail_url or old('preview_url') !!}"
						style="max-width: 400px;max-height: 400px;">
							</a>
						<input type="hidden" name="preview_url" id="preview-url-hidden" value="{!! $terminal->thumbnail_url or old('preview_url') !!}">
					</div>
					{{-- /.预览 --}}
				</div>
			</div>
			@if($thumbnailError)
				<span class="help-block">{!! $errors->first('thumbnail') !!}</span>
			@endif
			<span class="help-block" id="ajax-message" style="display: none"></span>
		</div>
	</div>
	{{--/.封面图--}}

</div>  <!-- /.box-body -->
<div class="box-footer">
	<button type="submit" class="btn btn-primary pull-right"
	        style="margin: 0 10px">保存
	</button>
	<a href="{!! \URL::previous() !!}" class="btn btn-default pull-right"
	   style="margin: 0 10px">返回</a>
</div>  <!-- /.box-footer -->
