@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-sm btn-primary"
                       href="{!! route('panel.user.create') !!}">新建管理用户</a>

                    <div class="box-tools" style="top: 10px;">
                        {{-- 搜索 --}}
                        <form action="{!! route('panel.user.index') !!}"
                              class="form-inline" id="filter-form">
                            <div class="input-group input-group-sm">
                                <select class="form-control pull-right filter-select" title="选择分类"
                                        name="visibility">
                                    <option value="0">按可用性</option>
                                    <option value="2" {!! app('request')->get('visibility') == 2 ? ' selected' : null !!}>
                                        已经禁用
                                    </option>
                                    <option value="1" {!! app('request')->get('visibility') == 1 ? ' selected' : null !!}>
                                        可用
                                    </option>
                                </select>
                            </div>
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="q" class="form-control pull-right"
                                       placeholder="搜索用户名"
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
                            <p>还没有管理用户，<a href="{!! route('panel.user.create') !!}">新建一个吧</a></p>
                        </div>
                        {{-- ./ 无信息 --}}
                    @else
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>用户名称</th>
                                <th>登录名</th>
                                <th style="width: 50%">拥有权限</th>
                                <th>操作</th>
                            </tr>

                            @foreach($users as $user)
                                <tr>
                                    <td>{!! $user->id !!}</td>
                                    <td>{!! $user->user_name !!}</td>
                                    <td>{!! $user->name !!}</td>
                                    <td>{!! $user->roles_display !!}</td>
                                    <td>
                                        @if(!$user->is_admin)
                                            <a class="btn btn-xs btn-primary inline"
                                               href="{!! route('panel.user.edit', $user->id) !!}">编辑</a>
                                            @if($user->trashed())
                                                <form action="{!! route('panel.user.restore', $user->id) !!}"
                                                      method="post" class="inline">
                                                    {!! csrf_field()!!}
                                                    <button class="btn btn-xs btn-success inline"
                                                            type="submit">启用
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{!! route('panel.user.destroy', $user->id) !!}"
                                                      method="post" id="destroy{!! $user->id !!}"
                                                      class="inline">
                                                    <input type="hidden" name="_method" value="delete">
                                                    {!! csrf_field() !!}
                                                    <button class="btn btn-xs btn-danger inline"
                                                            type="submit">禁用
                                                    </button>
                                                </form>
                                            @endif
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
                                <span style="display:inline-block;margin: 20px 0;">总数：{!! $users->total() !!}</span>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">{!! $users->links() !!}</div>
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
