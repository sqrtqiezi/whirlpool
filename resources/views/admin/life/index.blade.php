@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
	<div class="row">

		<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<a class="btn btn-sm btn-primary"
						   href="{!! route('panel.life.create') !!}">创建文章</a>

						<div class="box-tools" style="top: 10px;">
							{{-- 搜索 --}}
							<form action="{!! route('panel.life.index') !!}"
							      class="form-inline" id="filter-form">
								<div class="input-group input-group-sm">
									<select class="form-control pull-right filter-select" title="选择分类"
									        name="visibility">
										<option value="0">按可见性</option>
										<option value="2" {!! app('request')->get('visibility') == 2 ? ' selected' : null !!}>已删除</option>
										<option value="1" {!! app('request')->get('visibility') == 1 ? ' selected' : null !!}>可见</option>
									</select>
								</div>
								<div class="input-group input-group-sm">
									<select class="form-control pull-right filter-select" title="选择分类"
									        name="type">
										<option value="0">按分类</option>
										<option
												value="{!! \Whirlpool\Life\Entities\Life::TYPE_PEOPLE !!}" {!! app('request')->get('type') == \Whirlpool\Life\Entities\Life::TYPE_PEOPLE ? ' selected' : null !!}>
											厨电创想人
										</option>
										<option
												value="{!! \Whirlpool\Life\Entities\Life::TYPE_APPLIANCE !!}"  {!! app('request')->get('type') == \Whirlpool\Life\Entities\Life::TYPE_APPLIANCE ? ' selected' : null !!}>
											“懂”厨电
										</option>
										<option
												value="{!! \Whirlpool\Life\Entities\Life::TYPE_DELICIOUS !!}"  {!! app('request')->get('type') == \Whirlpool\Life\Entities\Life::TYPE_DELICIOUS ? ' selected' : null !!}>
											“品”美味
										</option>
										<option
												value="{!! \Whirlpool\Life\Entities\Life::TYPE_KITCHEN !!}"  {!! app('request')->get('type') == \Whirlpool\Life\Entities\Life::TYPE_KITCHEN ? ' selected' : null !!}>
											“绘”厨房
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
								<p>还没有内容，<a href="{!! route('panel.life.create') !!}">新建一个吧</a></p>
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

							@foreach($lives as $life)
								<tr>
									<td>{!! $life->id !!}</td>
									<td><span class="badge bg-gray text-navy font-light">{!! $life->type !!}</span></td>
									<td>{!! $life->title !!}</td>
									<td>{!! $life->description !!}</td>
									<td>{!! $life->created_at !!}</td>
									<td>{!! $life->updated_at !!}</td>
									<td>
										<a class="btn btn-xs btn-primary inline"
										   href="{!! route('panel.life.edit', $life->id) !!}">编辑</a>
										@if($life->trashed())
											<form
													action="{!! route('panel.life.restore', $life->id) !!}"
													method="post" class="inline">
												{!! csrf_field()!!}
												<button class="btn btn-xs btn-success inline"
												        type="submit">恢复
												</button>
											</form>
										@else
											<form
													action="{!! route('panel.life.destroy', $life->id) !!}"
													method="post" id="destroy{!! $life->id !!}"
													class="inline">
												<input type="hidden" name="_method" value="delete">
												{!! csrf_field() !!}
												<button class="btn btn-xs btn-danger inline"
												        type="submit">删除
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
										style="display:inline-block;margin: 20px 0;">总数：{!! $lives->total() !!}</span>
							</div>
							<div class="col-md-6">
								<div class="pull-right">{!! $lives->links() !!}</div>
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
