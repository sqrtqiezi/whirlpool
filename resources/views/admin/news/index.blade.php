@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
	<div class="row">

		<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<a class="btn btn-sm btn-primary"
						   href="{!! route('panel.news.create') !!}">创建新闻</a>

						<div class="box-tools" style="top: 10px;">
							{{-- 搜索 --}}
							<form action="{!! route('panel.news.index') !!}"
							      class="form-inline" id="filter-form">
								<div class="input-group input-group-sm">
									<select class="form-control pull-right filter-select" title="选择分类"
									        name="visibility">
										<option value="0">按可见性</option>
										<option value="2" {!! app('request')->get('visibility') == 2 ? ' selected' : null !!}>隐藏</option>
										<option value="1" {!! app('request')->get('visibility') == 1 ? ' selected' : null !!}>可见</option>
									</select>
								</div>
								<div class="input-group input-group-sm">
									<select class="form-control pull-right filter-select" title="选择分类"
									        name="type">
										<option value="0">按分类</option>
										<option
												value="{!! \Whirlpool\News\Entities\News::TYPE_COMPANY !!}" {!! app('request')->get('type') == \Whirlpool\News\Entities\News::TYPE_COMPANY ? ' selected' : null !!}>
											公司内讯
										</option>
										<option
												value="{!! \Whirlpool\News\Entities\News::TYPE_MEDIA !!}"  {!! app('request')->get('type') == \Whirlpool\News\Entities\News::TYPE_MEDIA ? ' selected' : null !!}>
											媒体报道
										</option>
										<option
												value="{!! \Whirlpool\News\Entities\News::TYPE_PROMOTION !!}"  {!! app('request')->get('type') == \Whirlpool\News\Entities\News::TYPE_PROMOTION ? ' selected' : null !!}>
											促销活动
										</option>
									</select>
								</div>
								<div class="input-group input-group-sm" style="width: 250px;">
									<input type="text" name="q" class="form-control pull-right"
									       placeholder="搜索标题"
									       value="{{ app('request')->get('q') }}">

									<div class="input-group-btn">
										<button type="submit" class="btn btn-default"><i
													class="fa fa-search"></i></button>
									</div>
								</div>
							</form>
							{{-- /.搜索 --}}
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive">
						@if(0 === $total)
							{{-- 无信息 --}}
							<div class="callout callout-warning">
								<p>还没有内容，<a href="{!! route('panel.news.create') !!}">新建一个吧</a></p>
							</div>
							{{-- ./ 无信息 --}}
						@else
						<table class="table table-hover">
							<tbody>
							<tr>
								<th>ID</th>
								<th>分类</th>
								<th>标题</th>
								<th>内容摘要</th>
								<th>发布时间</th>
								<th>最后编辑</th>
								<th>操作</th>
							</tr>

							@foreach($newsList as $news)
								<tr>
									<td>{!! $news->id !!}</td>
									<td><span class="badge bg-gray text-navy font-light">{!! $news->type !!}</span></td>
									<td>{!! $news->title !!}</td>
									<td>{!! $news->description !!}</td>
									<td>{!! $news->created_at !!}</td>
									<td>{!! $news->updated_at !!}</td>
									<td>
										<a class="btn btn-xs btn-primary inline"
										   href="{!! route('panel.news.edit', $news->id) !!}">编辑</a>
										@if($news->trashed())
											<form
													action="{!! route('panel.news.restore', $news->id) !!}"
													method="post" class="inline">
												{!! csrf_field()!!}
												<button class="btn btn-xs btn-success inline"
												        type="submit">设为可见
												</button>
											</form>
										@else
											<form
													action="{!! route('panel.news.destroy', $news->id) !!}"
													method="post" id="destroy{!! $news->id !!}"
													class="inline">
												<input type="hidden" name="_method" value="delete">
												{!! csrf_field() !!}
												<button class="btn btn-xs btn-danger inline"
												        type="submit">设为隐藏
												</button>
											</form>
										@endif
									</td>
								</tr>
							@endforeach

							</tbody>
						</table>
							@endif
					</div>
					<!-- /.box-body -->
					{{-- box footer --}}
					@if($total)
					<div class="box-footer clearfix">
						<div class="row">
							<div class="col-md-6">
								<span
										style="display:inline-block;margin: 20px 0;">总数：{!! $newsList->total() !!}</span>
							</div>
							<div class="col-md-6">
								<div class="pull-right">{!! $newsList->links() !!}</div>
							</div>
						</div>
					</div>
					@endif
					{{-- /.box footer--}}
				</div>
				<!-- /.box -->
		</div>
	</div>
@endsection

@section('script-in-footer')
	@parent
	<script>
		$(function () {
			$('.filter-select').on('change', function () {
				$('#filter-form').submit();
			});
		});
	</script>
@endsection
