<!-- form start -->
{!! csrf_field() !!}
<div class="box-body">

    {{-- 登录名 --}}
    <div class="form-group {!! $titleError = $errors->has('name') ? 'has-error' : null !!}">
        <label for="inputName" class="col-sm-2 control-label">登录名</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName"
                   @if($method === 'edit') readonly @endif
                   placeholder="登录名" name="name" value="{!! $user->name or old('name') !!}">
            @if($titleError)
                <span class="help-block">登录名不可为空，或者重复</span>
            @endif
        </div>
    </div>
    {{-- /.登录名 --}}

    {{-- 用户名称 --}}
    <div class="form-group {!! $titleError = $errors->has('user_name') ? 'has-error' : null !!}">
        <label for="inputName" class="col-sm-2 control-label">用户名</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUserName"
                   placeholder="用户名" name="user_name" value="{!! $user->user_name or old('user_name') !!}">
            @if($titleError)
                <span class="help-block">用户名不可为空</span>
            @endif
        </div>
    </div>
    {{-- /.用户名称 --}}

    {{-- 用户权限 --}}
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">用户权限</label>

        <div class="col-sm-10">
            @foreach($roles as $role)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                               @if(isset($user) && $user->roles()->find($role->id)) checked="checked" @endif> {{ $role->display_name }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    {{-- /.用户权限 --}}
</div>
<!-- /.box-body -->
<div class="box-footer">
    <div class="pull-left">
        <span>新建用户，初始化密码为：123456。登录之后请修改！</span>
    </div>
    <button type="submit" class="btn btn-primary pull-right" style="margin: 0 10px">保存</button>
    @if($method === 'edit')
        <button type="button" class="btn btn-danger pull-right js-init-password" style="margin: 0 10px">初始化密码</button>
    @endif
    <a href="{!! route('panel.user.index') !!}"
       class="btn btn-default pull-right" style="margin: 0 10px">返回</a>
</div>
<!-- /.box-footer -->
