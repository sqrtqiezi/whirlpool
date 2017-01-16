@extends('admin.layout.app')

@include('admin.components.alert')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <form action="{!! route('panel.site-config.store') !!}" class="form-horizontal" method="post">
                {!! csrf_field() !!}
                <div class="box">
                    <div class="box-body">

                        {{-- 首页标题 --}}
                        <div
                                class="form-group {!! $titleError = $errors->has('content.title') ? 'has-error' : null !!}">
                            <label for="inputEmail3" class="col-sm-2 control-label">网站标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3"
                                       placeholder="网站标题" name="content[title]"
                                       value="{!! $config->title or old('content.title') !!}">
                                <span class="help-block">
								@if($titleError)
                                        标题必须填写
                                    @else
                                        显示在每个页面的标题栏末尾，如：页面标题天气真不错 - 或公司名
                                    @endif
								</span>
                            </div>
                        </div>
                        {{-- /.首页标题 --}}

                        {{-- 关键字 --}}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">关键字</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3"
                                       placeholder="关键字，如：家电,洗衣机,冰箱,加湿器" name="content[keyword]"
                                       value="{!! $config->keyword or old('content.keyword') !!}">
                                <span class="help-block">
										供搜索引擎抓取，多个关键字用逗号分隔
								</span>
                            </div>
                        </div>
                        {{-- /.关键字 --}}

                        {{-- 描述 --}}
                        <div
                                class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">描述</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3"
                                       placeholder="描述" name="content[description]"
                                       value="{!! $config->description or old('content.description') !!}">
                                <span class="help-block">
										供搜索引擎抓取的站点描述
								</span>
                            </div>
                        </div>
                        {{-- /.描述 --}}

                        {{-- 品牌 --}}
                        <div
                                class="form-group {!! $brandError = $errors->has('content.brand') ? 'has-error' : null !!}">
                            <label for="inputEmail3" class="col-sm-2 control-label">品牌</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3"
                                       placeholder="品牌" name="content[brand]"
                                       value="{!! $config->brand or old('content.brand') !!}">
                                <span class="help-block">
								@if($brandError)
                                        品牌必须填写
                                    @else
                                        显示在每个页面的浏览器标题栏末尾，如：页面标题天气真不错 - 品牌
                                    @endif
								</span>
                            </div>
                        </div>
                        {{-- /.品牌 --}}

                        {{-- 备案号 --}}
                        <div class="form-group {!! $icpError = $errors->has('content.icp') ? 'has-error' : null !!}">
                            <label for="inputEmail3" class="col-sm-2 control-label">备案号</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3"
                                       placeholder="备案号" name="content[icp]"
                                       value="{!! $config->icp or old('content.icp') !!}">
                                <span class="help-block">
								@if($icpError)
                                        标题必须填写
                                    @else
                                        显示在页面底部
                                    @endif
								</span>
                            </div>
                        </div>
                        {{-- /.备案号 --}}

                        {{--网站栏目--}}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">栏目顺序</label>

                            <div class="col-sm-3">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">排序</th>
                                        <th>名称</th>
                                    </tr>
                                    </thead>
                                    <tbody id="dnd">
                                    @foreach($config->categories as $key => $category)
                                        <tr>
                                            <td style="text-align: center">
                                                <span class="sort-handle"
                                                      style="display: inline-block;margin: 0 auto;cursor: pointer;">
                                                    <i class="fa fa-th-large" aria-hidden="true"></i>
                                                </span>
                                            </td>
                                            <td class="js-category" data-category="{{ $key }}">
                                                {{ $category }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <input type="hidden" name="categories[]"
                                       value="{{ implode(',',array_keys($config->categories)) }}">
                            </div>
                        </div>
                        {{--/.网站栏目--}}


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right"
                                style="margin: 0 10px">保存
                        </button>
                        <a href="{!! \URL::previous() !!}"
                           class="btn btn-default pull-right" style="margin: 0 10px">返回</a>
                    </div>
                </div>
            </form>
            <!-- /.box -->
        </div>
    </div>
@endsection


@section('script-in-footer')
    @parent
    <script>
      // var listWithHandle = document.getElementById('listWithHandle');
      Sortable.create(dnd, {
        animation: 150,
        handle: '.sort-handle',
        onUpdate: function () {
          var categories = [];
          $('.js-category').each(function () {
            categories.push($(this).data('category'));
          })
          $('input[name="categories[]"').val(categories);
        }
      })
    </script>
@endsection