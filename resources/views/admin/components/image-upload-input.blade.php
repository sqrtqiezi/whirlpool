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
			<span class="help-block">封面图必须上传</span>
		@endif
		<span class="help-block" id="ajax-message" style="display: none"></span>
	</div>
</div>
