@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
	<div class="row">

		<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<a class="btn btn-sm btn-primary"
						   href="{!! route('panel.terminal.create') !!}">创建门店</a>

						<div class="box-tools" style="top: 10px;">
							{{-- 搜索 --}}
							<form action="{!! route('panel.terminal.index') !!}"
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
									        name="location">
										<option value="0">按省份</option>
										@foreach(Whirlpool\Terminal\Entities\Terminal::LOCATIONS as $key => $value)
											<option value="{!! $key !!}" {!! $key == app('request')->get('location') ? ' selected' : null !!}>{!! $value !!}</option>
										@endforeach
									</select>
								</div>
								<div class="input-group input-group-sm" style="width: 250px;">
									<input type="text" name="q" class="form-control pull-right"
									       placeholder="搜索店名/地址/电话"
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
					<div class="box-body table-responsive ">
						@if(0 === $total)
							{{-- 无信息 --}}
							<div class="callout callout-warning">
								<p>还没有内容，<a href="{!! route('panel.terminal.create') !!}">新建一个吧</a></p>
							</div>
							{{-- ./ 无信息 --}}
						@else
						<table class="table table-hover">
							<tbody>
							<tr>
								<th>ID</th>
								<th>省份</th>
								<th>店名</th>
								<th>地址</th>
								<th>电话</th>
								<th>创建时间</th>
								<th>最后编辑</th>
								<th>操作</th>
							</tr>

							@foreach($terminals as $terminal)
								<tr>
									<td>{!! $terminal->id !!}</td>
									<td><span class="badge bg-gray text-navy font-light">{!! $terminal->location !!}</span></td>
									<td>{!! $terminal->name !!}</td>
									<td>{!! $terminal->address !!}</td>
									<td>{!! $terminal->telephone !!}</td>
									<td>{!! $terminal->created_at !!}</td>
									<td>{!! $terminal->updated_at !!}</td>
									<td>
										<a class="btn btn-xs btn-primary inline"
										   href="{!! route('panel.terminal.edit', $terminal->id) !!}">编辑</a>
										@if($terminal->trashed())
											<form
													action="{!! route('panel.terminal.restore', $terminal->id) !!}"
													method="post" class="inline">
												{!! csrf_field()!!}
												<button class="btn btn-xs btn-success inline"
												        type="submit">设为可见
												</button>
											</form>
										@else
											<form
													action="{!! route('panel.terminal.destroy', $terminal->id) !!}"
													method="post" id="destroy{!! $terminal->id !!}"
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
										style="display:inline-block;margin: 20px 0;">总数：{!! $terminals->total() !!}</span>
							</div>
							<div class="col-md-6">
								<div class="pull-right">{!! $terminals->links() !!}</div>
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
