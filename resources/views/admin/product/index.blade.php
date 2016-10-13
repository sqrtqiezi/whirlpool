@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
	<div class="row">

		<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<a class="btn btn-sm btn-primary"
						   href="{!! route('panel.product.create') !!}">创建产品</a>
						<a class="btn btn-sm btn-info"
						   href="{!! route('panel.product-type.index') !!}">产品分类管理</a>
                        <form method="post" action="{!! route('panel.product.resort') !!}" style="display: inline-block;" class="form-inline" id="sort-form">
                            {!! csrf_field() !!}
                            <input type="hidden" id="product-ids" name="product-ids" value="[]">
                            <input type="hidden" name="type" value="{!! $type !!}">
                            <button id="btnUpdateSort" type="submit" class="btn btn-sm btn-success" disabled>更新排序</button>
                        </form>

						<div class="box-tools" style="top: 10px;">
							{{-- 搜索 --}}
							<form action="{!! route('panel.product.index') !!}"
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
										@foreach($types as $typeId => $typeName)
											<option value="{!! $typeId !!}" {!! $type == $typeId ? ' selected' : '' !!}>{!! $typeName !!}</option>
											@endforeach
									</select>
								</div>
								<div class="input-group input-group-sm" style="width: 250px;">
									<input type="text" name="q" class="form-control pull-right"
									       placeholder="搜索主标题"
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
								<p>还没有内容，<a href="{!! route('panel.product.create') !!}">新建一个吧</a></p>
							</div>
							{{-- ./ 无信息 --}}
						@else
						<table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="text-align: center">排序</th>
                                <th>ID</th>
                                <th>分类</th>
                                <th>主标题</th>
                                <th>副标题</th>
                                <th>发布时间</th>
                                <th>最后编辑</th>
                                <th>操作</th>
                            </tr>
                            </thead>
							<tbody id="dnd">
							@foreach($products as $product)
								<tr>
                                    <td style="text-align: center">
                                        <span class="sort-handle" style="display: inline-block;margin: 0 auto;cursor: pointer;">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                        </span>
                                    </td>
									<td class="js-product-id">
                                        {!! $product->id !!}
                                    </td>
									<td><span class="badge bg-gray text-navy font-light">{!! $product->type->name !!}</span></td>
									<td>{!! $product->main_heading !!}</td>
									<td>{!! $product->sub_heading !!}</td>
									<td>{!! $product->created_at !!}</td>
									<td>{!! $product->updated_at !!}</td>
									<td>
										<a class="btn btn-xs btn-primary inline"
										   href="{!! route('panel.product.edit', $product->id) !!}">编辑</a>
										@if($product->trashed())
											<form
													action="{!! route('panel.product.restore', $product->id) !!}"
													method="post" class="inline">
												{!! csrf_field()!!}
												<button class="btn btn-xs btn-success inline"
												        type="submit">恢复
												</button>
											</form>
										@else
											<form
													action="{!! route('panel.product.destroy', $product->id) !!}"
													method="post" id="destroy{!! $product->id !!}"
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

        // var listWithHandle = document.getElementById('listWithHandle');
        Sortable.create(dnd, {
            animation: 150,
            handle: '.sort-handle',
            onUpdate: function () {
                btnUpdateSort.disabled = false;
                var ids = []
                $("td.js-product-id").each(function () {
                    ids.push($(this).text().trim())
                })
                $("#product-ids").val(ids)
            }
        })
	</script>
@endsection
