<!-- form start -->
<div class="row">
	<div class="col-md-12">
		{{-- 品牌展示 --}}
		<div class="box">

			<div class="box-header">
				<h3 class="box-title">品牌展示</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>

			<div class="box-body">

				{{-- 分类 --}}
				<div
						class="form-group {!! $typeError = $errors->has('type_id') ? 'has-error' : null !!}">
					<label for="inputEmail3" class="col-sm-2 control-label">分类</label>

					<div class="col-sm-10">
						<select name="type_id" class="form-control" title="选择分类"
						        id="type-select">
							<option value="">选择分类</option>
							<?php $selectedType = isset($product->type_id) ? $product->type_id : \Request::get('type'); ?>
							@foreach($types as $type_id => $type_name)
								<option
										value="{!! $type_id !!}" {!! $selectedType == $type_id ? ' selected' : null !!}>{!! $type_name !!}</option>
							@endforeach
						</select>
						@if($typeError)
							<span class="help-block">分类必须选择</span>
						@endif
					</div>
				</div>
				{{-- /.分类 --}}

				{{-- 主标题 --}}
				<div
						class="form-group {!! $mainHeadingError = $errors->has('main_heading') ? 'has-error' : null !!}">
					<label for="inputEmail3" class="col-sm-2 control-label">主标题</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="主标题"
						       name="main_heading"
						       value="{!! $product->main_heading or old('main_heading') !!}">
						@if($mainHeadingError)
							<span class="help-block">主标题必须填写</span>
						@endif
					</div>
				</div>
				{{-- /.主标题 --}}

				{{-- 副标题 --}}
				<div
						class="form-group {!! $subHeadingError = $errors->has('sub_heading') ? 'has-error' : null !!}">
					<label for="inputEmail3" class="col-sm-2 control-label">副标题</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="副标题"
						       name="sub_heading"
						       value="{!! $product->sub_heading or old('sub_heading') !!}">
						@if($subHeadingError)
							<span class="help-block">副标题必须填写</span>
						@endif
					</div>
				</div>
				{{-- /.副标题 --}}

				{{-- 特点描述 --}}
				<div
						class="form-group {!! $featureError = $errors->has('feature') ? 'has-error' : null !!}">
					<label for="inputEmail3" class="col-sm-2 control-label">特点描述</label>

					<div class="col-sm-10">
						<textarea type="text" class="form-control" id="inputEmail3"
						          placeholder="特点描述，每行一句，共四行" name="feature"
						          rows="5">{!! $product->feature or old('feature') !!}</textarea>
						@if($featureError)
							<span class="help-block">特点描述必须填写</span>
						@endif
					</div>
				</div>
				{{-- /.特点描述 --}}

				{{-- 背景大图 --}}
				<div
						class="form-group {!! $thumbnailError = $errors->has('background') ? 'has-error' : null !!}"
						id="fileupload-group">
					<label for="inputEmail3" class="col-sm-2 control-label">封面图</label>

					<div class="col-sm-10">

						<!-- The fileinput-button span is used to style the file input field as button -->
						<div class="row">
							<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload">
						<input type="hidden" name="background"
						       value="{!! $product->background or old('background') !!}"
						       id="background-input">
			</span>
							</div>
							<div class="col-xs-10">
								{{-- 进度条 --}}
								<div class="progress progress-xs"
								     style="margin: 15px 0; display: none;"
								     id="fileupload-progress">
									<div class="progress-bar progress-bar-primary"
									     style="width: 0"></div>
								</div>
								{{-- /.进度条 --}}
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-xs-12">
								{{-- 预览 --}}
								<div id="fileupload-preview"
								     style="display:{!! isset($product->background_url) || old('preview_url') ? 'block' : 'none' !!};">
									<a href="{!! $product->background_url or old('preview_url') !!}"
									   title="">
										<img
												src="{!! $product->background_url or old('preview_url') !!}"
												style="max-width: 400px;max-height: 400px;">
									</a>
									<input type="hidden" name="preview_url"
									       id="preview-url-hidden"
									       value="{!! $product->background_url or old('preview_url') !!}">
								</div>
								{{-- /.预览 --}}
							</div>
						</div>
						@if($thumbnailError)
							<span class="help-block">封面图必须上传</span>
						@endif
						<span class="help-block" id="ajax-message"
						      style="display: none"></span>
					</div>
				</div>
				{{-- /.背景大图 --}}

			</div>
		</div>
		{{-- /.品牌展示 --}}

		{{-- 技术参数 --}}
		<div class="box">

			<div class="box-header">
				<h3 class="box-title">技术参数</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>

			<div class="box-body">
				@if(isset($typeAttributes))
				{{-- 参数数据 --}}
				<div
						class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						参数数据
					</label>

					<div class="col-sm-10">
						<div class="row">
							<div class="col-xs-12">

								<?php  $specificationCount = 0; ?>
								@foreach($typeAttributes as $i => $attribute)
									<div class="form-group">
										<label class="col-sm-2 control-label text-primary">{!! $i !!}</label>
										<div class="col-sm-10">
											<input type="text" class="form-control"
											       placeholder="{{ $attribute }}" name="specification[{!! ++$specificationCount !!}][value]" value="{{ $attribute }}">
											<input type="hidden" name="specification[{!! $specificationCount !!}][name]" value="{{ $i }}">
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				{{-- /.参数数据 --}}
				@endif

				{{-- 参数图 1 --}}
					<div
							class="form-group {!! $specImgOneError = $errors->has('spec_img_one') ? 'has-error' : null !!}"
							id="fileupload-2-group">
						<label for="inputEmail3" class="col-sm-2 control-label">参数图(上)</label>

						<div class="col-sm-10">

							<!-- The fileinput-button span is used to style the file input field as button -->
							<div class="row">
								<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload-2">
						<input type="hidden" name="spec_img_one"
						       value="{!! $product->spec_img_one or old('spec_img_one') !!}"
						       id="background-2-input">
			</span>
								</div>
								<div class="col-xs-10">
									{{-- 进度条 --}}
									<div class="progress progress-xs"
									     style="margin: 15px 0; display: none;"
									     id="fileupload-2-progress">
										<div class="progress-bar progress-bar-primary"
										     style="width: 0"></div>
									</div>
									{{-- /.进度条 --}}
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-xs-12">
									{{-- 预览 --}}
									<div id="fileupload-2-preview"
									     style="display:{!! isset($product->spec_img_one_url) || old('preview_url_2') ? 'block' : 'none' !!};">
										<a href="{!! $product->spec_img_one_url or old('preview_url_2') !!}"
										   title="">
											<img
													src="{!! $product->spec_img_one_url or old('preview_url_2') !!}"
													style="max-width: 400px;max-height: 400px;">
										</a>
										<input type="hidden" name="preview_url_2"
										       id="preview-2-url-hidden"
										       value="{!! $product->spec_img_one_url or old('preview_url_2') !!}">
									</div>
									{{-- /.预览 --}}
								</div>
							</div>
							@if($specImgOneError)
								<span class="help-block">参数图(上)必须上传</span>
							@endif
							<span class="help-block" id="ajax-2-message"
							      style="display: none"></span>
						</div>
					</div>
				{{-- /.参数图 1 --}}

				{{-- 参数图 2 --}}
					<div
							class="form-group {!! $specImgTwoError = $errors->has('spec_img_two') ? 'has-error' : null !!}"
							id="fileupload-group">
						<label for="inputEmail3" class="col-sm-2 control-label">参数图(下)</label>

						<div class="col-sm-10">

							<!-- The fileinput-button span is used to style the file input field as button -->
							<div class="row">
								<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload-3">
						<input type="hidden" name="spec_img_two"
						       value="{!! $product->spec_img_two or old('spec_img_two') !!}"
						       id="background-3-input">
			</span>
								</div>
								<div class="col-xs-10">
									{{-- 进度条 --}}
									<div class="progress progress-xs"
									     style="margin: 15px 0; display: none;"
									     id="fileupload-3-progress">
										<div class="progress-bar progress-bar-primary"
										     style="width: 0"></div>
									</div>
									{{-- /.进度条 --}}
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-xs-12">
									{{-- 预览 --}}
									<div id="fileupload-3-preview"
									     style="display:{!! isset($product->spec_img_two_url) || old('preview_url_3') ? 'block' : 'none' !!};">
										<a href="{!! $product->spec_img_two_url or old('preview_url_3') !!}"
										   title="">
											<img
													src="{!! $product->spec_img_two_url or old('preview_url_3') !!}"
													style="max-width: 400px;max-height: 400px;">
										</a>
										<input type="hidden" name="preview_url_3"
										       id="preview-3-url-hidden"
										       value="{!! $product->spec_img_two_url or old('preview_url_3') !!}">
									</div>
									{{-- /.预览 --}}
								</div>
							</div>
							@if($specImgTwoError)
								<span class="help-block">参数图(下)必须上传</span>
							@endif
							<span class="help-block" id="ajax-3-message"
							      style="display: none"></span>
						</div>
					</div>
				{{-- /.参数图 2 --}}

			</div>
		</div>
		{{-- /.技术参数 --}}

		{{-- 核心技术 --}}
		<div class="box">

			<div class="box-header">
				<h3 class="box-title">核心技术</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>

			<div class="box-body">

				{{-- 核心技术标题 --}}
				<div
						class="form-group {!! $coreTechTitleError = $errors->has('core_tech_title') ? 'has-error' : null !!}">
					<label for="inputEmail3" class="col-sm-2 control-label">核心技术标题</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="核心技术标题" name="core_tech_title"
						       value="{!! $product->core_tech_title or old('core_tech_title') !!}">
						@if($coreTechTitleError)
							<span class="help-block">核心技术标题必须填写</span>
						@endif
					</div>
				</div>
				{{-- /.核心技术标题 --}}

				{{-- 核心技术图片 --}}
				<div
						class="form-group {!! $coreTechDetailError = $errors->has('core_tech_detail') ? 'has-error' : null !!}"
						id="fileupload-4-group">
					<label for="inputEmail3" class="col-sm-2 control-label">核心技术图片</label>

					<div class="col-sm-10">

						<!-- The fileinput-button span is used to style the file input field as button -->
						<div class="row">
							<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload-4" multiple>
					</span>
							</div>
							<div class="col-xs-10">
								{{-- 进度条 --}}
								<div class="progress progress-xs"
								     style="margin: 15px 0; display: none;"
								     id="fileupload-4-progress">
									<div class="progress-bar progress-bar-primary"
									     style="width: 0"></div>
								</div>
								{{-- /.进度条 --}}
							</div>
						</div>

						<div id="core-tech-detail-preview">
							@if($coreTechRequest = isset($product->core_tech_detail) ? $product->core_tech_detail : old('core_tech_detail'))
								@foreach($coreTechRequest as $key => $item)
									<div class="row core-tech-priview" style="margin-top: 10px;">
										{{-- 预览 --}}
										<div class="col-xs-3">
											<img src="{!! $item['preview'] !!}" style="max-width: 100px; max-height: 100px;">
											<input type="hidden"
											       name="core_tech_detail[{!! $key !!}][preview]"
											       value="{!! $item['preview'] !!}">
											<input type="hidden"
											       name="core_tech_detail[{!! $key !!}][image]"
											       value="{!! $item['image'] !!}">
										</div>
										<div class="col-xs-6 form-group">
											<div class="row">
												<label class="col-sm-2 control-label text-primary">描述</label>

												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="与图片相关的描述"
													       name="core_tech_detail[{!! $key !!}][description]"
													       value="{!! $item['description'] !!}">
													{{--<span class="help-block">主标题必须填写</span>--}}
												</div>
											</div>
										</div>
										<div class="col-xs-3">
											<span><i class="fa fa-remove parent-needs-remove"></i></span>
										</div>
										{{-- /.预览 --}}
									</div>
									@endforeach
									@endif
						</div>

						@if($coreTechDetailError)
							<span class="help-block">核心技术图片必须上传</span>
						@endif
						<span class="help-block" id="ajax-4-message"
						      style="display: none"></span>
					</div>
				</div>
				{{-- /.核心技术图片 --}}

			</div>
		</div>
		{{-- /.核心技术 --}}

		{{-- 细节展示 --}}
		<div class="box">

			<div class="box-header">
				<h3 class="box-title">细节展示</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>

			<div class="box-body">

				{{-- 细节展示图片 --}}
				<div
						class="form-group {!! $detailError = $errors->has('detail') ? 'has-error' : null !!}"
						id="fileupload-5-group">
					<label for="inputEmail3" class="col-sm-2 control-label">核心技术图片</label>

					<div class="col-sm-10">

						<!-- The fileinput-button span is used to style the file input field as button -->
						<div class="row">
							<div class="col-xs-2">
					<span class="btn btn-primary fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>上传...</span>
					<input type="file" name="file" id="fileupload-5" multiple>
					</span>
							</div>
							<div class="col-xs-10">
								{{-- 进度条 --}}
								<div class="progress progress-xs"
								     style="margin: 15px 0; display: none;"
								     id="fileupload-5-progress">
									<div class="progress-bar progress-bar-primary"
									     style="width: 0"></div>
								</div>
								{{-- /.进度条 --}}
							</div>
						</div>

						<div id="detail-preview">
							@if($coreTechRequest = isset($product->detail) ? $product->detail : old('detail'))
								@foreach($coreTechRequest as $key => $item)
									<div class="row detail-priview" style="margin-top: 10px;">
										{{-- 预览 --}}
										<div class="col-xs-3">
											<img src="{!! $item['preview'] !!}" style="max-width: 100px; max-height: 100px;">
											<input type="hidden"
											       name="detail[{!! $key !!}][preview]"
											       value="{!! $item['preview'] !!}">
											<input type="hidden"
											       name="detail[{!! $key !!}][image]"
											       value="{!! $item['image'] !!}">
										</div>
										<div class="col-xs-6 form-group">
											<div class="row">
												<label class="col-sm-2 control-label text-primary">描述</label>

												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="图片标题"
													       name="detail[{!! $key !!}][title]"
													       value="{!! $item['title'] !!}">
													<input type="text" class="form-control" placeholder="图片描述"
													       name="detail[{!! $key !!}][description]"
													       value="{!! $item['description'] !!}" style="margin-top: 10px;">
													{{--<span class="help-block">主标题必须填写</span>--}}
												</div>
											</div>
										</div>
										<div class="col-xs-3">
											<span><i class="fa fa-remove parent-needs-remove"></i></span>
										</div>
										{{-- /.预览 --}}
									</div>
								@endforeach
							@endif
						</div>

						@if($detailError)
							<span class="help-block">核心技术图片必须上传</span>
						@endif
						<span class="help-block" id="ajax-5-message"
						      style="display: none"></span>
					</div>
				</div>
				{{-- /.细节展示图片 --}}

			</div>
		</div>
		{{-- /.细节展示 --}}

		<div class="box-footer">
			<button type="submit" class="btn btn-primary pull-right"
			        style="margin: 0 10px">保存
			</button>
			<a href="{!! \URL::previous() !!}" class="btn btn-default pull-right"
			   style="margin: 0 10px">返回</a>
		</div>
	</div>
</div>
