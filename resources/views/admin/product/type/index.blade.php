@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
	<div class="row">

		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<a class="btn btn-sm btn-primary"
					   href="{!! route('panel.product-type.create') !!}">创建分类</a>
					<a class="btn btn-sm btn-info"
					   href="{!! route('panel.product.index') !!}">返回产品管理</a>

					<div class="box-tools" style="top: 10px;">
						{{-- 搜索 --}}
						<form action="{!! route('panel.product-type.index') !!}"
						      class="form-inline" id="filter-form">
							<div class="input-group input-group-sm">
								<select class="form-control pull-right filter-select"
								        title="选择分类" name="visibility">
									<option value="0">按可见性</option>
									<option
											value="1" {!! app('request')->get('visibility') == 1 ? ' selected' : null !!}>
										隐藏
									</option>
									<option
											value="2" {!! app('request')->get('visibility') == 2 ? ' selected' : null !!}>
										可见
									</option>
								</select>
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
							<p>还没有内容，<a href="{!! route('panel.product-type.create') !!}">新建一个吧</a>
							</p>
						</div>
						{{-- ./ 无信息 --}}
					@else
						<table class="table table-hover">
							<tbody>
							<tr>
								<th>ID</th>
								<th>分类名称</th>
								<th>属性</th>
								<th>最后编辑</th>
								<th>操作</th>
							</tr>

							@foreach($types as $type)
								<tr>
									<td>{!! $type->id !!}</td>
									<td>{!! $type->name !!}</td>
									<td>{!! $type->attributesSummary !!}</td>
									<td>{!! $type->updated_at !!}</td>
									<td>
										<a class="btn btn-xs btn-primary inline"
										   href="{!! route('panel.product-type.edit', $type->id) !!}">编辑</a>
										@if($type->trashed())
											<form
													action="{!! route('panel.product-type.restore', $type->id) !!}"
													method="post" class="inline">
												{!! csrf_field()!!}
												<button class="btn btn-xs btn-success inline"
												        type="submit">设为可见
												</button>
											</form>
										@else
											<form
													action="{!! route('panel.product-type.destroy', $type->id) !!}"
													method="post" id="destroy{!! $type->id !!}"
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
										style="display:inline-block;margin: 20px 0;">总数：{!! $types->total() !!}</span>
							</div>
							<div class="col-md-6">
								<div class="pull-right">{!! $types->links() !!}</div>
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
