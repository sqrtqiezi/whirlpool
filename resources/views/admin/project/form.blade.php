<!-- form start -->
{!! csrf_field() !!}
<div class="box-body">

    {{-- 标题 --}}
    <div
            class="form-group {!! $titleError = $errors->has('title') ? 'has-error' : null !!}">
        <label for="inputEmail3" class="col-sm-2 control-label">标题</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3"
                   placeholder="标题" name="title" value="{!! $project->title or old('title') !!}">
            @if($titleError)
                <span class="help-block">标题必须填写</span>
            @endif
        </div>
    </div>
    {{-- /.标题 --}}

    {{-- 内容 --}}
    <div class="form-group {!! $contentError = $errors->has('description') ? 'has-error' : null !!}">
        <label for="inputPassword3"
               class="col-sm-2 control-label">内容</label>

        <div class="col-sm-10">
            <!-- 加载编辑器的容器 -->
            {{-- 务必不换行，否则会被 ueditor 转换成 p 标签 --}}
            <script id="container" name="description" type="text/plain">{!! $project->description or old('description') !!}</script>

            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
                ue.ready(function () {
                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                });
            </script>
            @if($contentError)
                <span class="help-block">案例描述必须填写</span>
            @endif
        </div>

    </div>
    {{-- /.内容 --}}

    {{-- 缩略图 --}}
    @include('admin.components.image-upload-input', ['itemObject' => 'project'])
    {{-- /.缩略图 --}}

</div>
<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary pull-right"
            style="margin: 0 10px">保存
    </button>
    <a href="{!! \URL::previous() !!}"
       class="btn btn-default pull-right" style="margin: 0 10px">返回</a>
</div>
<!-- /.box-footer -->
