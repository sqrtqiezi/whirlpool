<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\Role;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:users']);
    }

    public function index(Request $request, UserRepository $repository)
    {
        $users = $repository->filter($request->all());
        $total = $repository->total();

        return view('admin.user.index', compact('users', 'total'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();
        $method = 'create';
        $roles = Role::all();

        return view('admin.user.create', compact('method', 'roles'));
    }

    public function store(UserRequest $request, UserRepository $repository)
    {
        $user = $repository->create($request['name'], $request['user_name']);
        if (isset($request['roles'])) {
            $user->roles()->sync($request['roles']);
        }
        alert()->success('', '用户添加成功！');

        return redirect()->intended();
    }


    /**
     * 编辑
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        $this->setPreviousUrl();

        $method = 'edit';
        $roles = Role::all();

        return view('admin.user.edit', compact('user', 'method', 'roles'));
    }

    /**
     * 更新
     *
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required'
        ]);

        $user->update($request->only('user_name'));

        if (isset($request['roles'])) {
            $user->roles()->sync($request['roles']);
        }

        alert()->success('', '用户信息更新成功！');

        return redirect()->back();
    }

    /**
     * 初始化密码
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function initPassword(User $user)
    {
        $user->update([
            'password' => bcrypt('123456')
        ]);

        alert()->success('', '用户密码初始化成功！');
        return redirect()->back();
    }

    /**
     * 禁用用户
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        alert()->success('', '该用户已经被禁用！');

        return redirect()->back();
    }

    /**
     * 启用被禁用的用户
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(User $user)
    {
        $user->restore();

        alert()->success('', '该用户已经启用！');

        return redirect()->back();
    }
}
