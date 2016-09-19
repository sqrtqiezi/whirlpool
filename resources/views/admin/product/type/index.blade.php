@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-sm btn-info"
                       href="{!! route('panel.product.index') !!}">返回产品管理</a>
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
